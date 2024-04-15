<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateAnnouncement extends Component
{
    use WithFileUploads;
    
    public $message;
    public $validated;
    public $temporary_images;
    public $images = [];
    public $image;
    public $form_id;
    public $annoncement;

    #[Validate('required', message:'Il titolo è richiesto')]
    #[Validate('max:50', message:'Il titolo è troppo lungo')] 
    public $title;
    #[Validate('required',message:'La descrizione è richiesta')]
    #[Validate('max:300', message:'La descrizione è troppo lunga')]  
    public $body;
    #[Validate('required', message:'Il prezzo è richiesto')] 
    public $price;
    #[Validate('required', message:'La Categoria è richiesta')]
    public $category_id;


    protected $rules= [
        // 'title'=>'required|min:4',
        // 'body'=>'required|min:8',
        // 'category_id'=>'required',
        'images.*'=>'image|max:1024',
        'temporary_images.*'=>'image|max:1024',
    ];

    protected $messages =[
        // 'required'=>'Il campo :attribute è richiesto',
        // 'min'=>'Il campo :attribute è troppo corto',
        'temporary_images.required'=>"L'immagine è richiesta",
        'temporary_images.*.image'=>'I file devono essere immagini',
        'temporary_images.*.max'=>"L'immagine dev'essere massimo di 1mb",
        'images.image'=> "L'immagine dev'essere un'immagine",
        'images.max'=> "L'immagine dev'essere massimo di 1mb",
    ];

    public function updatedTemporaryImages()
    {
        if($this->validate([
            'temporary_images.*'=>'image|max:1024',
        ])){
            foreach ($this->temporary_images as $image){
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }
    


    public function store(){

        $this->validate();
        
        $this->announcement = Category::find($this->category_id)->announcements()->create($this->validate());
        if(count($this->images)){
            foreach ($this->images as $image) {
                $this->announcement->images()->create(['path'=>$image->store('images','public')]);
            }
        }

        // Announcement::create([
        //     'title'=>$this->title,
        //     'body'=>$this->body,
        //     'price'=>$this->price,
        //     'category_id'=>$this->category_id,
        //     'user_id'=>Auth::user()->id
        // ]);
        
        // $this->reset();
        session()->flash('success','Annuncio creato con successo, sarà pubblicato dopo la revisione');
        $this->cleanForm();
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function cleanForm()
    {
        $this->title = '';
        $this->body='';
        $this->category_id='';
        $this->image='';
        $this->images=[];
        $this->temporary_images=[];
        $this->form_id=rand();
    }


    public function render()
    {
        return view('livewire.create-announcement');
    }
}

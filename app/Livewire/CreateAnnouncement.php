<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Announcement;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class CreateAnnouncement extends Component
{
    use WithFileUploads;

    public $temporary_images;
    public $images = [];
    public $image;
    public $form_id;
    public $annoncement;

    protected $rules= [
        'title'=>'required|min:4',
        'body'=>'required|min:8',
        'category'=>'required',
        'images.*'=>'image|max:1024',
        'temporary_images.*'=>'image|max:1024',
    ];

    protected $messages =[
        'required'=>'Il campo :attribute è richiesto',
        'min'=>'Il campo :attribute è troppo corto',
        'temporary_images.required'=>"L\'immagine è richiesta",
        'temporary_images.*.image'=>'I file devono essere immagini',
        'temporary_images.*.max'=>"L\'immagine dev\'essere massimo di 1mb",
        'images.image'=> "L\'immagine dev\'essere un\'immagine",
        'images.max'=> "L\'immagine dev\'essere massimo di 1mb",
    ];

    public function updateTemporaryImages()
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

    public function store(){

        $this->validate();
        
        Announcement::create([
            'title'=>$this->title,
            'body'=>$this->body,
            'price'=>$this->price,
            'category_id'=>$this->category_id,
            'user_id'=>Auth::user()->id
        ]);
        
        $this->reset();
        session()->flash('success','Annuncio creato con successo');
    }


    public function render()
    {
        return view('livewire.create-announcement');
    }
}

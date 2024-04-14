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

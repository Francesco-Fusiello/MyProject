<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Announcement;
use Livewire\Attributes\Validate;

class CreateAnnouncement extends Component
{
    #[Validate('required', message:'Il titolo è richiesto')]
    #[Validate('max:50', message:'Il titolo è troppo lungo')] 
    public $title;
    #[Validate('required',message:'La descrizione è richiesta')]
    #[Validate('max:300', message:'La descrizione è troppo lunga')]  
    public $body;
    #[Validate('required', message:'Il prezzo è richiesto')] 
    public $price;

    public function store(){

        $this->validate();

        Announcement::create([
            'title'=>$this->title,
            'body'=>$this->body,
            'price'=>$this->price
        ]);

        $this->reset();
        session()->flash('success','Annuncio creato con successo');
    }


    public function render()
    {
        return view('livewire.create-announcement');
    }
}

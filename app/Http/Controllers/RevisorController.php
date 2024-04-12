<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index(){
        $announcement_to_check = Announcement::where('is_accepted',null)->first();
        return view('revisor.index',compact('announcement_to_check')); 
    }

    public function acceptAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(true);
        return redirect()->back()->with('message', "Complimenti, hai accettato l'annuncio");
    }

    public function rejectAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(false);
        return redirect()->back()->with('message', "Hai rifiutato l'annuncio");
    }

    public function becomeRevisor(){
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('message','Complimenti! Hai richiesto di diventare revisore correttamente');
    }

    public function makeRevisor(User $user)
    {
    Artisan::call('presto:makeUserRevisor',['email'=> $user->email]);
      return redirect('/')->with('message',"Complimenti! L'utente {$user->name} è diventato revisore ");
    }

    public function resetLastAcceptedAnnouncement()
    {
        // Trova l'ultimo annuncio revisionato
        $announcement = Announcement::whereNotNull('is_accepted')->orderBy('updated_at', 'desc')->first(); 
        // Se è stato trovato un annuncio, resetta il campo 'is_accepted' a null
        $announcement->is_accepted=null;          
        $announcement->save();
        return redirect()->back()->with('message', 'annuncio recuperato');
            
            
            
        }
        
}





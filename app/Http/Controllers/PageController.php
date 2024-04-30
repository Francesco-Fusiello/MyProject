<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        $announcements= Announcement::where('is_accepted', true)->orderBy('created_at','desc')->paginate(6);
        return view('welcome',compact('announcements'));
}

public function categoryShow(Category $category) {
    $announcements= Announcement::where('is_accepted', true)->latest()->get();
    // dd($announcements);
    return view('categoryShow',compact('category','announcements'));
}

public function searchAnnouncements(Request $request){
    $searchTerm = $request->searched;
    $announcements = Announcement::search($searchTerm)->where('is_accepted',true)->orderBy('created_at','desc')->paginate(12)->withQueryString();
   
    return view('announcements.index',compact('announcements'));
}


public function setLanguage($lang)
{
    session()->put('locale', $lang);
    return redirect()->back();
}

public function chiSiamo(){
    return view('chiSiamo');
}

}
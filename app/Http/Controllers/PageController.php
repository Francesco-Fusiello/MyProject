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
    return view('categoryShow',compact('category'));
}

public function searchAnnouncements(Request $request){
    $searchTerm = $request->searched;
    $announcements = Announcement::search($searchTerm)->where('is_accepted',true)->paginate(10);
    return view('announcements.index',compact('announcements', 'searchTerm'));
}


public function setLanguage($lang)
{
    session()->put('locale', $lang);
    return redirect()->back();
}

}
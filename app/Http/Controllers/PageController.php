<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        $announcements= Announcement::take(10)->get()->sortByDesc('created_at');
        return view('welcome',compact('announcements'));
}
}

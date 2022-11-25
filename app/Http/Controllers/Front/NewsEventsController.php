<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsEventsController extends Controller
{
    public function index(){
        $newsEvents=NewsAndEvents::with(['newsCategories'])->orderBy('id','desc')->take(3)->get();
        return view('Main.frontend.news_and_events',compact('newsEvents'));
    }
}

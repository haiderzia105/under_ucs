<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Main\NewsAndEvents;
use App\Models\Main\NewsCategories;

class HomeController extends Controller
{
    public function index()
    {
        $newsandevents = NewsAndEvents::orderBy('event_date', 'DESC')->latest()->paginate(4);;
    //   dd($newsandevents);
        return view(('main.frontend.index'),compact('newsandevents'));
    }

}

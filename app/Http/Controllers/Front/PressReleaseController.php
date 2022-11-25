<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\Main\NewsAndEvents;
use App\Models\Main\NewsCategories;


class PressReleaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $newsEvents=NewsAndEvents::with(['newsCategories'])->where('slug',$slug)->first();
             //getting recent posts
        $recentsEvents = NewsAndEvents::with(['newsCategories'])->orderBy('id','desc')->take(4)->get();
        //getting categories
        $coCurricularActivities=NewsCategories::where('id',1)->first();
        $allNewsAndEvents=NewsCategories::where('id',3)->first();
        return view('Main.frontend.press_release_detail',compact('coCurricularActivities','allNewsAndEvents','newsEvents','recentsEvents'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
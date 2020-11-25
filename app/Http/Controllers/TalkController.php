<?php

namespace App\Http\Controllers;

use App\Talk;
use Illuminate\Http\Request;

class TalkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Talk  $talk
     * @return \Illuminate\Http\Response
     */
    public function show(Talk $talk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Talk  $talk
     * @return \Illuminate\Http\Response
     */
    public function edit(Talk $talk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Talk  $talk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Talk $talk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Talk  $talk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Talk $talk)
    {
        //
    }
    // public function talk(Request $request)
    // {
    //     $talk=new Talk();
       
    //     $talk->name=$_POST['name'];
    //     $talk->phone=$_POST['phone'];
    //     $talk->gmail=$_POST['gmail'];
    //     $talk->text=$_POST['text'];
    //     $talk->save();
    //     $request->session()->flash('msg','Data submitted');
    //     return redirect()->route('talk');
    // }
}

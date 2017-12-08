<?php

namespace App\Http\Controllers;

use App\Link;
use App\Alert;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::all();
        return view('links.index')->with('links', $links);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      return view('links.form');
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
        $link = new Link;
        $link->name = $request->name;
        $link->link = $request->link;
        $link->imagePath = $request->imagePath;
        var_dump($request->thumbnail);
        die();
        $request->file('thumbnail')->move(public_path('images'), $request->files('thumbnail')->getClientOriginalName() );
        $link->save();

        $request->session()->flash('flash-success', 'Link added successfully.');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Link $link)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Link $link)
    {
      $request->session()->flash('flash-warning', $link->name . ' removed successfully.');
      $link->delete();
      return redirect()->back();
        //

    }
}

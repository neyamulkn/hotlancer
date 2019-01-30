<?php

namespace App\Http\Controllers;

use App\gig;
use Illuminate\Http\Request;

class GigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_gig()
    {
        return view('backend/gigs');
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
     * @param  \App\gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function show(gig $gig)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function edit(gig $gig)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gig $gig)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function destroy(gig $gig)
    {
        //
    }
}

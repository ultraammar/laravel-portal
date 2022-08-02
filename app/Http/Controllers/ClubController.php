<?php

namespace App\Http\Controllers;

use App\Models\club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.club');
    }
    public function students()
    {
        //
        return view('club.students.index');
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
     * @param  \App\Models\club  $club
     * @return \Illuminate\Http\Response
     */
    public function show(club $club)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\club  $club
     * @return \Illuminate\Http\Response
     */
    public function edit(club $club)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, club $club)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(club $club)
    {
        //
    }
}

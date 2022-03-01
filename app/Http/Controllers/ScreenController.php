<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreScreenRequest;
use App\Http\Requests\UpdateScreenRequest;
use App\Models\Screen;

class ScreenController extends Controller
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
     * @param  \App\Http\Requests\StoreScreenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreScreenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Screen  $screen
     * @return \Illuminate\Http\Response
     */
    public function show(Screen $screen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Screen  $screen
     * @return \Illuminate\Http\Response
     */
    public function edit(Screen $screen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateScreenRequest  $request
     * @param  \App\Models\Screen  $screen
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateScreenRequest $request, Screen $screen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Screen  $screen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Screen $screen)
    {
        //
    }
}

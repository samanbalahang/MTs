<?php

namespace App\Http\Controllers\thepublic;

use App\Models\thepublic\mainPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("thepublic.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(mainPage $mainPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mainPage $mainPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mainPage $mainPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mainPage $mainPage)
    {
        //
    }
    public function future(){
        return view("thepublic.future");
    }
    public function favorite(){
        return view("thepublic.favorite");
    }
}

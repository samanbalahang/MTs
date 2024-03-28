<?php

namespace App\Http\Controllers\thepublic;

use App\Models\Thirteen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThirteenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($uri=null)
    {
        if(isset($uri)){
            dd("set");
        }else{
            return view("thepublic.Thirteen");
        }
        //
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
    public function show(Thirteen $thirteen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Thirteen $thirteen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Thirteen $thirteen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Thirteen $thirteen)
    {
        //
    }
}

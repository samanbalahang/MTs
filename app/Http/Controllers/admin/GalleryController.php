<?php

namespace App\Http\Controllers\admin;

use App\Models\admin\gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\HelperController;
use App\Http\Controllers\admin\testerController;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        if(Gallery::exists()){
            $gallery = Gallery::all();
            return view("thepublic.gallery", compact("gallery"));
        }else{
            return abort(404);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("dashboard.gallery.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $helper = new testerController;
        $file   = $request->file('mainImg');
        if(isset($file)){
            $saveTo = "uploads/".$helper->stringDate()."/";
            // dd($saveTo);
            $address = $helper->saveMediaFile($request,"mainImg", $saveTo);
        }else{
            $file   = $request->file('file');
            $saveTo = "uploads/".$helper->stringDate()."/";
            $address = $helper->saveMediaFile($request,"file", $saveTo);
        }
        $request["mainImg"]=$address;
        if(gallery::create($request->all())){
                return redirect()->route("index",["messeage"=>$helper->result_msg("done")]);
            }else{
                return redirect()->route("index",["messeage"=>$helper->result_msg("error")]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(gallery $gallery)
    {
        //
    }
}

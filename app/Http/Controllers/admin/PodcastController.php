<?php

namespace App\Http\Controllers\admin;

use App\Models\admin\Podcast;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if(Podcast::exists()){
            $pages = Podcast::all();
            return view("dashboard.podcasts.index",compact("pages"));
        }else{
            return view("dashboard.podcasts.index");
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("dashboard.books.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $helper = new HelperController;
        $file   = $request->file('Imgmain');
        $a = $request;
        if(isset($file)){
            $saveTo = "uploads/books/".$helper->stringDate()."/";
            // dd($saveTo);
            $address = $helper->saveMediaFile($request,"Imgmain", $saveTo);
            $a["mainImg"]=$address;
        }
        $content = $request["content"];
        $content = str_replace('<div style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, " courier="" new",="" monospace;="" font-size:="" 14px;="" line-height:="" 19px;="" white-space:="" pre;"=""><div courier="" new",="" monospace;="" font-size:>','<div>',$content);
        $request["content"]=$content;
        if(Podcast::create($a->all())){
                return redirect()->route("podcasts.index",["messeage"=>$helper->result_msg("done")]);
            }else{
                return redirect()->route("podcasts.index",["messeage"=>$helper->result_msg("error")]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Podcast $podcast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Podcast $podcast,$id)
    {
        //
        $thispage = Podcast::find($id);
        return view("dashboard.pages.edit",compact("thispage"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Podcast $podcast,$id)
    {
        //
        $thispage = Podcast::find($id);
        $content = $request["content"];
        $content = str_replace('<div style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, " courier="" new",="" monospace;="" font-size:="" 14px;="" line-height:="" 19px;="" white-space:="" pre;"=""><div courier="" new",="" monospace;="" font-size:>','<div>',$content);
        $request["content"]=$content;
        if($thispage->update($request->all())){
            return redirect()->route("movies.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Podcast $podcast)
    {
        //
        $thidbook = Podcast::find($podcast->id);
        $thidbook->delete();
        return redirect()->route("podcastss.index");
    }
    public function thepublic($uri = null)
    {
        if($uri != null){
            $thispage = Podcast::where("uri",$uri)->firstOrFail();
            return view("thepublic.page",compact("thispage"));
        }else{
            $allpages = Podcast::all();
            return view("thepublic.allpages",compact("allpages"));
        }
    }
}

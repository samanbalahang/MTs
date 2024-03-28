<?php

namespace App\Http\Controllers\admin;

use App\Models\admin\Newsletters;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewslettersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if(Newsletters::exists()){
            $pages = Newsletters::all();
            return view("dashboard.news.index",compact("pages"));
        }else{
            return view("dashboard.news.index");
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("dashboard.news.add");
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
            $saveTo = "uploads/news/".$helper->stringDate()."/";
            // dd($saveTo);
            $address = $helper->saveMediaFile($request,"Imgmain", $saveTo);
            $a["mainImg"]=$address;
        }
        $content = $request["content"];
        $content = str_replace('<div style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, " courier="" new",="" monospace;="" font-size:="" 14px;="" line-height:="" 19px;="" white-space:="" pre;"=""><div courier="" new",="" monospace;="" font-size:>','<div>',$content);
        $request["content"]=$content;
        if(Newsletters::create($a->all())){
                return redirect()->route("news.index",["messeage"=>$helper->result_msg("done")]);
            }else{
                return redirect()->route("news.index",["messeage"=>$helper->result_msg("error")]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Newsletters $newsletters)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Newsletters $newsletters,$id)
    {
        //
        $thispage = Newsletters::find($id);
        return view("dashboard.news.edit",compact("thispage"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Newsletters $newsletters,$id)
    {
        //
        $thispage = Newsletters::find($id);
        $content = $request["content"];
        $content = str_replace('<div style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, " courier="" new",="" monospace;="" font-size:="" 14px;="" line-height:="" 19px;="" white-space:="" pre;"=""><div courier="" new",="" monospace;="" font-size:>','<div>',$content);
        $request["content"]=$content;
        if($thispage->update($request->all())){
            return redirect()->route("news.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Newsletters $newsletters)
    {
        //
        $thidbook = Newsletters::find($newsletters->id);
        $thidbook->delete();
        return redirect()->route("news.index");
    }


    public function thepublic($uri = null)
    {
        if($uri != null){
            $thispage = Newsletters::where("uri",$uri)->firstOrFail();
            return view("thepublic.page",compact("thispage"));
        }else{
            $allpages = Newsletters::all();
            return view("thepublic.allpages",compact("allpages"));
        }
    }
}

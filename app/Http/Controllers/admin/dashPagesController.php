<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;         
use App\Models\admin\Pages;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\HelperController;
use App\Http\Controllers\admin\testerController; 
class dashPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Pages::exists()){
            $pages = Pages::all();
            return view("dashboard.pages.index",compact("pages"));
        }else{
            return view("dashboard.pages.index");
        }
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.pages.add");
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
      
        // dd(HelperController::stringDate()); 
        // dd(testerController::stringDate()); 
        $helper = new testerController;
        $file   = $request->file('mainImg');
        if(isset($file)){
            $saveTo = "uploads/".$helper->stringDate()."/";
            // dd($saveTo);
            $address = $helper->saveMediaFile($request,"mainImg", $saveTo);
        }
        $content = $request["content"];
        $content = str_replace('<div style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, " courier="" new",="" monospace;="" font-size:="" 14px;="" line-height:="" 19px;="" white-space:="" pre;"=""><div courier="" new",="" monospace;="" font-size:>','<div>',$content);
        $request["content"]=$content;
        $request["mainImg"]=$address;
        if(Pages::create($request->all())){
                return redirect()->route("pages.index",["messeage"=>$helper->result_msg("done")]);
            }else{
                return redirect()->route("pages.index",["messeage"=>$helper->result_msg("error")]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function show(Pages $pages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function edit(Pages $pages,$id)
    {
        //
        // dd($id);
        $thispage = Pages::find($id);
        return view("dashboard.pages.edit",compact("thispage"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pages $pages,$id)
    {
        //
        $thispage = Pages::find($id);
        $content = $request["content"];
        $content = str_replace('<div style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, " courier="" new",="" monospace;="" font-size:="" 14px;="" line-height:="" 19px;="" white-space:="" pre;"=""><div courier="" new",="" monospace;="" font-size:>','<div>',$content);
        $request["content"]=$content;
        if($thispage->update($request->all())){
            return redirect()->route("pages.index");
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pages $pages)
    {
        //
        $thidbook = Pages::find($pages->id);
        $thidbook->delete();
        return redirect()->route("pages.index");
    }

    public function single($pages)
    {
        $thispage = Pages::where("uri",$pages)->firstOrFail();
        return view("thepublic.page",compact("thispage"));
    }
}

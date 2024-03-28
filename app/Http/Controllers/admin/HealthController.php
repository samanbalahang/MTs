<?php

namespace App\Http\Controllers\admin;

use App\Models\admin\Health;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HealthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if(Health::exists()){
            $pages = Health::all();
            return view("dashboard.health.index",compact("pages"));
        }else{
            return view("dashboard.health.index");
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("dashboard.health.add");
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
            $saveTo = "uploads/health/".$helper->stringDate()."/";
            // dd($saveTo);
            $address = $helper->saveMediaFile($request,"Imgmain", $saveTo);
            $a["mainImg"]=$address;
        }
        $content = $request["content"];
        $content = str_replace('<div style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, " courier="" new",="" monospace;="" font-size:="" 14px;="" line-height:="" 19px;="" white-space:="" pre;"=""><div courier="" new",="" monospace;="" font-size:>','<div>',$content);
        $request["content"]=$content;
        if(Health::create($a->all())){
                return redirect()->route("health.index",["messeage"=>$helper->result_msg("done")]);
            }else{
                return redirect()->route("health.index",["messeage"=>$helper->result_msg("error")]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Health $health)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Health $health,$id)
    {
        //
        $thispage = Health::find($id);
        return view("dashboard.pages.edit",compact("thispage"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Health $health,$id)
    {
        //
        $thispage = Health::find($id);
        $content = $request["content"];
        $content = str_replace('<div style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, " courier="" new",="" monospace;="" font-size:="" 14px;="" line-height:="" 19px;="" white-space:="" pre;"=""><div courier="" new",="" monospace;="" font-size:>','<div>',$content);
        $request["content"]=$content;
        if($thispage->update($request->all())){
            return redirect()->route("Health.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Health $health)
    {
        //
        $thidbook = Health::find($health->id);
        $thidbook->delete();
        return redirect()->route("health.index");
    }
    public function thepublic($uri = null)
    {
        if($uri != null){
            $thispage = Health::where("uri",$uri)->firstOrFail();
            return view("thepublic.page",compact("thispage"));
        }else{
            $allpages = Health::all();
            return view("thepublic.allpages",compact("allpages"));
        }
    }
}

<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\admin\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if(Movies::exists()){
            $pages = Movies::all();
            return view("dashboard.movies.index",compact("pages"));
        }else{
            return view("dashboard.movies.index");
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("dashboard.movies.add");
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
            $saveTo = "uploads/movies/".$helper->stringDate()."/";
            // dd($saveTo);
            $address = $helper->saveMediaFile($request,"Imgmain", $saveTo);
            $a["mainImg"]=$address;
        }
        $content = $request["content"];
        $content = str_replace('<div style="color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, " courier="" new",="" monospace;="" font-size:="" 14px;="" line-height:="" 19px;="" white-space:="" pre;"=""><div courier="" new",="" monospace;="" font-size:>','<div>',$content);
        $request["content"]=$content;
        if(Movies::create($a->all())){
                return redirect()->route("movies.index",["messeage"=>$helper->result_msg("done")]);
            }else{
                return redirect()->route("movies.index",["messeage"=>$helper->result_msg("error")]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Movies $movies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movies $movies,$id)
    {
        //
        $thispage = Movies::find($id);
        return view("dashboard.pages.edit",compact("thispage"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movies $movies,$id)
    {
        //
        $thispage = Movies::find($id);
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
    public function destroy(Movies $movies)
    {
        //
        $thidbook = Movies::find($movies->id);
        $thidbook->delete();
        return redirect()->route("movies.index");
    }
    public function thepublic($uri = null)
    {
        if($uri != null){
            $thispage = Movies::where("uri",$uri)->firstOrFail();
            return view("thepublic.page",compact("thispage"));
        }else{
            $allpages = Movies::all();
            $heading  = "فیلمها";
            return view("thepublic.allpages",compact("allpages",'heading'));
        }
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\UserProfile;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Http\Controllers\admin\HelperController;

class dashUserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = new User;
        if($users::exists()){
            $users= User::all();
              return view("dashboard.user.index", compact("users"));
        }else{
            return view("dashboard.user.index");
        }
        // return view("dashboard.user.index");
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.user.add");
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
        $helper = new HelperController;
        $file   = $request->file('mainImg');
        if(!Role::exists()){
            $this->createRole();
        }
        if(isset($file)){
            $address = $helper->saveMediaFile($request,"mainImg","uploads/user/");
        }else{
            $address = "defaultIMG/Meddos-default.jpg";
        }
        $request["active"] = $helper->checkboxoutput($request["active"]);
        $request["hash"] = $helper->createhash($helper->createfourRandumDigit());

        if(!User::exists()){
            $request["role_id"] = 1;
            if(User::create($request->all())){
                return redirect()->route("users.index",["messeage"=>$helper->result_msg("done")]);
            }else{
                return redirect()->route("users.index",["messeage"=>$helper->result_msg("error")]);
            }
        }else{
            $request["role_id"] = 2;
            if(User::create($request->all())){
                return redirect()->route("login",["messeage"=>$helper->result_msg("done")]);
            }else{
                return redirect()->route("login",["messeage"=>$helper->result_msg("error")]);
            }
        }
            

    }
    public function createRole(){
        $role   = array();
        $role["name"]         = "admin";
        $role["faname"]       = "ادمین";
        $role["description"]  = "admin";
        Role::create($role);
        $role["name"]        = "buyer";
        $role["faname"]      = "خریدار";
        $role["description"] = "buyer";
        Role::create($role);
        $role["name"]        = "user";
        $role["faname"]      = "کاربر";
        $role["description"] = "user";
        Role::create($role);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function show(UserProfile $userProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProfile $userProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserProfile $userProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProfile $userProfile)
    {
        //
    }
}

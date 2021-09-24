<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    //
    function index(){

        return view('user.index');
    }
   function memberPlan(){

    	return view('user.membership.membership_plan');
    }
    function memberStatus(){

    	return view('user.membership.membership_status');
    }
    function whishlistProduct(){

    	return view('user.whishlist.products');
    }
    function whishlistVendors(){

    	return view('user.whishlist.vendors');
    }
    function settingProfile(){

    	return view('user.setting.edit_profile');
    }
    function settingPassword(){

    	return view('user.setting.change_password');
    }

    //Become a vendor
    function becomeVendor(Request $request){
        $data = $request->all();
        User::becomeVendor($data);
        
        return redirect()->back()->with('success', 'Request submitted.');
    }
}

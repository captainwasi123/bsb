<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\countries;
use App\Models\User;
use Auth;

class vendorController extends Controller
{
    //
    function index(){

    	return view('vendor.index');
    }
    function basicInfo(){
        $data['countries'] = countries::all();

    	return view('vendor.profile.basic_info')->with($data);
    }
    function basicInfoSubmit(Request $request){
        $data = $request->all();

        User::updateVendor($data);
        if ($request->hasFile('logo_file')) {
            $file = $request->file('logo_file');
            $filename = Auth::id().'-'.date('dmyHis').'.'.$file->getClientOriginalExtension();
            $file->move(base_path('/public/storage/vendor/logo/'), $filename);

            User::updateLogo($filename);
        }
        return redirect()->back()->with('success', 'Profile Updated.');
    }




    function passSecurity(){

    	return view('vendor.profile.pass_security');
    }
    function addNewProduct(){

    	return view('vendor.product.add_new_product');
    }
    function allProduct(){

    	return view('vendor.product.all_product');
    }
    function pendingProduct(){

    	return view('vendor.product.pending_product');
    }
    function approveProduct(){

    	return view('vendor.product.approve_product');
    }
    function rejectProduct(){

    	return view('vendor.product.reject_product');
    }
    function memberPlan(){

    	return view('vendor.virtual.member_plan');
    }
    function memberStatus(){

    	return view('vendor.virtual.member_status');
    }

}

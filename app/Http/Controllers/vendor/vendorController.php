<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class vendorController extends Controller
{
    //
    function index(){

    	return view('vendor.index');
    }
    function basicInfo(){

    	return view('vendor.profile.basic_info');
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

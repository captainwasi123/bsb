<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
      //
    function index(){

    	return view('admin.index');
    }
    function vendorNew(){

    	return view('admin.vendor.new_request');
    }
    function vendorFeatured(){

    	return view('admin.vendor.featured_vendors');
    }
    function vendorActive(){

    	return view('admin.vendor.active_vendors');
    }
    function vendorBlocked(){

    	return view('admin.vendor.blocked_vendors');
    }
    function usersAll(){

    	return view('admin.users.all_users');
    }
    function usersBlocked(){

    	return view('admin.users.blocked_users');
    }
    function usersPremium(){

    	return view('admin.users.premium_users');
    }
    function settingRole(){

    	return view('admin.setting.admin_role');
    }
    function productPending(){

    	return view('admin.featured_product.pending_product');
    }
    function productPublish(){

    	return view('admin.featured_product.publish_product');
    }
    function productExpired(){

    	return view('admin.featured_product.expired_product');
    }
    function productBlocked(){

    	return view('admin.featured_product.blocked_product');
    }
    function memberPending(){

    	return view('admin.featured_member.pending_member');
    }
    function memberPublish(){

    	return view('admin.featured_member.publish_member');
    }
    function memberExpired(){

    	return view('admin.featured_member.expired_member');
    }
    function memberBlocked(){

    	return view('admin.featured_member.blocked_member');
    }
    function memberCancel(){

    	return view('admin.featured_member.cancel_member');
    }

}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class adminController extends Controller
{
      //
    function index(){

    	return view('admin.index');
    }

    function vendorNew(){

      $data = User::where('id', Auth::id())->where('vendor_status',1)->get();

    return view('admin.vendor.new_request', ['data' => $data]);
     }
    
    function vendorFeatured(){

    	return view('admin.vendor.featured_vendors');
    }

    function vendorActive(){

      $data = User::where('id', Auth::id())->where('vendor_status',2)->get();

    	return view('admin.vendor.active_vendors', ['data' => $data]);
    }

    function vendorBlocked(){

      $data = User::where('id', Auth::id())->where('vendor_status',3)->get();


    	return view('admin.vendor.blocked_vendors',['data' => $data]);
    }

    function changeStatus($id, $status){

      $user=User::find(base64_decode($id));
      $user->vendor_status = $status;
      $user->save();

      return redirect()->back()->with('success', 'Vendor Status Updated.');
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

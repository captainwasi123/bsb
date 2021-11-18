<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\membership\Membership_user as MU;
use App\Models\membership\Membership_vendor as MV;
use Auth;
use DB;

class adminController extends Controller
{
      //
    function index(){

      $totaluser=User::all()->count();
      $vendoruser=User::where('vendor_status',2)->count();
      
      
    	return view('admin.index',['totaluser' => $totaluser, 'vendoruser' => $vendoruser]);

    
    }

    function vendorNew(){

      $data = User::where('vendor_status',1)->get();

    return view('admin.vendor.new_request', ['data' => $data]);
     }

    function vendorFeatured(){

        $data =User::where('is_feature', 1)->where('vendor_status',2)->get();

    	return view('admin.vendor.featured_vendors', ['data' => $data]);
    }

    function featureStatus($id, $status){

        $user=User::find(base64_decode($id));
        $user->	is_feature = $status;
        $user->save();

        return redirect()->back()->with('success', 'Vendor Feature Updated.');
      }

    function vendorActive(){

      $data = User::where('vendor_status',2)->get();

    	return view('admin.vendor.active_vendors', ['data' => $data]);
    }

    function vendorBlocked(){

      $data = User::where('vendor_status',3)->get();


    	return view('admin.vendor.blocked_vendors',['data' => $data]);
    }

    function changeStatus($id, $status){

      $user=User::find(base64_decode($id));
      $user->vendor_status = $status;
      $user->save();

      return redirect()->back()->with('success', 'Vendor Status Updated.');
    }




    function settingRole(){

    	return view('admin.setting.admin_role');
    }

    function memberPending(){

        $data =array([
            'vendor' => MU::where('status',)
        ]);

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

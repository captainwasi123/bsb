<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\countries;
use App\Models\User;
use Auth;
use Hash;

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
    function passSecuritySubmit(Request $request){
        $data = $request->all();
        $password = $request->input('old_password');

        $user = User::find(Auth::id());
        if (!Hash::check($password, $user->password)) {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }else{
            if($data['password'] == $data['password_confirmation']){
                $user->password = bcrypt($data['password']);
                $user->save();

                return redirect()->back()->with('success', 'Password updated.');
            }else{
                return redirect()->back()->with('error', 'Password does not match.');
            }
        }
    }



    function memberPlan(){

    	return view('vendor.virtual.member_plan');
    }
    function memberStatus(){

    	return view('vendor.virtual.member_status');
    }

}

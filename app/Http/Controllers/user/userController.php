<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
Use App\Models\favourite_prod_user as Fav;
use Auth;
use Hash;

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

        $data=Fav::where('user_id', Auth::id())->get();
    	return view('user.whishlist.products', ['data' => $data] );
    }

    function deleteWishlistProduct($id){
        $id = base64_decode($id);
        $p = Fav::destroy($id);

        return redirect()->back()->with('success', 'Product Deleted Successfully.');
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

    function settingPasswordSubmit(Request $request)
    {
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



    //Become a vendor
    function becomeVendor(Request $request){
        $data = $request->all();
        User::becomeVendor($data);

        return redirect()->back()->with('success', 'Request submitted.');
    }
}

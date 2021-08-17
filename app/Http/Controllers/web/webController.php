<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\products\categories;
use Auth;

class webController extends Controller
{
    //
    function index(){
        $data = array(
            'categories' => categories::all()
        );
        return view('web.index')->with($data);
    }

    function about(){

        return view('web.about');
    }

    function categories(){

        return view('web.categories');
    }
    function category($id, $name){
        $id = base64_decode($id);
        $data = categories::find($id);

        return view('web.category', ['data' => $data]);

    }

    function physicalBox(){

        return view('web.physicalBox');
    }



    function login(){

        return view('web.login');
    }
    function loginSubmit(Request $request){
        $data = $request->all();
        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'status' => '1'])){

            return redirect('/');
        }else{

            return redirect()->back()->with('error', 'Authentication Error');
        }
    }

    function register(){

        return view('web.register');
    }
    function registerSubmit(Request $request){
        $validated = $request->validate([
            'email' => 'required|unique:tbl_users_info|max:255',
            'password' => 'required|confirmed|min:6',
        ]);
        $data = $request->all();
        User::addUser($data);
        return redirect(route('web.login'))->with('success', 'Account Created.');
    }

    function logout(){
        Auth::logout();

        return redirect(route('web.login'))->with('error', 'Account Logged Out.');
    }
}

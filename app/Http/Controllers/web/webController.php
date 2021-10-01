<?php

namespace App\Http\Controllers\web;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\products\product;
use App\Models\products\categories;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\favourite_prod_user as fav;


class webController extends Controller
{
    //
    function index(){
        $data['categories'] =categories::all();
        $data['users'] =User::where('is_feature',1)->latest()->limit(6)->get();


        return view('web.index')->with($data);
    }

    function favprod($id){
        $id = base64_decode($id);
        $da = fav::where(['user_id' => Auth::id(), 'product_id' => $id])->first();
        if(empty($da->id)){
            $f = new fav;
            $f->user_id = Auth::id();
            $f->product_id = $id;
            $f->save();

            return '1';
        }else{
            fav::destroy($da->id);

            return '0';
        }
    }



    function about(){

        return view('web.about');
    }

    function categories(){

        return view('web.categories');
    }
    function category($id, $name){
        $id = base64_decode($id);
        $data['category'] = categories::find($id);
        $data['products'] = product::where('category_id', $id)->where('status', '1')->latest()->limit(6)->get();
        $data['users'] =User::where('is_feature',1)->latest()->limit(6)->get();


        return view('web.category')->with($data);

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

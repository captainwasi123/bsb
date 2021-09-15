<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\products\categories;
use App\Models\products\product;
use Auth;

class productController extends Controller
{
    //

    function addNewProduct(){
        $data['categories'] = categories::all();

        return view('vendor.product.add_new_product')->with($data);
    }
    function addNewProductSubmit(Request $request){
        $data = $request->all();
        $id = product::addProduct($data);
        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $filename = $id.'-'.date('dmyHis').'.'.$file->getClientOriginalExtension();
            $file->move(base_path('/public/storage/product/'), $filename);

            $p = product::find($id);
            $p->image = $filename;
            $p->save();
        }

        return redirect()->back()->with('success', 'Product Uploaded Successfully.');
    }



    function allProduct(){
        $data = product::where('seller_id', Auth::id())->latest()->get();

        return view('vendor.product.all_product', ['data' => $data]);
    }
    function pendingProduct(){
        $data = product::where('seller_id', Auth::id())->latest()->get();

        return view('vendor.product.pending_product', ['data' => $data]);
    }
    function approveProduct(){

        return view('vendor.product.approve_product');
    }
    function rejectProduct(){

        return view('vendor.product.reject_product');
    }


    function deleteProduct($id){
        $id = base64_decode($id);
        $p = product::destroy($id);

        return redirect()->back()->with('success', 'Product Deleted Successfully.');
    }

    function editProduct($id){
        $id = base64_decode($id);
        $data = product::find($id);
        $categories = categories::all();

        return view('vendor.product.edit', ['data' => $data, 'categories' => $categories]);
    }

    function updateProduct(Request $request){
        $data = $request->all();
        $id = base64_decode($data['pid']);
        product::updateProduct($data);
        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $filename = $id.'-'.date('dmyHis').'.'.$file->getClientOriginalExtension();
            $file->move(base_path('/public/storage/product/'), $filename);

            $p = product::find($id);
            $p->image = $filename;
            $p->save();
        }
        return redirect()->back()->with('success', 'Product Updated Successfully.');
    }
}

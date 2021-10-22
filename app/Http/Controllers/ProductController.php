<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Image;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function addproduct(){
        $all_product = Product::all();
        return view('product/addproduct',compact('all_product'));
    }
    function productinsert(Request $request){
        $request->validate([
         'product_name'=> 'required',
         'product_price'=> 'required||integer',
         'product_quantity'=> 'required||integer',
         'product_alerts'=> 'required||integer',
         'product_details'=> 'required',
         'product_image'=> 'required',
        ]);
     $getid =  Product::insertGetId([
        'product_name'=> $request->product_name,
        'product_price'=> $request->product_price,
        'product_quantity'=> $request->product_quantity,
        'product_alerts'=> $request->product_alerts,
        'product_details'=> $request->product_details,
      ]);
           if($request->hasFile('product_image')){
               $main_img = $request->product_image;
               $img_extension = $main_img->getClientOriginalExtension();
               $final = $getid . '.' .$img_extension;
               Image::make($main_img)->resize(200,100)->save(base_path('Public/product_image/uploads/'.$final));
               Product::find($getid)->update([
                   'product_image' =>$final ,
               ]);
           }
             return back();
    }
}

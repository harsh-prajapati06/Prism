<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Faq;
use App\Models\Product;
use App\Models\ProductDetail;


class HomeController extends Controller
{
    public function index()
    {
        return view('layouts.home');
    }
    
    public function terms_condition(Request $request){
        $data = Setting::first();
        return view('terms_condition',compact('data'));
    }
     
    public function privacy_policy(Request $request){
        $data = Setting::first();
        return view('privacy_policy',compact('data'));
    }
     
    public function faq(Request $request){
        $faqs = Faq::where('status',1)->get();
        return view('faq',compact('faqs'));
    }
     
    public function getProductDetails(Request $request){
        $product = Product::where('id',$request->product_id)->first();
        $product_details = ProductDetail::where('product_id',$request->product_id)->get();
        
        return view('product_details',compact('product','product_details'));
    }
     
    public function comingSoon(Request $request){
        return view('coming_soon');
    }
    
}

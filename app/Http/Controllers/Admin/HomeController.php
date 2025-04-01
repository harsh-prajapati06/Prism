<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\NewsLetter;
use Illuminate\Http\Request;
use Redirect;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.layouts.dashborad');
    }
    public function newsletter(Request $request)
    {
        $newsletter = NewsLetter::get();
        return view('admin.newsletter',compact('newsletter'));
    }
    
     
    public function terms_condition(Request $request){
        $data = Setting::first();
        if($request->isMethod('post')){
            $data->terms_condition = $request->terms_condition;
            $data->save();
            
            return redirect::to('admin/terms_condition')->with('message','Terms Condition Updated Successfully');
        }
        return view('admin.terms_condition',compact('data'));
    }
     
    public function privacy_policy(Request $request){
        $data = Setting::first();
        if($request->isMethod('post')){
            $data->privacy_policy = $request->privacy_policy;
            $data->save();
            
            return redirect::to('admin/privacy_policy')->with('message','Privacy policy Updated Successfully');
        }
        return view('admin.privacy_policy',compact('data'));
    }
}

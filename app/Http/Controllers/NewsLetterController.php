<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsLetter;
use Redirect;


class NewsLetterController extends Controller
{
    public function newsletter(Request $request)
    {
        if($request->isMethod('post')){
            $old_data = NewsLetter::where('email',$request->email)->first();
            
            if(!empty($old_data)){
                return redirect::to('/')->with('error','Already Exist');
            }else{
                $data = new NewsLetter;
                $data->email = $request->email;
                $data->date = date('Y-m-d');
                $data->save();
                
                return redirect::to('/')->with('message','Newsletter Subscribe Successfully');
            }
            
        }
    }
}

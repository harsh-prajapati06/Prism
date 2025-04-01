<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Redirect;

class FaqController extends Controller
{
    public function viewFaqs(Request $request)
    {
        $faq = Faq::get();
        return view('admin.faq.view', compact('faq'));
    }

    public function addFaqs(Request $request)
    {
        if ($request->isMethod('post')) {
            
            if(!empty($request->question)){
                foreach($request->question as $key => $item){
                    $faq = new Faq;
                    $faq->question = $item;
                    $faq->answer = $request->answer[$key];
                    $faq->save();
                }
            }
            

            return redirect::to('admin/view_faqs')->with('message', 'Faqs are Added Successfully');
        }

        return view('admin.faq.add');
    }

    public function editFaqs(Request $request, $id)
    {
        $faq = Faq::find($id);

        if ($request->isMethod('post')) {

            $faq->question = $request->question;
            $faq->answer = $request->answer;
            $faq->save();

            return redirect::to('admin/view_faqs')->with('message', 'Faq Edit Successfully');
        }

        return view('admin.faq.edit', compact('faq'));
    }

    public function deleteFaqs(Request $request)
    {
        Faq::where('id', $request->id)->delete();
        return redirect::to('admin/view_faqs')->with('message', 'Faq Deleted Successfully');
    }
    
    public function changeFaqStatus(Request $request)
    {
        Faq::where('id', $request->id)->update(['status'=>$request->status]);
        return redirect::to('admin/view_faqs')->with('message', 'Faq Status Changed Successfully');
    }
}

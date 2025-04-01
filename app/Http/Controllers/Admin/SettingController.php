<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Redirect;

class SettingController extends Controller
{
    public function viewSetting(Request $request)
    {
        $setting = Setting::first();
        return view('admin.setting.view', compact('setting'));
    }

    public function editSetting(Request $request, $id)
    {
        $setting = Setting::find($id);

        if ($request->isMethod('post')) {

            if ($request->file('logo')) {
                $image = $request->file('logo');
                $path = $image->getRealPath();
                $logo = time() . uniqid() . $image->getClientOriginalName();
                $destinationPath = env('IMAGE_UPLOAD_PATH') . 'logo';
                $image->move($destinationPath, $logo);
                $setting->logo = $logo;
            }

            $setting->name = $request->name;
            $setting->mobile = $request->mobile;
            $setting->mobile_2 = $request->mobile_2;
            $setting->email = $request->email;
            $setting->address = $request->address;
            $setting->instagram_link = $request->instagram_link;
            $setting->facebook_link = $request->facebook_link;
            $setting->twitter_link = $request->twitter_link;
            $setting->youtube_link = $request->youtube_link;
            $setting->save();

            return redirect::to('admin/view_setting')->with('message', 'Setting Update Successfully');
        }

        return view('admin.setting.edit', compact('setting'));
    }
}

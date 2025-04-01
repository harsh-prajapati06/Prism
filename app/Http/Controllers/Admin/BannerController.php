<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Redirect;

class BannerController extends Controller
{
    public function viewBanners(Request $request)
    {
        $banner = Banner::get();
        return view('admin.banner.view', compact('banner'));
    }

    public function addBanners(Request $request)
    {
        if ($request->isMethod('post')) {

            $banner = new Banner;
            $photo = '';
            if ($request->file('photo')) {
                $image = $request->file('photo');
                $path = $image->getRealPath();
                $photo = time() . uniqid() . $image->getClientOriginalName();
                $destinationPath = env('IMAGE_UPLOAD_PATH') . 'banner';
                $image->move($destinationPath, $photo);
            }

            $banner->title = $request->title;
            $banner->description = $request->description;
            $banner->photo = $photo;
            $banner->save();

            return redirect::to('admin/view_banner')->with('message', 'Banner Add Successfully');
        }

        return view('admin.banner.add');
    }

    public function editBanners(Request $request, $id)
    {
        $banner = Banner::find($id);

        if ($request->isMethod('post')) {

            if ($request->file('photo')) {
                $image = $request->file('photo');
                $path = $image->getRealPath();
                $photo = time() . uniqid() . $image->getClientOriginalName();
                $destinationPath = env('IMAGE_UPLOAD_PATH') . 'banner';
                $image->move($destinationPath, $photo);
                $banner->photo = $photo;
            }

            $banner->title = $request->title;
            $banner->description = $request->description;
            $banner->save();

            return redirect::to('admin/view_banner')->with('message', 'Banner Edit Successfully');
        }

        return view('admin.banner.edit', compact('banner'));
    }

    public function deleteBanners(Request $request)
    {
        Banner::where('id', $request->id)->delete();
        return redirect::to('admin/view_banner')->with('message', 'Banner Deleted Successfully');
    }
    
    public function changeBannerStatus(Request $request)
    {
        Banner::where('id', $request->id)->update(['status'=>$request->status]);
        return redirect::to('admin/view_banner')->with('message', 'Banner Status Changed Successfully');
    }
}

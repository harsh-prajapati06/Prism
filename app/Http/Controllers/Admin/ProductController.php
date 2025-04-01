<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Redirect;

class ProductController extends Controller
{
    public function viewCategories(Request $request)
    {
        $category =  Category::get();
        return view('admin.product.category.view', compact('category'));
    }

    public function addCategories(Request $request)
    {
        if ($request->isMethod('post')) {
            $category =  new Category;
            $category->name = $request->name;
            $category->description = $request->description;
            $category->save();

            return redirect::to('admin/view_categories')->with('message', 'Category Add Successfully');
        }

        return view('admin.product.category.add');
    }

    public function editCategories(Request $request, $id)
    {
        $category = Category::find($id);

        if ($request->isMethod('post')) {
            $category->name = $request->name;
            $category->description = $request->description;
            $category->save();

            return redirect::to('admin/view_categories')->with('message', 'Category Edit Successfully');
        }

        return view('admin.product.category.edit', compact('category'));
    }

    public function deleteCategories(Request $request)
    {
        Category::where('id', $request->id)->delete();
        return redirect::to('admin/view_categories')->with('message', 'Category Deleted Successfully');
    }
    
    public function changeCategoriesStatus(Request $request)
    {
        Category::where('id', $request->id)->update(['status'=>$request->status]);
        return redirect::to('admin/view_categories')->with('message', 'Category Status Changed Successfully');
    }
    
    
    
    
    public function viewProduct(Request $request)
    {
        $product = Product::get();
        return view('admin.product.product.view', compact('product'));
    }

    public function addProduct(Request $request)
    {
        if ($request->isMethod('post')) {
            
            
            $category = Category::where('id',$request->category_id)->first();
            
            $photo = '';
            if ($request->file('photo')) {
                $image = $request->file('photo');
                $path = $image->getRealPath();
                $photo = time() . uniqid() . $image->getClientOriginalName();
                $destinationPath = env('IMAGE_UPLOAD_PATH') .'products/'.$category->name;
                $image->move($destinationPath, $photo);
            }
            
            $product =  new Product;
            $product->category_id = $request->category_id;
            $product->name = $request->name;
            $product->short_description = $request->short_description;
            $product->long_description = $request->long_description;
            $product->image = $photo;
            $product->save();
            
            if(!empty($request->documents)){
                foreach($request->documents as $key => $document){
                    $photo = "";
                    $image = $request->file('documents')[$key];
                    $path = $image->getRealPath();
                    $photo = time() . uniqid() . $image->getClientOriginalName();
                    $destinationPath = env('IMAGE_UPLOAD_PATH') .'products/'.$category->name;
                    $image->move($destinationPath, $photo);
                    
                    $productDetail =  new ProductDetail;
                    $productDetail->product_id =  $product->id;
                    $productDetail->documents =  $photo;
                    $productDetail->save();
                }
            }
            return redirect::to('admin/view_product')->with('message', 'Product Add Successfully');
        }

        return view('admin.product.product.add');
    }

    public function editProduct(Request $request,$id)
    {
        $product = Product::find($id);
        if ($request->isMethod('post')) {
            
            $category = Category::where('id',$request->category_id)->first();
            
            if ($request->file('photo')) {
                $image = $request->file('photo');
                $path = $image->getRealPath();
                $photo = time() . uniqid() . $image->getClientOriginalName();
                $destinationPath = env('IMAGE_UPLOAD_PATH') .'products/'.$category->name;
                $image->move($destinationPath, $photo);
                $product->image = $photo;
            }
            
            $product->category_id = $request->category_id;
            $product->name = $request->name;
            $product->short_description = $request->short_description;
            $product->long_description = $request->long_description;
            $product->save();
            
            if(!empty($request->documents)){
                foreach($request->documents as $key => $document){
                    $photo = "";
                    $image = $request->file('documents')[$key];
                    $path = $image->getRealPath();
                    $photo = time() . uniqid() . $image->getClientOriginalName();
                    $destinationPath = env('IMAGE_UPLOAD_PATH') .'products/'.$category->name;
                    $image->move($destinationPath, $photo);
                    
                    $productDetail =  new ProductDetail;
                    $productDetail->product_id =  $id;
                    $productDetail->documents =  $photo;
                    $productDetail->save();
                }
            }

            return redirect::to('admin/view_product')->with('message', 'Product Edit Successfully');
        }

        return view('admin.product.product.edit',compact('product'));
    }


    public function deleteProduct(Request $request)
    {
        Product::where('id', $request->id)->delete();
        return redirect::to('admin/view_product')->with('message', 'Product Deleted Successfully');
    }
    
    public function changeProductStatus(Request $request)
    {
        Product::where('id', $request->id)->update(['status'=>$request->status]);
        return redirect::to('admin/view_product')->with('message', 'Product Status Changed Successfully');
    }
    
    public function getProductDetails(Request $request)
    {
       $product_details = ProductDetail::where('product_id',$request->product_id)->get();
                    
        return $product_details;
    }
    
    public function deleteProductDetails(Request $request)
    {
       ProductDetail::where('id',$request->id)->delete();
                    
       return "Success";
    }
}

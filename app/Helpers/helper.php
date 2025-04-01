<?php

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\Role;
use App\Models\Banner;
use App\Models\User;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Faq;


function getRoles()
{
    $roles = Role::where('status', 1)->get();
    return $roles;
}

function getSetting()
{
    $setting = Setting::first();
    return $setting;
}

function getRoleName($id)
{
    $rolename = Role::where('id', $id)->where('status', 1)->first();
    return $rolename;
}

function getCategoryName($id)
{
    $categoryName = Category::where('id', $id)->where('status', 1)->first();
    return $categoryName;
}

function getBanners()
{
    $banner = Banner::whereNotNull('photo')->where('status',1)->get();
    return $banner;
}

function getCategories()
{
    $category = Category::where('status',1)->get();
    return $category;
}

function getProductList()
{
    $getProductList = Product::where('status',1)->get();
    return $getProductList;
}

function getFaqs($limit)
{
    $getFaqs = Faq::where('status',1)->limit($limit)->get();
    
    return $getFaqs;
}

function usersCount()
{
    $users = User::get();
    $count = count($users);
    return $count;
}

function productsCount()
{
    $products = Product::get();
    $count = count($products);
    return $count;
}

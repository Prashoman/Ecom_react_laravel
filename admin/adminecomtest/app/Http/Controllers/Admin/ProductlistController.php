<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product_list;
use Illuminate\Http\Request;

class ProductlistController extends Controller
{
    public function productlist(Request $request){
        $remak = $request->remark;

        $ProductList = Product_list::where('remark', $remak)->get();
        return $ProductList;
    }
    public function productlistbycategory(Request $request){
        $category = $request->category;
        $productlistByCategory = Product_list::where('category',  $category)->get();
        return $productlistByCategory;
    }
    public function productlistbysubcategory(Request $request){
        $category = $request->category;
        $subcategory = $request->subcategory;
        $productlistBysubcategory = Product_list::where('category',  $category)->where('subcategory', $subcategory)->get();
        return $productlistBysubcategory;
    }
}

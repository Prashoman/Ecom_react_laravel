<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product_list;
use App\Models\ProductDetails;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function productdetails($id){
        $productDetailsList = ProductDetails::where('product_id', $id)->get();
        $productList = Product_list::where('id', $id)->get();

        $Item = [
            'productList' =>$productList,
            'productDetails' =>$productDetailsList
        ];
        return $Item;

    }
}

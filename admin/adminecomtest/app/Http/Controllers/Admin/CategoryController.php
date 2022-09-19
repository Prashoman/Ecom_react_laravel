<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function allcategory(){
        $categories = Category::all();
        $categoriesDetailsArray = [];
        foreach($categories as $value){
            $subcategories = Subcategory::where('category_name', $value['category_name'])->get();

            $items = [
                'category_name' => $value['category_name'],
                'category_image' => $value['category_image'],
                'subcategory' => $subcategories

            ];
            array_push($categoriesDetailsArray, $items);
        }
        return $categoriesDetailsArray;
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function getCategory(){
        $category = Category::get()->toJson();
        return $category;
    }

    public function addCategory(Request $request){        
        dd($request->name);
    }
}

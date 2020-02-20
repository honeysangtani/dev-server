<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Category;
use Response;

class CategoryController extends Controller
{
    public function getCategory(){
        $category = Category::get()->toJson();
        return $category;
    }

    public function addCategory(Request $request){        
        $category_request = $request->all();
        if($category_request['name'] != ""){
            $category = new Category();
            $category->name = $category_request['name'];
            $category->save();

            return Response::json([
                'status' => 200,
                'message' => 'Category created successfully.'
            ], 200); 
        } else {
            return Response::json([
                'status' => 500,
                'message' => 'Please enter name.'
            ], 500); 
        }        
    }

    public function getCategoryById($id){    
        $category = Category::find($id);
        if($category){
            return Response::json([
                'status' => 200,
                'message' => 'Category found.',
                'category' => $category->toArray()
            ], 200); 
        } else {
            return Response::json([
                'status' => 502,
                'message' => 'Category not found.'
            ], 502); 
        }        
    }

    public function editCategory($id, Request $request){
        $category_request = $request->all();

        $category = Category::find($id);
        if($category){
            if($category_request['name'] != ""){
                $category->name = $request['name'];
                $category->save();
    
                return Response::json([
                    'status' => 200,
                    'message' => 'Category updated successfully.',
                    'category' => $category->toArray()
                ], 200); 
            } else {
                return Response::json([
                    'status' => 500,
                    'message' => 'Please enter name.'
                ], 500); 
            }               
        } else {
            return Response::json([
                'status' => 502,
                'message' => 'Category not found.'
            ], 502); 
        }
    }

    public function deleteCategory($id){
        $category = Category::find($id);
        if($category){
            $category->delete();
            return Response::json([
                'status' => 200,
                'message' => 'Category deleted successfully.',
                'category' => $category->toArray()
            ], 200); 
        } else {
            return Response::json([
                'status' => 502,
                'message' => 'Category not found.'
            ], 502); 
        }
    }
}

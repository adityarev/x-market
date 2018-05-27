<?php

namespace Xmarket\Http\Controllers;

use Illuminate\Http\Request;
use Xmarket\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();

        //echo $categories->category_name;

        foreach ($categories as $category){
            echo $category->category_name."<br>";
            foreach ($category->subCategory as $subCategory){
                echo $subCategory->sub_category_name;
            }            
        }
        //return view('test');
    }
}

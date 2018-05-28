<?php

namespace Xmarket\Http\Controllers;

use Illuminate\Http\Request;
use Xmarket\Category;

class CategoryController extends BaseController
{
    public function index(){        
        return view('categories.index');
    }

    public function show($categoryName){        
        $category = Category::where('category_name','=',$categoryName)->first();
        return view('categories.show')->with('category',$category);
    }

    public function subCategoryShow($categoryName,$subCategoryName){
        $category = Category::where('category_name','=',$categoryName)->first();
        $subCategory = $category->subCategories->where('sub_category_name','=',$subCategoryName)->first();                

        return view('categories.subcategories.show')->with('subCategory',$subCategory);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function getCategoryById($id){
        $category = Category::with('article')->find($id);
        // dd($category);
        return view('main.category',['category'=> $category]);
    }
}

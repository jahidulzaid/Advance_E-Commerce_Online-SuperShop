<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.index');
    }
    public function manage(){
        return view('admin.category.manage');
    }

    public function addCategory(Request $request){
        $categories=Category::addCategory();

    }
}

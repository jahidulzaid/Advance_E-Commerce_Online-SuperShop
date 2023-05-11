<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.index');
    }
    public function manage(){
        return view('admin.category.manage');
    }
}

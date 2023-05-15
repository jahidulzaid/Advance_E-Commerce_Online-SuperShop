<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }
    public function create(Request $request)
    {
        Category::newCategory($request);
        return back()->with('message', 'New Category created successfully.');
    }
    public function manage()
    {
        return view('admin.category.manage',[
            'categories'=>Category::all()
        ]);
    }
}

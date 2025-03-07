<?php

namespace App\Http\Controllers\Category;



use App\Models\Category;
use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    public function __invoke()
    {
        $categories=Category::all();
        
        return view('category.index', compact('categories'));
    }         
}

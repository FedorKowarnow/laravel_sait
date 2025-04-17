<?php

namespace App\Http\Controllers;



use App\Models\Category;
use App\Http\Controllers\Controller;
use Inertia\Inertia;


class MainController extends Controller
{
    public function __invoke()
    {
        $categories=Category::find([1, 2, 3, 4]);

        return inertia('Main', ['categories'=>$categories]);
        
        //return view('main', compact('categories'));
    }         
}

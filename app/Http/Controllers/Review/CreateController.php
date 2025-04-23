<?php

namespace App\Http\Controllers\Review;


use App\Models\Category;





class CreateController extends BaseController
{
    public function __invoke()
    {
        
        $categories = Category::all();
        
        return inertia('ReviewCreate', ['categories'=>$categories]);
        //return view('review.create', compact('categories'));
    }
        
    
}

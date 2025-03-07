<?php

namespace App\Http\Controllers\Review;

use App\Models\Category;
use App\Models\Review;

class EditController extends BaseController
{
    public function __invoke (Review $review)
    {
        $categories = Category::all();
        return view('review.edit', compact('review', 'categories'));
    }           
}

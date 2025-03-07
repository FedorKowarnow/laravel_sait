<?php

namespace App\Http\Controllers\Review;


use App\Models\Review;

class ShowController extends BaseController
{
    public function __invoke(Review $review)
    {
        return view('review.show', compact('review'));
    }
        
    
}

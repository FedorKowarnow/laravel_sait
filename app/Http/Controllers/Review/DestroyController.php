<?php

namespace App\Http\Controllers\Review;


use App\Models\Review;


class DestroyController extends BaseController
{
    public function __invoke(Review $review)
    {
        $review->delete();
        return redirect()->route('review.index');
    }
        
    
}

<?php

namespace App\Http\Controllers\Review;


use App\Models\User;
use App\Models\Review;
use App\Models\ReviewUserComment;


class ShowController extends BaseController
{
    public function __invoke(Review $review)
    {   
        $reviewUserComments=$review->reviewUserComment()->paginate(5); 
        return view('review.show', compact('review','reviewUserComments'));
    }
        
    
}

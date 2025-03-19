<?php

namespace App\Http\Controllers\Review;


use App\Models\Review;
use App\Models\ReviewUserComment;
use App\Models\ReviewUserLike;
use Illuminate\Support\Facades\Gate;



class DestroyController extends BaseController
{
    public function __invoke(Review $review)
    {
        Gate::authorize('delete', $review);
        
        $comments=$review->reviewUserComment;
        foreach ($comments as $comment){
            $comment->commentUserLike()->delete();   
        }
        $review->reviewUserComment()->delete();
        $review->reviewUserLike()->delete();
        $review->delete();
        


        //ReviewUserComment::where('review_id','=', $review->id)->delete();
        //ReviewUserLike::where('review_id','=', $review->id)->delete();

        return redirect()->route('review.index');
    }
    
}

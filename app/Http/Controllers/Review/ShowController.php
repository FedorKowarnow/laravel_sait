<?php

namespace App\Http\Controllers\Review;


use App\Models\User;
use App\Models\Review;
use App\Models\ReviewUserComment;


class ShowController extends BaseController
{
    public function __invoke(Review $review)
    {   
        $reviewUserComments=ReviewUserComment::where('review_id','=', $review->id)->paginate(10);

        $users=[];
        $user2=[];

        foreach ($reviewUserComments as $reviewUserComment){
        $user=User::all()->where('id', '=', $reviewUserComment->user_id);
        if ($user2!=$user){
            $users+=$user->all();
        }
        $user2=$user;
        }
        
        return view('review.show', compact('review','reviewUserComments', 'users'));
    }
        
    
}

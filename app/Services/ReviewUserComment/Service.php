<?php

namespace App\Services\ReviewUserComment;


use App\Models\ReviewUserComment;
use Illuminate\Support\Facades\Auth;

class Service{
    public function store($data, $review){

        $data+=['user_id' => Auth::id(), 'review_id'=> $review->id];
        $images= $data['image'] ?? [];
        unset($data['image']);
        ReviewUserComment::create($data)->reviewConversion($images, 'reviewUserComments');

    }
    
}
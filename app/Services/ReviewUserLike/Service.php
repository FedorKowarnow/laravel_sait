<?php

namespace App\Services\ReviewUserLike;

use App\Models\Review;
use App\Models\ReviewUserLike;
use Illuminate\Support\Facades\Auth;


class Service{

    public function store($data, $review){

        $data+=['user_id'=>Auth::id(), 'review_id'=>$review->id];

        $model=$review->reviewUserLike()->firstWhere('user_id', $data['user_id']);
       
        //$model=ReviewUserLike::firstWhere(['user_id'=> $data['user_id'],'review_id'=> $data['review_id']]); <-Так можно
        
        if($model==null){
            ReviewUserLike::create($data);
        } else {
            $data['like']== $model->like ? $model->delete() : $model->update($data);
        }
    }
}
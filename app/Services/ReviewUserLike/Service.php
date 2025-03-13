<?php

namespace App\Services\ReviewUserLike;

use App\Models\Review;
use App\Models\ReviewUserLike;

class Service{

    public function update($data){ 

        if(ReviewUserLike::firstWhere(['user_id'=> $data['user_id'],'review_id'=> $data['review_id']])==null){
            ReviewUserLike::updateOrCreate($data);
        }elseif (($data['like']==ReviewUserLike::firstWhere(['user_id'=> $data['user_id'],'review_id'=> $data['review_id']])->like) && ($data['dislike']==ReviewUserLike::firstWhere(['user_id'=> $data['user_id'],'review_id'=> $data['review_id']])->dislike)){
           ReviewUserLike::where(['user_id'=> $data['user_id'],'review_id'=> $data['review_id']])->delete();
        } else {
            ReviewUserLike::where(['user_id'=> $data['user_id'],'review_id'=> $data['review_id']])->delete();
            ReviewUserLike::updateOrCreate($data);
        }
        
    }
}
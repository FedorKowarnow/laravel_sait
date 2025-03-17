<?php

namespace App\Services\ReviewUserLike;

use App\Models\Review;
use App\Models\ReviewUserLike;

class Service{

    public function store($data){
        
        $model=ReviewUserLike::firstWhere(['user_id'=> $data['user_id'],'review_id'=> $data['review_id']]);

        if($model==null){
            ReviewUserLike::create($data);
        } else {
            $data['like']== $model->like ? $model->delete() : $model->update($data);
        }
    }
}
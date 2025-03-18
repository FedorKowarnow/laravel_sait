<?php

namespace App\Services\CommentUserLike;


use App\Models\CommentUserLike;
use Illuminate\Support\Facades\Auth;


class Service{

    public function store($data, $reviewUserComment){
        
        $data+=['user_id'=>Auth::id(), 'reviewUserComment_id'=>$reviewUserComment->id];
        
        //$model=$reviewUserComment->commentUserLike()->firstWhere('user_id', $data['user_id']);
        $model=CommentUserLike::firstWhere(['user_id'=> $data['user_id'],'reviewUserComment_id'=> $data['reviewUserComment_id']]);
       
        if($model==null){
            CommentUserLike::create($data);
        } else {
            $data['like']== $model->like ? $model->delete() : $model->update($data);
        }
    }
}
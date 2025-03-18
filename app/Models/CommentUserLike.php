<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentUserLike extends Model
{
    protected $fillable = ['review_user_comment_id','like', 'user_id'];
    protected $table = 'comment_user_likes';
    protected $quarded = false;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function reviewUserComment(){
        return $this->belongsTo(ReviewUserComment::class);
    }
}

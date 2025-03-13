<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewUserLike extends Model
{
    protected $fillable = ['review_id','like','dislike', 'user_id'];
    protected $table = 'review_user_likes';
    protected $quarded = false;

    public function user(){
        return $this->belongsToMany(User::class);
    }

    public function review(){
        return $this->belongsToMany(Review::class);
    }
}

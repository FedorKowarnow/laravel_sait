<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewUserComment extends Model
{
    protected $fillable = ['content','image','review_id', 'user_id', 'reply_id'];
    protected $table = 'review_user_comments';
    protected $quarded = false;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function review(){
        return $this->belongsTo(Review::class);
    }
}


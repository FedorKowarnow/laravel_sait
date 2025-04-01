<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\MediasConversions;

class ReviewUserComment extends Model implements HasMedia
{
    use MediasConversions;
    use InteractsWithMedia;
    protected $fillable = ['content','image','review_id', 'user_id', 'reply_id'];
    protected $table = 'review_user_comments';
    protected $quarded = false;

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('reviewUserComments')
            ->onlyKeepLatest(5);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function review(){
        return $this->belongsTo(Review::class);
    }

    public function commentUserLike(){
        return $this->hasMany(CommentUserLike::class);
    }
}


<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\MediasConversions;

class Review extends Model implements HasMedia
{
    use MediasConversions;
    use Filterable;
    use SoftDeletes;
    use InteractsWithMedia;
    protected $fillable = ['title', 'content','image','category_id','user_id'];
    protected $table = 'reviews';
    protected $quarded = false;


    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('reviews')
            ->onlyKeepLatest(10);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function reviewUserLike(){
        return $this->hasMany(ReviewUserLike::class);
    }

    public function reviewUserComment(){
        return $this->hasMany(ReviewUserComment::class);
    }

}

<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{

    use Filterable;
    use SoftDeletes;
    protected $fillable = ['title', 'content','image','category_id','user_id'];
    protected $table = 'reviews';
    protected $quarded = false;


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}

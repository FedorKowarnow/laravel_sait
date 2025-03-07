<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title','image'];
    protected $table = 'categories';
    protected $quarded = false;

    public function reviews(){

        return $this->hasMany(Review::class);
    }
}

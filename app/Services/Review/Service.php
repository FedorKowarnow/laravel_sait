<?php

namespace App\Services\Review;

use App\Models\Review;

class Service{
    public function store($data){
        
        //$tags = $data['tags'];
        //unset($data['tags']);
        $review=Review::create($data);
        //$post->tags()->attach($tags);

    }

    public function update($review, $data){
        //$tags = $data['tags'];
       // unset($data['tags']);
        
        $review->update($data);
        //$post->tags()->sync($tags);
        $review=$review->fresh();
    }
}
<?php

namespace App\Services\Review;


use App\Models\Review;
use App\MediasConversions;



class Service{

    //use MediasConversions;

    public function store($data){
        
        if (isset($data['image'])){
            $images=$data['image'];
            unset($data['image']);
            $review=Review::create($data);
            MediasConversions::reviewConversion($images, $review, 'reviews');
        } else {
            $review=Review::create($data);
        }
    }

    public function update($review, $data){
        if (isset($data['image'])){
            $images=$data['image'];
            unset($data['image']);
            MediasConversions::reviewConversion($images, $review, 'reviews');
        }
        $review->update($data);
        $review=$review->fresh();
    }
}








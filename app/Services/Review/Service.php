<?php

namespace App\Services\Review;


use App\Models\Review;



class Service{

    public function store($data){
        $images= $data['image'] ?? [];
            unset($data['image']);
            Review::create($data)->reviewConversion($images, 'reviews');
    }

    public function update($review, $data){
        $review->reviewConversion($data['image'] ?? [], 'reviews');
        unset($data['image']);
        $review->update($data);
        $review=$review->fresh();
    }
}








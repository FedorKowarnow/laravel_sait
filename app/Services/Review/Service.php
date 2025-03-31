<?php

namespace App\Services\Review;

use Spatie\Image\Image;
use Spatie\Image\Enums\Fit;
use App\Models\Review;
use Illuminate\Support\Facades\Storage;



class Service{

    public function store($data){
        
        if (isset($data['image'])){
            $images=$data['image'];
            unset($data['image']);
            $review=Review::create($data);
            foreach ($images as $image){   
                $convertation=$review->addMedia($image)->usingFileName(bin2hex(random_bytes(8)).'.webp')->toMediaCollection('reviews');
                Image::load($convertation->getPath())->fit(fit: Fit::Max, desiredWidth:  2560,  desiredHeight: 1440)->quality(60)->save();
            }
        } else {
            $review=Review::create($data);
        }
    }

    public function update($review, $data){
        if (isset($data['image'])){
            $images=$data['image'];
            unset($data['image']);
            $review->update($data);
            foreach ($images as $image){   
                $convertation=$review->addMedia($image)->usingFileName(bin2hex(random_bytes(8)).'.webp')->toMediaCollection('reviews');
                Image::load($convertation->getPath())->fit(fit: Fit::Max, desiredWidth:  2560,  desiredHeight: 1440)->quality(60)->save();
            }
        } else {
            $review->update($data);
        }
        $review=$review->fresh();
    }
}








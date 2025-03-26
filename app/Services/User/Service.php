<?php

namespace App\Services\User;


use Spatie\Image\Enums\CropPosition;
use Spatie\Image\Image;
use Spatie\Image\Enums\Fit;



class Service{

    public function update($user, $data){
        if (isset($data['user_image'])){
        $user->addMedia($data['user_image'])->toMediaCollection('avatars');
        $image=$user->getMedia('avatars');
        Image::load($image[0]->getPath())->fit(Fit::Crop, 120, 120 )->save();
        }
        $user->user_info=$data['user_info'];
        $user->save();
    }
}







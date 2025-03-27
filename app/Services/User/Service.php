<?php

namespace App\Services\User;


use Spatie\Image\Image;
use Spatie\Image\Enums\Fit;



class Service{

    public function update($user, $data){
        if (isset($data['user_image'])){
        $conversion=$user->addMedia($data['user_image'])->toMediaCollection('avatars');
        Image::load($conversion->getPath())->fit(Fit::Crop, 120, 120 )->save();
        }
        $user->user_info=$data['user_info'];
        $user->save();
    }
}







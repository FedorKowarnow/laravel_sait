<?php

namespace App\Services\User;


use Spatie\Image\Image;
use Spatie\Image\Enums\Fit;



class Service{

    public function update($user, $data){
        if (isset($data['user_image'])){
        $conversion=$user->addMedia($data['user_image'])->usingFileName(bin2hex(random_bytes(8)).'.webp')->toMediaCollection('avatars');
        Image::load($conversion->getPath())->fit(Fit::Crop, 120, 120 )->quality(60)->save();
        }
        $user->user_info=$data['user_info'];
        $user->save();
    }
}







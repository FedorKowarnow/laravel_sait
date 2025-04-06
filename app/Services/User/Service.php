<?php

namespace App\Services\User;


use Spatie\Image\Image;
use Spatie\Image\Enums\Fit;



class Service{

    public function update($user, $data){
        $image= isset($data['user_image'])? [$data['user_image']]: [];
        $user->reviewConversion($image, 'avatars');
        unset($data['user_image']);
        $user->update($data);
        $user=$user->fresh();
    }
}





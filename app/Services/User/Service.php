<?php

namespace App\Services\User;


use Spatie\Image\Image;
use Spatie\Image\Enums\Fit;



class Service{

    public function update($user, $data){
        $user->reviewConversion($data['user_image'] ?? [], 'avatars');
        unset($data['user_image']);
        $user->update($data);
        $user=$user->fresh();
    }
}





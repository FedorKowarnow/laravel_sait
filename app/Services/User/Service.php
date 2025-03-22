<?php

namespace App\Services\User;

use Illuminate\Support\Facades\Storage;

class Service{

    public function update($user, $data){
        if ($user->user_image!=='images/avatars/default.jpg'){
            Storage::disk('public')->delete($user->user_image);
        }
        $user->update($data);
        $user=$user->fresh();
    }
}
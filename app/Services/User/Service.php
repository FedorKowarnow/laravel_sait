<?php

namespace App\Services\User;

use Illuminate\Support\Facades\Storage;

class Service{

    public function update($user, $data){
        $data['user_image']=Storage::disk('public')->put('/images/avatars/'. $user->id, $data['user_image']);
        if ($user->user_image!=null){
            Storage::disk('public')->delete($user->user_image);
        }
        $user->update($data);
        $user=$user->fresh();
    }
}
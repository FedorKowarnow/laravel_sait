<?php

namespace App\Services\User;

use App\Models\User;

class Service{

    public function update($user, $data){
        
        
        $user->update($data);
        
        $user=$user->fresh();
    }
}
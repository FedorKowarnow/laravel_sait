<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\User\BaseController;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;



class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, User $user)
    {   
        $data= $request->validated();
        $data['user_image']=Storage::disk('public')->put('/images/avatars/'. $user->id, $data['user_image']);
        $this->service->update($user, $data); 
        return redirect()->route('home');
    }       
    
}

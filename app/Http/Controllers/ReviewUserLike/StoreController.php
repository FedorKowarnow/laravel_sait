<?php

namespace App\Http\Controllers\ReviewUserLike;


use App\Http\Requests\ReviewUserLike\StoreRequest;
use App\Models\ReviewUserLike;
use Illuminate\Support\Facades\Auth;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    { 
        
        $data= $request->safe()->merge(['user_id' => Auth::id()])->all();
        
        //$request->has('like') ? $data['dislike']='0' : $data['like']='0';
        
        $this->service->store($data); 
        return redirect()->back();
    }       
    
}

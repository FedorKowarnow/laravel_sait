<?php

namespace App\Http\Controllers\ReviewUserLike;


use App\Http\Requests\ReviewUserLike\UpdateRequest;
use App\Models\ReviewUserLike;
use Illuminate\Support\Facades\Auth;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request)
    {
        

        $data= $request->safe()->merge(['user_id' => Auth::id()])->all();
        
        $request->has('like') ? $data['dislike']='0' : $data['like']='0';

        //dd($data);
        $this->service->update($data); 
        return redirect()->back();
    }       
    
}

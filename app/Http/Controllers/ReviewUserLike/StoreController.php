<?php

namespace App\Http\Controllers\ReviewUserLike;


use App\Http\Requests\ReviewUserLike\StoreRequest;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request, Review $review)
    { 
        $data= $request->validated();
        
        //$data= $request->safe()->merge(['user_id' => Auth::id(), 'review_id'=>$review->id])->all(); <-Так можно
        
        //$request->has('like') ? $data['dislike']='0' : $data['like']='0';
        
        $this->service->store($data, $review); 
        return redirect()->back();
    }       
    
}

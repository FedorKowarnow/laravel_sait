<?php

namespace App\Http\Controllers\ReviewUserComment;


use App\Http\Requests\ReviewUserComment\StoreRequest;
use App\Models\Review;
use App\Models\ReviewUserLike;
use Illuminate\Support\Facades\Auth;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request, Review $review)
    { 
        
        $data= $request->safe()->merge(['user_id' => Auth::id(), 'review_id'=> $review->id])->all();
        //$request->has('like') ? $data['dislike']='0' : $data['like']='0';
        $this->service->store($data); 
        return redirect()->back();
    }       
    
}

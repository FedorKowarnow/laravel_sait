<?php

namespace App\Http\Controllers\ReviewUserComment;


use App\Http\Requests\ReviewUserComment\StoreRequest;
use App\Models\Review;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request, Review $review)
    { 
        $data= $request->validated();
        $this->service->store($data, $review); 
        return redirect()->back();
    }       
    
}

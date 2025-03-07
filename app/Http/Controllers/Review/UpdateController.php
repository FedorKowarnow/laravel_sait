<?php

namespace App\Http\Controllers\Review;


use App\Http\Requests\Review\UpdateRequest;
use App\Models\Review;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Review $review)
    {
        $data= $request->validated();

        $this->service->update($review, $data);

        
        return redirect()->route('review.show', $review->id);
    }       
    
}

<?php

namespace App\Http\Controllers\Review;


use App\Http\Requests\Review\UpdateRequest;
use App\Models\Review;
use Illuminate\Support\Facades\Gate;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Review $review)
    {
        
        Gate::authorize('update', $review);
        
        $data= $request->validated();

        $this->service->update($review, $data);

        
        return redirect()->route('review.show', $review->id);
    }       
    
}

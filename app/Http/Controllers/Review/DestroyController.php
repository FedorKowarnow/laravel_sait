<?php

namespace App\Http\Controllers\Review;


use App\Models\Review;
use Illuminate\Support\Facades\Gate;


class DestroyController extends BaseController
{
    public function __invoke(Review $review)
    {
        Gate::authorize('delete', $review);
        $review->delete();
        return redirect()->route('review.index');
    }
        
    
}

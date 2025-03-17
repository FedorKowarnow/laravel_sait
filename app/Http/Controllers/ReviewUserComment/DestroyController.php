<?php

namespace App\Http\Controllers\ReviewUserComment;

use App\Models\Review;
use App\Models\ReviewUserComment;
use Illuminate\Support\Facades\Gate;



class DestroyController extends BaseController
{
    public function __invoke(ReviewUserComment $reviewUserComment)
    {
        Gate::authorize('delete', $reviewUserComment);

        $reviewUserComment->delete();

        return redirect()->back();
    }
        
}

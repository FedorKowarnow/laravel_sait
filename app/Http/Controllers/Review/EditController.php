<?php

namespace App\Http\Controllers\Review;

use App\Models\Category;
use App\Models\Review;
use Illuminate\Support\Facades\Gate;

class EditController extends BaseController
{
    public function __invoke (Review $review)
    {
        Gate::authorize('update', $review);
        $categories = Category::all();
        return view('review.edit', compact('review', 'categories'));
    }           
}

<?php

namespace App\Http\Controllers\Review;


use App\Http\Filters\ReviewFilter;
use App\Http\Requests\Review\FilterRequest;
use App\Models\Review;
use App\Models\User;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $filter=app()->make(ReviewFilter::class, ['queryParams' => array_filter($data)]);

        $reviews=Review::filter($filter)->paginate(10);
        
        return view('review.index', compact('reviews'));
    }         
}

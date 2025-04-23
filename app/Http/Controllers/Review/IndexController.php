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

        $reviews=Review::filter($filter)->paginate(1);
        $reviews->load('user');

        return inertia('Reviews', ['reviews'=>$reviews]);
        //return view('review.index', compact('reviews'));
    }         
}

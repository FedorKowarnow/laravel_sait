<?php

namespace App\Http\Controllers\CommentUserLike;


use App\Http\Requests\CommentUserLike\StoreRequest;
use App\Models\ReviewUserComment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request, ReviewUserComment $reviewUserComment)
    { 
        $data= $request->validated();
        
        $this->service->store($data, $reviewUserComment); 
        return redirect()->back();
    }       
    
}

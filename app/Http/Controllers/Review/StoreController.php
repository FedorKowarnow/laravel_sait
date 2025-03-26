<?php

namespace App\Http\Controllers\Review;


use App\Http\Requests\Review\StoreRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;




class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        
        $data= $request->safe()->merge(['user_id' => Auth::id()])->all();
        $this->service->store($data);
        return redirect()->route('review.index');
    }         
}

<?php

namespace App\Http\Controllers\Review;


use App\Http\Requests\Review\StoreRequest;
use Illuminate\Support\Facades\Auth;




class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        
        
       
        //$lala=$request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        //Васянство сверху

        //$niga= Auth::user()->id;

        //$data= $request->validated();
        //$data['user_id']=Auth::id();
        //Васянство сверху

        $data= $request->safe()->merge(['user_id' => Auth::id()])->all();
        $this->service->store($data);
        return redirect()->route('review.index');
    }         
}

<?php

namespace App\Services\ReviewUserComment;


use App\Models\ReviewUserComment;

class Service{
    public function store($data){
        
        ReviewUserComment::create($data);

    }
    
}
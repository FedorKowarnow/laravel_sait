<?php
namespace App\Http\Controllers\CommentUserLike;

use App\Services\CommentUserLike\Service;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service=$service;
    }
}
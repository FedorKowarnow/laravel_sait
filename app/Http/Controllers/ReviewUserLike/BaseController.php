<?php
namespace App\Http\Controllers\ReviewUserLike;

use App\Services\ReviewUserLike\Service;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service=$service;
    }
}
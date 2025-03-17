<?php
namespace App\Http\Controllers\ReviewUserComment;

use App\Services\ReviewUserComment\Service;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service=$service;
    }
}
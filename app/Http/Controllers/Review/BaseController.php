<?php
namespace App\Http\Controllers\Review;

use App\Services\Review\Service;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service=$service;
    }
}
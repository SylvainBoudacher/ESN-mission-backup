<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class HelperController extends Controller
{
    // public function __construct(Movies $movieRepository)
    // {
    //     $this->movieRepository = $movieRepository;
    // }

    public function __invoke()
    {
        $date = new DateTime();
        
        return new JsonResponse([
            'status' => 'success',
            'time' => $date->getTimestamp(),
        ]);
    }
}
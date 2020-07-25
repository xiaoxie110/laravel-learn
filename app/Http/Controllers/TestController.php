<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TestController extends Controller
{
    public function requestTest(Request $request, Response $response){
        dump($request->method());
        dump($request->url());
        dump($request->fullUrl());
        dump($request->getBaseUrl());
        dump('Hello World');
    }
}

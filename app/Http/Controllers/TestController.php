<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function requestTest(Request $request){
        dump($request->method());
        dump($request->url());
        dump($request->fullUrl());
        dump($request->getBaseUrl());
        dump('Hello World');
    }
}

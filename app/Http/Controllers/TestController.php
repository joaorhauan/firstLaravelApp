<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function helloWorld()
    {
        return response()->json(["Hello World"], 200);
    }
}

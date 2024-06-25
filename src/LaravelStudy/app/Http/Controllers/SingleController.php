<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleController extends Controller
{
    public function __invoke()
    {
        return "<h1>this is single page</h1>";
    }
}

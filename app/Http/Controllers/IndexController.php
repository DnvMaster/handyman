<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends HandymanController
{
    public function index()
    {
        return view('handyman.frontend.index');
    }
}

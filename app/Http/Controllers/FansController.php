<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FansController extends Controller
{
    public function fans()
    {
        return view('fans');
    }
}

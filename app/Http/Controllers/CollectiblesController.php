<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectiblesController extends Controller
{
    public function collectibles()
    {
        return view('collectibles');
    }
}

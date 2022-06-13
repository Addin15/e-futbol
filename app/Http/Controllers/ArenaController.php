<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArenaController extends Controller
{
    public function compare(Request $request) {
        return view('consumers.compare');
    }
}
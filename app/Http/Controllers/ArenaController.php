<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arena;

class ArenaController extends Controller
{
    public function compare(Request $request) {

        $first = request('first');
        $second = request('second');

        $firstArena = null;
        $secondArena = null;

        if($first) {
            $firstArena = Arena::where('id', $first)->get()->first();
        }

        if($second) {
            $secondArena = Arena::where('id', $second)->get()->first();
        }

        $response = [
            'first' => $firstArena,
            'second' => $secondArena,
        ];


        return view('consumers.compare', $response);
    }
}
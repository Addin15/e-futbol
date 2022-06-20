<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arena;
use App\Models\Field;
use App\Models\Review;
use App\Models\Image;
use Illuminate\Support\Facades\DB;

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

        $all = Arena::get();

        $response = [
            'first' => $firstArena,
            'second' => $secondArena,
            'all' => $all,
        ];


        return view('consumers.compare', $response);
    }

    public function findArena(Request $request) {
        $query = request('q');

        $response = DB::table('arenas')
            ->where('arena_name', 'LIKE', "%{$query}%")
            ->join('providers', 'arenas.provider_id', '=', 'providers.id')
            ->select('arenas.*', 'providers.provider_name')
            ->get();

        return response($response, 200);
    }

    public function getArenas(Request $request) {

        $response = DB::table('arenas')
        ->join('providers', 'arenas.provider_id', '=', 'providers.id')
        ->select('arenas.*', 'providers.provider_name')
        ->take(50)
        ->get();

        return response($response, 200);
    }

    public function getFields(Request $request) {
        $arenaID = request('arenaID');

        $response = Field::where('arena_id', $arenaID)->get();

        return response($response, 200);
    }

    public function getReviews(Request $request) {
        $arenaID = request('arenaID');

        $response = Review::where('arena_id', $arenaID)->get();

        return response($response, 200);
    }

    public function getImages(Request $request) {
        $arenaID = request('arenaID');

        $response = Image::where('arena_id', $arenaID)->get();

        return response($response, 200);
    }
}
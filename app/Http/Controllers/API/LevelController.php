<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function getSoalByLevel($levelID)
    {
        $level = Level::where('id', $levelID)->first()->soals;
        return response()->json(['level' => $level]);
    }
}

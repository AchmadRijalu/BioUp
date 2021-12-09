<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function getLevelByChara($charID)
    {
        $level = Level::all()->where('charID', $charID);
        return response()->json(['level' => $level]);
    }
}

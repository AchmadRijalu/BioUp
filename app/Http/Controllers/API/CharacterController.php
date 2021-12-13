<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Character;
use App\Models\Level;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function getAllChara()
    {
        $allChara = Character::all();
        return response()->json(['characters' => $allChara]);
    }

    public function getLevelByChara($charID)
    {
        $chara= Level::where('charID', $charID)->get();
        return response(['levels' => $chara]);
    }
}

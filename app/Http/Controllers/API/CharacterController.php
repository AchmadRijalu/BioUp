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
<<<<<<< HEAD
        $chara= Level::where('charID', $charID)->get();
=======
        $chara = Level::where('charID', $charID)->get();
>>>>>>> 3680bad8474bd5fbeabf514b073e396e718f28af
        return response(['levels' => $chara]);
    }
}

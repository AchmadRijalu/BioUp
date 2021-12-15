<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Character;
use App\Models\Level;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CharacterController extends Controller
{
    public function getAllChara()
    {
        $chara = User::where('id', Auth::id())->first()->characters;
        $allChara = Character::all();
        return response()->json(['userchara' => $chara, 'allchara' => $allChara]);
    }

    public function getLevelByChara($charID)
    {
        $chara = Character::where('id', $charID)->first()->levels;
        return response(['levels' => $chara]);
    }
}

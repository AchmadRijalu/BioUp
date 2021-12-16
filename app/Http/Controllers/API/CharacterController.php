<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Character;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CharacterController extends Controller
{
    public function getAllChara()
    {
        $test = User::where('id', Auth::id())->first()->characters;
        $total_score=0;

        foreach ($test as $score){
            $total_score+=$score->pivot->score;
        }

        $test1 = Character::all();
        $loop=1;
        foreach ($test1 as $check){
            if($check->reqscore <= $total_score && $check->id > $test->count()){
                DB::table('bio12_user_characters')->insert([
                    'user_id' => Auth::id(),
                    'character_id' => $loop,
                    'score' => 0
                ]);
            }
            $loop++;
        }

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

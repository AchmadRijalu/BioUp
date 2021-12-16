<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Character;
use App\Models\Level;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CharacterController extends Controller
{

    public function getAllChara()
    {
        $this->addCharaByScore();
        $chara = User::where('id', Auth::id())->first()->characters;
        $allChara = Character::all();

        return response()->json(['userchara' => $chara, 'allchara' => $allChara]);
    }

    public function getLevelByChara($charID)
    {
        $chara = Character::where('id', $charID)->first()->levels1;
        return response(['levels'=>$chara]);
    }

    private function addCharaByScore() //menambahkan data ke tabel user_characters dan user_levels secara otomatis
    {
        $test = User::where('id', Auth::id())->first()->characters;
        $total_score = 0;

        foreach ($test as $score) {
            $total_score += $score->pivot->score;
        }

        $test1 = Character::all();
        $loop = 1;
        $loop1 = 1;
        foreach ($test1 as $check) {
            $loop1 = $loop1;
            if ($check->reqscore <= $total_score && $check->id > $test->count()) {
                DB::table('bio12_user_characters')->insert([
                    'user_id' => Auth::id(),
                    'character_id' => $loop,
                    'score' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);
                if ($loop == 1){
                    for ($i = 0; $i < 3; $i++) {
                        DB::table('bio12_user_levels')->insert([
                            'level_id' => $loop1++,
                            'character_id' => 1,
                            'user_id' => Auth::id(),
                            'score' => 0,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()
                        ]);
                    }
                }else{
                    for ($i = 1; $i <=3; $i++) {
                        DB::table('bio12_user_levels')->insert([
                            'level_id' =>$loop1++,
                            'character_id' => $loop,
                            'user_id' => Auth::id(),
                            'score' => 0,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()
                        ]);
                    }
                }
                if ($loop == 6){
                    DB::table('bio12_user_levels')->insert([
                        'level_id' => 16,
                        'character_id' => $loop,
                        'user_id' => Auth::id(),
                        'score' => 0,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]);
                }
            }
            $loop1+=3;
            $loop++;
        }
    }
}

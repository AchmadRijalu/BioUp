<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Character;
use App\Models\Log;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CharacterController extends Controller
{

    public function getAllChara(Request $request)
    {
        $this->addCharaByScore($request);
        $chara = User::where('id', Auth::id())->first()->characters;
        $allChara = Character::all();
        Log::create([
            'activity' => "Get character | ". Auth::user()->email." | ".$request->ip()
        ]);
        return response()->json(['userchara' => $chara, 'allchara' => $allChara]);
    }

    public function getLevelByChara(Request $request,$charID)
    {
        $chara = DB::table('bio12_user_levels')->where('user_id', '=', Auth::id())->where('character_id', '=', $charID)->select('level_id', 'character_id', 'user_id', 'score')->get();
        Log::create([
            'activity' => "Get level | ". Auth::user()->email." | ".$request->ip()
        ]);
        return response()->json(['levels' => $chara]);
    }

    private function addCharaByScore(Request $request) //menambahkan data ke tabel user_characters dan user_levels secara otomatis
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
                Log::create([
                    'activity' => "Add new character | ". Auth::user()->email." | ".$request->ip()
                ]);
                if ($loop == 1) {
                    Log::create([
                        'activity' => "New User, add first character & leaderboard | ". Auth::user()->email." | ".$request->ip()
                    ]);
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
                    DB::table('bio12_leaderboards')->insert([
                        'user_id' => Auth::id(),
                        'totalscore' => 0,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]);
                } else {
                    Log::create([
                        'activity' => "Add new levels | ". Auth::user()->email." | ".$request->ip()
                    ]);
                    for ($i = 1; $i <= 3; $i++) {
                        DB::table('bio12_user_levels')->insert([
                            'level_id' => $loop1++,
                            'character_id' => $loop,
                            'user_id' => Auth::id(),
                            'score' => 0,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()
                        ]);
                    }
                }
                if ($loop == 6) {
                    Log::create([
                        'activity' => "Add last character | ". Auth::user()->email." | ".$request->ip()
                    ]);
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
            $loop1 += 3;
            $loop++;
        }
    }
}

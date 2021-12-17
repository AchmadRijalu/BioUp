<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\leaderboard;
use App\Models\Level;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function getSoalByLevel($levelID)
    {
        $level = Level::where('id', $levelID)->first()->soals->shuffle();
        return response()->json(['soals' => $level]);
    }

    public function upScore(Request $request)
    {
        $tempscore = $request->score;
        $highscore = User::where('id', Auth::id())->first()->levels->where('id', $request->levelID)->first()->pivot->score;
        if ($tempscore > $highscore) {
            DB::table('bio12_user_levels')->where('user_id', '=', Auth::id())->where('level_id', '=', $request->levelID)->update([
                'score' => $tempscore,
                'updated_at' => Carbon::now()
            ]);
        }
        $accumulate = User::where('id', Auth::id())->first()->levels;
        $charID = User::where('id', Auth::id())->first()->levels->where('id', $request->levelID)->first()->character_id;
        $total_score = 0;
        foreach ($accumulate as $score) {
            $total_score += $score->pivot->score;
        }
        $check = User::where('id', Auth::id())->first()->characters->where('id', $charID)->first()->pivot->score;
        if ($total_score > $check) {
            DB::table('bio12_user_characters')->where('user_id', '=', Auth::id())->where('character_id', '=', $charID)->update([
                'score' => $total_score,
                'updated_at' => Carbon::now()
            ]);
        }
        $accumulate2 = User::where('id', Auth::id())->first()->characters;
        $total_score2 =0;
        foreach ($accumulate2 as $score) {
            $total_score2 += $score->pivot->score;
        }
        $check2 = leaderboard::where('user_id', Auth::id())->first()->totalscore;
        if ($total_score2 > $check2) {
            DB::table('bio12_leaderboards')->where('user_id', '=', Auth::id())->update([
                'totalscore' => $total_score2,
                'updated_at' => Carbon::now()
            ]);
        }
    }
}

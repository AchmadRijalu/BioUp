<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Soal;
use App\Models\Level;
use App\Models\User;
use App\Models\LevelSoal;
use App\Models\UserLevel;
use App\Models\UserCharacter;
use App\Models\leaderboard;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\PseudoTypes\LowercaseString;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $soal = Soal::all();


        return view('soal', compact('soal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->character_id != 6) {
            if ($request->updatescore > 100) {
                $accessToken = Auth::user()->token();
                DB::table('oauth_refresh_tokens')->where('access_token_id', $accessToken->id)->update(['revoked' => true]);
                $accessToken->revoke();
                $user = User::where('id', Auth::id())->first();
                $user->update([
                    'is_active' => '0'
                ]);
            }
        }
        $highscore = User::where('id', Auth::id())->first()->levels->where('id', $request->level_id)->first()->pivot->score;
        if ($request->updatescore > $highscore) {
            DB::table('bio12_user_levels')->where('user_id', '=', Auth::id())->where('level_id', '=', $request->level_id)->update([
                'score' => $request->updatescore,
                'updated_at' => Carbon::now()
            ]);
        }
        $charID = User::where('id', Auth::id())->first()->levels->where('id', $request->level_id)->first()->character_id;
        $accumulate = User::where('id', Auth::id())->first()->levels->where('character_id', $charID);
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
        $total_score2 = 0;
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
        return response()->json(['success' => 'Add Data Berhasil']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $level = Level::findorfail($id);
        $getsoal = Level::findorfail($id)->soals->shuffle();
        $gethealth = Character::findorfail($level->character_id);
        $size = sizeof(Level::findorfail($id)->soals->shuffle());
        $jsonencoded = json_encode($getsoal);

        return view('soal', compact('jsonencoded','getsoal', 'size', 'gethealth', 'level'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $shift = Soal::findorfail($id);
        $jawaban = strtolower(str_replace(' ', '', Soal::findorfail($id)->jawaban));
        $jawabanuser = strtolower(str_replace(' ', '', $request->jawaban));
        if ($jawaban == $jawabanuser) {
            dd('benar');
        } else {
            dd('salah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function check(Request $request, $id)
    {
    }
}

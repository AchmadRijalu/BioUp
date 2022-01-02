<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\leaderboard;
use App\Models\UserLevel;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserCharacter;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CharController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
                if ($loop == 1) {
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
        $character = Character::all();
        $userchar = UserCharacter::where('user_id', Auth::id())
            ->orderBy('character_id')
            ->get();

        return view('char', compact('character', 'userchar'));
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
        //
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
        // $levelchar = Character::findorfail($id)->levels->where('user_id', Auth::id());
        $levelchar = DB::table('bio12_user_levels')->where('user_id', '=', Auth::id())->where('character_id', '=', $id)->select('level_id', 'user_id')->get();
        $char = Character::findorfail($id);
        $uc = UserCharacter::where([['user_id', '=', Auth::id()],['character_id','=', $id]])->first();
        // dd($uc);
        if(UserCharacter::where([['user_id', '=', Auth::id()],['character_id','=', $id]])->first() == null){
            return redirect('/character');
        } else {
            return view('level', compact('char', 'levelchar'));
        }

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
}

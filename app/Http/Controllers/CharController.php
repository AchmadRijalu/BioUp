<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\UserLevel;
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
        $loop1 = 1;
        //
        if(UserCharacter::where('user_id', Auth::id())->first() == null){
            UserCharacter::create([
                'user_id' => Auth::id(),
                'character_id' => 1,
                'score' => 0,
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
        $char = Character::findorfail($id);

        return view('level', compact('char'));
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

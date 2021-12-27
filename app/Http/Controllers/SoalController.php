<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Soal;
use App\Models\Level;
use App\Models\LevelSoal;
use Illuminate\Http\Request;
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
        $level = Level::findorfail($id);
        $getsoal = Level::findorfail($id)->soals->shuffle();
        $gethealth = Character::findorfail($level->character_id);
        $size = sizeof(Level::findorfail($id)->soals->shuffle());

        return view('soal', compact('getsoal', 'size', 'gethealth'));
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
        }
        else {
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

    public function check(Request $request,$id)
    {

    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\leaderboard;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LeaderboardController extends Controller
{
    public function getLeaderboard(){
        $user = Auth::id();
        $allleaderboard = leaderboard::all()->sortBy([
            ['totalscore', 'desc'],
            ['updated_at', 'desc']
        ])->take(100);
        $alluser= DB::table('users')->orderBy('id')->select('id','username')->get();
        return response()->json(['user' => $user,'leaderboards' => $allleaderboard, 'allusers' => $alluser]);
    }
}

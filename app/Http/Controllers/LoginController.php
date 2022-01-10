<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

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

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $check = DB::table('users')->where('email', $request->email)->first();

        if (Auth::id() != null) {
            return redirect()->intended(route('character.index'));
        }
        if ($check != null) {
            if ($check->is_active == 1) {
                Log::create([
                    'activity' => "Attempt login | $request->email | " . $request->ip()
                ]);
                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
                    Log::create([
                        'activity' => "Login success | $request->email | " . $request->ip()
                    ]);
                    return redirect()->intended(route('character.index'));
                }
            } else {
                Log::create([
                    'activity' => "Login blocked. Reason: Ban | $request->email | " . $request->ip()
                ]);
                return back()->with('loginBanned', 'Akun telah di Ban');
            }
            Log::create([
                'activity' => "Login failed. Reason: Wrong Email/Password | $request->email | " . $request->ip()
            ]);
            // return redirect()->intended(route('character.index'));
            return back()->with('loginError', 'Login Gagal');
        } else {
            return back()->with('loginError', 'Email/Password Salah');
        }
    }

    public function logout(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Log::create([
            'activity' => "Logout | $user->email | " . $request->ip()
        ]);
        return redirect('/');
    }
}

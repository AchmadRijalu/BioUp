<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\Log;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Laravel\Passport\Client;

class LoginController extends Controller
{
    private $client;

    public function __construct()
    {
        $this->client = Client::find(2);
    }

    public function login(Request $request)
    {
        $this->validate(
            $request,
            [
                'email' => 'required', //username tidak boleh null
                'password' => 'required' //password tidak boleh null
            ],
            [
                'email.required' => "Username tidak boleh kosong",
                'password.required' => "Password tidak boleh kosong"
            ]
        );
        $user = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $check = DB::table('users')->where('email', $request->email)->first();
        if ($check != null) {
            Log::create([
                'activity' => "Attempt login | $request->email | ".$request->ip()
            ]);
            if ($check->is_active == '1') {
                if ($check->is_login == '0') {
                    if (Auth::attempt($user)) {

                        $response = Http::asForm()->post('http://bioup.test/oauth/token', [ //ini diganti
                            'grant_type' => 'password',
                            'client_id' => $this->client->id,
                            'client_secret' => $this->client->secret,
                            'username' => $request->email,
                            'password' => $request->password,
                            'scope' => '*',
                        ]);
                        if (!$response == null) {
                            $this->isLogin(Auth::id());
                            Log::create([
                                'activity' => "Login success | $request->email | ".$request->ip()
                            ]);
                        }
                        return $response->json();
                    } else {
                        Log::create([
                            'activity' => "Login failed. Reason: Wrong Email/Password | $request->email | ".$request->ip()
                        ]);
                        return response([
                            'message' => 'Email atau Password salah'
                        ]);
                    }
                } else {
                    Log::create([
                        'activity' => "Login failed. Reason: Another Device | $request->email | ".$request->ip()
                    ]);
                    return response([
                        'message' => 'Akun sudah digunakan diperangkat lain'
                    ]);
                }
            } else {
                Log::create([
                    'activity' => "Login blocked. Reason: Ban | $request->email | ".$request->ip()
                ]);
                return response([
                    'message' => 'Akun telah diban'
                ]);
            }
        } else {
            Log::create([
                'activity' => "Login failed. Reason: Wrong Email/Password | $request->email | ".$request->ip()
            ]);
            return response([
                'message' => 'Email atau Password salah'
            ]);
        }
    }
    public function logout(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $accessToken = Auth::user()->token();
        DB::table('oauth_refresh_tokens')->where('access_token_id', $accessToken->id)->update(['revoked' => true]);
        $user->update([
            'is_login' => '0'
        ]);
        $accessToken->revoke();
        Log::create([
            'activity' => "Logout | $user->email | ".$request->ip()
        ]);
        return response([
            'message' => 'Berhasil Log Out!'
        ]);
    }
    private function isLogin(int $id)
    {
        $user = User::findOrFail($id);
        return $user->update([
            'is_login' => '1'
        ]);
    }
}

<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Laravel\Passport\Client;

use function PHPUnit\Framework\isEmpty;

class LoginController extends Controller
{
    private $client;

    public function __construct()
    {
        $this->client = Client::find(2);
    }

    public function login(Request $request){
        $this->validate(
            $request,
            [
                'username' => 'required', //username tidak boleh null
                'password' => 'required' //password tidak boleh null
            ],
            [
                'username.required' => "Username tidak boleh kosong",
                'password.required' => "Password tidak boleh kosong"
            ]
        );
        $user = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        $check = DB::table('users')->where('username', $request->username)->first();

        if($check->is_active == '1'){
            if($check->is_login == '0'){
                if (Auth::attempt($user)){

                    $response = Http::asForm()->post('http://10.169.17.17/oauth/token', [ //ini diganti
                        'grant_type' => 'password',
                        'client_id' => $this->client->id,
                        'client_secret' => $this->client->secret,
                        'username' => $request->username,
                        'password' => $request->password,
                        'scope' => '*',
                    ]);
                    if (!$response == null){
                        $this->isLogin(Auth::id());
                    }
                    return $response->json();
                }else{
                    return response([
                        'message'=>'Gagal login, silakan coba lagi'
                    ]);
                }
            }else{
                return response([
                    'message'=>'Akun sudah digunakan diperangkat lain'
                ]);
            }
        }else{
            return response([
                'message'=>'Akun telah diban'
            ]);
        }
    }
    public function logout(){
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $accessToken = Auth::user()->token();
        DB::table('oauth_refresh_tokens')->where('access_token_id', $accessToken->id)->update(['revoked' => true]);
        $user->update([
            'is_login' => '0'
        ]);
        $accessToken->revoke();
        return response([
            'message'=>'Berhasil Log Out!'
        ]);
    }
    private function isLogin(int $id){
        $user = User::findOrFail($id);
        return $user->update([
            'is_login' => '1'
        ]);
    }
}
<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $this->validate(
            $request,
            [
                'username' => 'required|unique:users,username', //username harus unik, tidak boleh sama
                'email' => 'required|email|unique:users,email', //email harus unik, tidak boleh sama
                'password' => 'required|string|min:8|confirmed', //password minim 8 karakter
                'name' => 'required',
                'school' => 'required',
                'city' => 'required',
                'birthyear' => 'required',
            ],
            [
                'username.required' => "Username tidak boleh kosong",
                'username.unique' => "Username sudah dipakai oleh user lain",
                'email.required' => "Email tidak boleh kosong",
                'email.email' => "Masukkan email dengan format yang benar",
                'email.unique' => "Email sudah terdaftar diakun lain",
                'password.required' => "Password tidak boleh kosong",
                'password.min' => "Password tidak boleh kurang dari 8 karakter",
                'password.confirmed' => "Password dan Confirm Password harus sama",
                'name.required' => 'Nama tidak boleh kosong',
                'school.required' => 'Nama Sekolah tidak boleh kosong',
                'city.required' => 'Nama Kota tidak boleh kosong',
                'birthyear.required' => 'Tahun lahir tidak boleh kosong',
            ]
        );
        $user = $this->newUser($request->all());
        if (empty($user)) {
            return response([
                'message' => 'Akun gagal dibuat, silakan coba lagi'
            ]);
        } else {
            return response([
                'message' => 'Selamat, akun berhasil dibuat!'
            ]);
        }
    }
    private function newUser(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'name' => $data['name'],
            'school' => $data['school'],
            'city' => $data['city'],
            'birthyear' => $data['birthyear'],
        ]);
    }
}

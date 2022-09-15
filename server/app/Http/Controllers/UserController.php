<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $rules = [
            'nama_lengkap'  => 'required|min:4|max:32',
            'no_telp'       => 'required|numeric|min:9',
            'username'      => 'required|unique:users|min:8|max:16',
            'email'         => 'required|email|unique:users',
            'password'      => 'required|min:6|confirmed',
            'roles_id'      => 'required'
        ];

        $messages = [
            'nama_lengkap.required' => 'Nama Lengkap wajib diisi',
            'nama_lengkap.min'      => 'Nama lengkap minimal 4 karakter',
            'nama_lengkap.max'      => 'Nama lengkap maksimal 32 karakter',
            'no_telp.required'      => 'No Telephone wajib diisi',
            'no_telp.numeric'       => 'No Telephone tidak valid',
            'no_telp.min'           => 'No Telephone terlalu pendek',
            'username.required'     => 'Uusername wajib diisi',
            'username.unique'       => 'username tidak tersedia',
            'username.min'          => 'username minimal 8 karakter',
            'username.max'          => 'username maksimal 16 karakter',
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'email.unique'          => 'Email sudah terdaftar',
            'password.required'     => 'Password wajib diisi',
            'password.min'          => 'Password minimal 6 karakter',
            'password.confirmed'    => 'Password tidak sama dengan konfirmasi password',
            'roles_id.required'     => 'Roles tidak tersedia'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return new PostResource(false, $validator->errors()->first());
        }
        $data = [
            'username' => strtolower($request->username),
            'nama_lengkap' => strtoupper($request->nama_lengkap),
            'email' => strtolower($request->email),
            'password' => Hash::make($request->password),
            'no_telp' => $request->no_telp,
            'roles_id' => $request->roles_id,
        ];
        try {
            $user = User::create($data);
            return new PostResource(true, "User berhasil teregistrasi", $user);
        } catch (\Throwable $th) {
            return new PostResource(false, $th->getMessage());
        }
    }

    public function login(Request $request)
    {
        $rules = [
            'email'         => 'required',
            'password'      => 'required',
        ];
        $messages = [
            'email.required' => 'email wajib diisi',
            'email.password' => 'password wajib diisi'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return new PostResource(false, $validator->errors()->first());
        }
        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials)) {
            return new PostResource(false, "email atau password salah");
        }

        $user = User::where('email', $request->email)->first();
        if (!Hash::check($request->password, $user->password, [])) {
            return new PostResource(false, "password anda salah");
        }

        $tokenResult = $user->createToken(str()->random(40))->plainTextToken;

        $data = [
            'access_token' => $tokenResult,
            'token_type' => 'Bearer',
            'user' => $user
        ];
        return new PostResource(true, "login berhasil", $data);
    }
}

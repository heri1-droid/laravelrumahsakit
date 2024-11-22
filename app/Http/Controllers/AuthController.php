<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('home.auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login Gagal, Priksa kembali Akun Anda!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/auth');
    }

    // public function login(Request $request)
    // {
    //     if (Auth::attempt([
    //         'email' => $request->email,
    //         'password' => $request->password
    //     ])) {
    //         $user = Auth::user(); // ambil data user dari tabel users sesuai dengan email dan pass
    //         if ($user->role == 'admin') {
    //             $success['token'] = $user->createToken('MDPApp', ['create', 'read', 'update', 'delete'])->plainTextToken; // buat token
    //         } else {
    //             $success['token'] = $user->createToken('MDPApp', ['read'])->plainTextToken; // buat token
    //         }

    //         $success['name'] = $user->name; // response nama user
    //         return response()->json($success, 201);
    //     } else {
    //         return response()->json(['error' => 'Unauthorized'], 401);
    //     }
    // }
    public function login(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            $user = Auth::user();
            if ($user->role == 'A') {
                $success['token'] = $user->createToken('MDPApp', ['create-fakultas', 'read-fakultas', 'update-fakultas', 'delete-fakultas'])->plainTextToken;
            } else {
                $success['token'] = $user->createToken('MDPApp', ['read-fakultas'])->plainTextToken;
            }
            $success['name'] = $user->name;
            return response()->json($success, 201);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }
}

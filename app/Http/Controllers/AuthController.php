<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Prodi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withErrors('Login details are not valid');
    }

    public function register(Request $request)
    {

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'nim' => $request->nim,
            'prodi_id' => $request->prodi,
            'role_id' => '2',
            'graduation_year' => $request->graduation_year,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return redirect('/login');
    }

    public function registerIndex()
    {
        $data = Prodi::all();
        return view('auth.register', compact('data'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}

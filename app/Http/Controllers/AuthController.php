<?php

namespace App\Http\Controllers;

use App\Http\Requests\registerRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('layouts.login', [
            'title' => 'Login Page'
        ]);
    }

    public function loginPost(Request $request)
    {



        if (Auth::attempt($request->only(['email', 'password']))) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success', 'Selamat Datang ' . Auth::user()->name);
        } else {

            return redirect()->back()->with('error', 'Email Or Password Invalid');
        }
    }

    public function register()
    {
        return view('register', [
            'title' => 'Register'
        ]);
    }



    public function registerPost(registerRequest $request)
    {

        $request->validated();

        $user['name'] = $request->name;
        $user['email'] = $request->email;
        $user['password'] = bcrypt($request->password);



        $file = $request->file('profile_picture');
        $year = Carbon::now()->format('Y');

        $user['profile_picture'] = $file ? $file->storeAs("user-image/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public') : null;

        if (!$request->file('profile_picture')) {
            $user['profile_picture'] = '/storage/avatars/user.png';
        }

        User::create($user);

        return redirect()->back()->with('success', 'Registrasi Berhasil Dilakukan!');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        return redirect()->route('login');
    }
}

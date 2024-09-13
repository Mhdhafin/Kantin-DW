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
        return view('login', [
            'title' => 'Login Page'
        ]);
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        } else {

            return redirect()->back()->with('error', 'Email Or Password Invalid');
        }



        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ]);
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

        User::create($user);

        return redirect()->back()->with('success', 'Register Successfully');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        return redirect()->route('login');
    }
}

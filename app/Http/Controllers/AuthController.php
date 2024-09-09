<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login', [
            'title' => 'Login'
        ]);
    }

    public function loginPost(Request $request)
    {
        // dd($request);
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function register()
    {
        return view('register', [
            'title' => 'Register'
        ]);
    }

    public function registerPost(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|min:4',
            'username' => 'required',
            'password' => 'required|min:8',
            'email' => 'required|email'
        ]);

        $file = $request->file('image');
        $year = Carbon::now()->format('Y');

        $validate['image'] = $file ? $file->storeAs("image-product/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public') : null;
        $validate['password'] = bcrypt($validate['password']);


        User::create($validate);


        return redirect()->back()->with('success', 'register successfully');
    }
}

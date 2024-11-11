<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('forgot-password.index', [
            'title' => 'Forgot Password',
            'users' => $users
        ]);
    }

    public function verify(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect('/forgot-password')->with('error', 'Email Tidak Terdaftar');
        }

        $user->sendPasswordResetNotification($user->email);

        return back()->with('success', 'Silahkan Cek Email Anda Untuk Reset Password');
    }

    public function edit(User $user)
    {
        return view('forgot-password.edit', [
            'title' => 'Edit Password',
            'users' => $user
        ]);
    }
}

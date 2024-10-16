<?php

namespace App\Http\Controllers;

use App\Http\Requests\profileupdateRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::first();
        return view('profile.index', [
            'title' => 'User Profile',
            'users' => $user
        ]);
    }

    public function edit(User $user)
    {

        $user->where('id', auth()->user()->id)->first();

        return view('profile.edit', [
            'title' => 'Profile Edit',
            'user' => $user
        ]);
    }

    public function update(profileupdateRequest $request, User $user)
    {

        $data = $request->user->fill($request->validated());

        $year = Carbon::now()->format('Y');
        $file = $request->file('profile_picture');

        $data['profile_picture'] = $file ? $file->storeAs("user-image/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public') : null;


        $data->update();

        return redirect()->route('profile.index')->with('success', 'Update Profile Berhasil Dilakukan!');
    }
}

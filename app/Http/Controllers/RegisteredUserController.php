<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\RegisterdUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterdUserRequest $request)
    {
        $data = $request->validated();

        $role = $request->input('role');

        if (is_null($role)) {
            $role = 'client';
        }

        $user = User::create($data);
        $user->assignRole($role);

        Auth::login($user);

        return redirect()->route('dashboard');
    }
}

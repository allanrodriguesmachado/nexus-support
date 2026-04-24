<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\RegisterdUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterdUserRequest $request): RedirectResponse
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

    public function registerAdminOrTechnical(RegisterdUserRequest $request): RedirectResponse
    {
        $role = $request->input('role');

        $data = $request->validated();
        $user = User::create($data);

        $user->assignRole($role);


        return redirect()->route('dashboard');
    }
}

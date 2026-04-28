<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\StoreRegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function __invoke()
    {
        return view('client.register');
    }

    public function store(StoreRegisterRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $user = User::create($data);

        $user->assignRole('client');

        Auth::login($user);

        return redirect()->route('dashboard');
    }
}

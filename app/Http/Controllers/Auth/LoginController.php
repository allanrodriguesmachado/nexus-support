<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function __invoke(LoginRequest $request)
    {
        $auth = Auth::attempt($request->validated());

        if (!$auth) {
            throw new \RuntimeException('Invalid credentials');
        }

        $request->session()->regenerate();


        return redirect()->intended(route('dashboard', absolute: false));
    }

    public function index(): View
    {
        return view('auth.login');
    }
}

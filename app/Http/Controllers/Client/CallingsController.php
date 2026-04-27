<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\StoreCallingRequest;
use App\Models\Callings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CallingsController extends Controller
{
    public function create(): View
    {
        return view('client.calling');
    }

    public function store(StoreCallingRequest $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validated();

        Callings::create($data);

        return redirect()->route('callings.create')->with('success', 'Calling created successfully');
    }
}

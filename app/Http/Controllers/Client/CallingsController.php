<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\StoreCallingRequest;
use App\Models\Calling;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use JetBrains\PhpStorm\NoReturn;

class CallingsController extends Controller
{
    #[NoReturn]
    public function show()
    {
        $callings = Calling::query()->where('client_id', auth()->user()->id)->get();
        return view('client.list_calling', [
            'callings' => $callings,
        ]);
    }

    public function create(): View
    {
        return view('client.calling');
    }

    public function store(StoreCallingRequest $request): RedirectResponse
    {
        auth()->user()->callings()->create( $request->validated());

        return redirect()->route('callings.create')->with('success', 'Calling created successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTechnicalRequest;
use App\Http\Requests\UpdateTechnicalRequest;
use App\Models\Admin\Technical;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class TechnicalController extends Controller
{


    public function create()
    {
        return view('admin.technicals.create');
    }

    public function store(StoreTechnicalRequest $request)
    {
        dd($request->validated());

        $role = $request->input('role');
        $data =  $request->validated();
        dd($data);
        $user = User::create($data);

        $user->assignRole('admin');

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function show(Technical $technical)
    {
        //
    }

    public function edit(Technical $technical)
    {
        //
    }

    public function update(UpdateTechnicalRequest $request, Technical $technical)
    {
        //
    }

    public function destroy(Technical $technical)
    {
        //
    }
}

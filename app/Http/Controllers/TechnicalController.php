<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTechnicalRequest;
use App\Http\Requests\UpdateTechnicalRequest;
use App\Models\Admin\Technical;

class TechnicalController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.technicals.create');
    }

    public function store(StoreTechnicalRequest $request)
    {
        //
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

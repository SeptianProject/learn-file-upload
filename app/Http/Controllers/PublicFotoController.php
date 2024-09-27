<?php

namespace App\Http\Controllers;

use App\Models\PublicFoto;
use App\Http\Requests\StorePublicFotoRequest;
use App\Http\Requests\UpdatePublicFotoRequest;

class PublicFotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->view('public-foto.index', [
            'public_fotos' => PublicFoto::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('public-foto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePublicFotoRequest $request)
    {
        // upload file
        $request->file('foto')->store('/');
        // create new public foto
        PublicFoto::create([
            'name' => $request->name,
            'path' => $request->file('foto')->hashName(),
        ]);


        return response()->redirectTo(route('public-foto.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(PublicFoto $publicFoto)
    {
        return response()->view('public-foto.show', compact('publicFoto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PublicFoto $publicFoto)
    {
        return response()->view('public-foto.edit', compact('publicFoto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePublicFotoRequest $request, PublicFoto $publicFoto)
    {
        if ($request->file('foto')) {
            $request->file('foto')->store('/');

            $publicFoto->update([
                'name' => $request->name,
                'path' => $request->file('foto')->hashName()
            ]);
        } else {
            $publicFoto->update([
                'name' => $request->name,
                'path' => 'default.jpg'
            ]);
        }

        return response()->redirectTo(route('public-foto.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PublicFoto $publicFoto)
    {
        dd('page destroy');
    }
}

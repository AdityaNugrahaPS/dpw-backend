<?php

namespace App\Http\Controllers;

use App\Models\NamaTamu;
use Illuminate\Http\Request;

class NamaTamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Display the specified resource by ID.
     */
    public function show(NamaTamu $namaTamu) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NamaTamu $namaTamu) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NamaTamu $namaTamu) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NamaTamu $namaTamu) {}

    /**
     * Display the specified resource by nama (untuk URL seperti /Aditya).
     */
    public function showByName($nama)
    {
        $namaTamu = NamaTamu::where('nama', $nama)->first();

        if (!$namaTamu) {
            abort(404, 'Tamu tidak ditemukan');
        }

        return view('tamu.opening', ['namaTamu' => $namaTamu]);
    }
}

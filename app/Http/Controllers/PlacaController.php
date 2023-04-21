<?php

namespace App\Http\Controllers;

use App\Models\Placa;
use Illuminate\Http\Request;

class PlacaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function cards() {
        $cards = Placa::all();

        return response()->json([
            'cards' => $cards
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Placa $placa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Placa $placa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Placa $placa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Placa $placa)
    {
        //
    }
}

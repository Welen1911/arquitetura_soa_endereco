<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $endereco = Endereco::create([
            'cliente_id' => $request->cliente_id,
            'rua' => $request->rua,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
        ]);

        return response(['endereco' => $endereco], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enderecos = Endereco::where('cliente_id', $id)->get();

        return response($enderecos, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Endereco $endereco)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Endereco $endereco)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Endereco $endereco)
    {
        //
    }
}

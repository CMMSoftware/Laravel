<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{

	public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('fuse.cadastros.clientes.index');
    }

    public function create() {
        return view('fuse.cadastros.clientes.create');
    }

    public function store(Request $request) {
        request()->validate([
            'nome' => 'required',
            'CPF' => 'required',
        ]);
        Clientes::create($request->all());
        return redirect()->route('fuse.cadastros.clientes.index')->with('success','Cliente Criado com Sucesso!');
    }

    public function edit(Clientes $cliente) {
        return view('fuse.cadastros.clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Clientes $cliente) {
        request()->validate([
            'nome' => 'required',
            'CPF' => 'required',
        ]);
        $cliente->update($request->all());
        return redirect()->route('fuse.cadastros.clientes.index')->with('success','Cliente Atualizado com Sucesso!');
    }

    public function destroy($id) {
        Clientes::destroy($id);
        return redirect()->route('fuse.cadastros.clientes.index')->with('success','Cliente Deletado com Sucesso!');
    }

}

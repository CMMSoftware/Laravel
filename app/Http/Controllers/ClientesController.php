<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;

class ClientesController extends Controller
{

	public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $clientes = Clientes::latest()->paginate(5);
        return view('fuse.cadastros.clientes.index', compact('clientes'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create() {
        return view('fuse.cadastros.clientes.create');
    }

    public function store(Request $request) {
        Clientes::create($request->all());
        return redirect()->route('clientes.index')->with('success','Cliente Criado com Sucesso!');
    }

    public function show($id) {
        $cliente = Clientes::find($id);
        return view('clientes.show', compact('cliente'));
    }

    public function edit(Clientes $cliente) {
        return view('fuse.cadastros.clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Clientes $cliente) {
        $cliente->update($request->all());
        return redirect()->route('clientes.index')->with('success','Cliente Atualizado com Sucesso!');
    }

    public function destroy(Clientes $cliente) {
        Clientes::destroy($cliente->id);
        return redirect()->route('clientes.index')->with('success','Cliente Deletado com Sucesso!');
    }
 
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use App\Endereco;
use App\Http\Requests\ClientesRequest;

class ClientesController extends Controller
{

	public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $clientes = Clientes::latest()->paginate(5);
        return view('fuse.cadastros.clientes.index', compact('clientes'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create() {
        return view('fuse.cadastros.clientes.create');
    }

    public function store(Clientes $cliente, ClientesRequest $request) {
        $cliente = Clientes::create($request->all());
        $endereco = new Endereco();
        $endereco->endereco = $request->endereco;
        $endereco->bairro = $request->bairro;
        $endereco->numero = $request->numero;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->cep = $request->cep;
        $endereco->clienteId = $cliente->id;
        $cliente->endereco()->save($endereco);
        return redirect()->route('clientes.index')->with('success','Cliente Cadastrado com Sucesso!');
    }

    public function show(Clientes $cliente) {
        return view('fuse.cadastros.clientes.show', compact('cliente'));
    }

    public function edit(Clientes $cliente) {
        return view('fuse.cadastros.clientes.edit', compact('cliente'));
    }

    public function update(ClientesRequest $request, $id) {
        $cliente = Clientes::find($id);
        $cliente->update($request->all());
        $endereco = $cliente->endereco;
        $endereco->endereco = $request->endereco;
        $endereco->bairro = $request->bairro;
        $endereco->numero = $request->numero;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->cep = $request->cep;
        $cliente->endereco()->save($endereco);
        return redirect()->route('clientes.index')->with('success','Cliente Atualizado com Sucesso!');
    }

    public function destroy($id) {
        $cliente = Clientes::find($id);
        $cliente->endereco()->delete();
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success','Cliente Deletado com Sucesso!');
    }
 
}

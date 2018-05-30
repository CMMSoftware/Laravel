<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use App\Endereco;
use App\Enums\Genero;
use DateTime;

class ClientesController extends Controller
{

	public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $clientes = Clientes::orderBy('nome')->get();
        return view('fuse.cadastros.clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('fuse.cadastros.clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Clientes $cliente, Request $request) {
        $cliente = new Clientes();
        $cliente->nome = $request->nome;
        $cliente->genero = $request->genero;
        $cliente->dataNascimento = date_format(new DateTime($request->dataNascimento), 'Y-d-m');
        $cliente->cpf = $request->cpf;
        $cliente->rg = $request->rg;
        $cliente->email = $request->email;
        $cliente->telefone1 = $request->telefone1;
        $cliente->telefone2 = $request->telefone2;

        $endereco = new Endereco();
        $endereco->endereco = $request->endereco;
        $endereco->bairro = $request->bairro;
        $endereco->numero = $request->numero;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->cep = $request->cep;
        $endereco->clienteId = $cliente->id;

        $cliente->save();
        $cliente->endereco()->save($endereco);
        return redirect()->route('clientes.index')->with('success','Cliente Cadastrado com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $cliente) {
        if (isset($cliente->genero)) {
           $cliente->genero = Genero::getDescricao($cliente->genero);
        }
        if (isset($cliente->dataNascimento)) {
            $cliente->dataNascimento = date_format(new DateTime($cliente->dataNascimento), 'd-m-Y');
        }
        return view('fuse.cadastros.clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Clientes $cliente) {
        if (isset($cliente->dataNascimento)) {
            $cliente->dataNascimento = date_format(new DateTime($cliente->dataNascimento), 'd-m-Y');
        }
        return view('fuse.cadastros.clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Clientes $request, $id) {
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $cliente = Clientes::find($id);
        $cliente->endereco()->delete();
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success','Cliente Deletado com Sucesso!');
    }
 
}

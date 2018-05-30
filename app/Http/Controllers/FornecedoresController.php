<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedores;
use App\Enums\tipoPessoa;

class FornecedoresController extends Controller
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
        $fornecedores = Fornecedores::orderBy('nomeFantasia')->get();
        return view('fuse.cadastros.fornecedores.index', compact('fornecedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('fuse.cadastros.fornecedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Fornecedores $fornecedor, Request $request) {
        Fornecedores::create([
            'razaoSocial' => $request->razaoSocial,
            'nomeFantasia' => $request->nomeFantasia,
            'cnpj' => $request->cnpj,
            'tipoPessoa' => $request->tipoPessoa,
            'inscricaoEstadual' => $request->inscricaoEstadual,
            'representante1' => $request->representante1,
            'representante2' => $request->representante2,
            'telefone1' => $request->telefone1,
            'telefone2' => $request->telefone2,
            'email' => $request->email,
            'site' => $request->site,
        ]);
        return redirect()->route('fornecedores.index')->with('success','Fornecedor Cadastrado com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $fornecedor = Fornecedores::find($id);
        if (isset($fornecedor->tipoPessoa)) {
            $fornecedor->tipoPessoa = TipoPessoa::getDescricao($fornecedor->tipoPessoa);
        }
        return view('fuse.cadastros.fornecedores.show', compact('fornecedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $fornecedor = Fornecedores::find($id);
        if (isset($fornecedor->tipoPessoa)) {
            $fornecedor->tipoPessoa = TipoPessoa::getDescricao($fornecedor->tipoPessoa);
        }
        return view('fuse.cadastros.fornecedores.edit', compact('fornecedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $fornecedor = Fornecedores::find($id);
        $fornecedor->update($request->all());
        return redirect()->route('fornecedores.index')->with('success','Fornecedor Atualizado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $fornecedor = Fornecedores::find($id);
        $fornecedor->delete();
        return redirect()->route('fornecedores.index')->with('success','Fornecedor Deletado com Sucesso!');
    }
}

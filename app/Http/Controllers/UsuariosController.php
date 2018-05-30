<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Enums\Situacao;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
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
        $usuarios = User::orderBy('nome')->get();
        foreach ($usuarios as $key => $value) {
            $value->situacao = Situacao::getDescricao($value->situacao);
        }
        return view('fuse.cadastros.usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('fuse.cadastros.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        User::create([
            'nome' => $request->nome,
            'login' => strtoupper($request->login),
            'perfil' => $request->perfil,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('usuarios.index')->with('success','Usuário Cadastrado com Sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $usuario) {
        return view('fuse.cadastros.usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $usuario = User::find($id);
        $usuario->nome = $request->nome;
        $usuario->login = strtoupper($request->login);
        $usuario->perfil = $request->perfil;
        $usuario->situacao = $request->situacao;
        if (isset($request->password)) {
            $usuario->password = Hash::make($request->password);
        }
        $usuario->save();
        return redirect()->route('usuarios.index')->with('success','Usuário Atualizado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success','Usuário Deletado com Sucesso!');
    }
}

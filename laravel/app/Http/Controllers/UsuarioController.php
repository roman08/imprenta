<?php

namespace Imprenta\Http\Controllers;

use Illuminate\Http\Request;
use Imprenta\Http\Requests;
use Imprenta\User;
use Imprenta\UsuariosModel;
use Imprenta\usuarioRolModel;
use Bican\Roles\Models\Role;
use Session;
use Redirect;
use Imprenta\Http\Controllers\Controller;

class UsuarioController extends Controller {

    public function __construct() {

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
//        $users = User::All();
        $users = User::join('role_user', 'users.id', '=', 'role_user.role_id')->get();
        $usuarioRol = usuarioRolModel::all();
        $roles = array("0" => '–Rol–') + Role::where('status', 1)->lists('name', 'id')->toArray();
        return view('usuario.index', compact('users', 'roles','usuarioRol'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $roles = array("" => '–Rol–') + Role::where('status', 1)->lists('name', 'id')->toArray();
        return view('usuario.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        User::create([
            'name' => $request['nombre'],
            'email' => $request['email'],
            'password' => $request['password'],
        ]);





//        UsuariosModel::create([
//            'nombre' => $request['nombre'],
//            'apellidos' => $request['apellidos'],
//            'email' => $request['email'],
//            'usuario' => $request['nombre'],
//            'password' => bcrypt($request['password']),
//            'fecha_registro' => date("Y-m-d"),
//            'fecha_activacion' => date("Y-m-d"),
//            'fecha_actuliazacion' => date("Y-m-d"),
//            'verificado' => '0',
//            'estatus' => $request['estatus'],
//            'acceso' => '1',
//            'tipo_usuario' => $request['tipo_usuario'],
//        ]);
        return redirect('/usuario')->with('message', 'Datos Guardados Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $usuarios = UsuariosModel::find($id);
        $roles = array("" => '–Perfil–') + Role::where('status', 1)->lists('description', 'id')->toArray();
        return view('usuario.edit', compact('usuarios', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $user = UsuariosModel::find($id);
        $user->fill($request->all());
         $user->save();      
//        Session::flash('message', 'Usuario Editado Correctamente');
        return redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        UsuariosModel::destroy($id);
        Session::flash('message', 'Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
    }

}

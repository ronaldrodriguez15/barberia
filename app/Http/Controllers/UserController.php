<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'DESC')->get();
        
        return view('panel.usuarios.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validacion del form por backend
        $rules = array(
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
        );

        $messages = array(
            'name.required' => 'Los nombres son requeridos.',
            'last_name.required' => 'Los apellidos es requerida.',
            'email.required' => 'El correo electronico es requerido.',
            'password.required' => 'La contraseña es requerida.',

        );
        $request->validate($rules, $messages);

        $user = new User();

        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('usuarios.index')->with('success', 'Bien!!, El usuario ha sido creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('panel.usuarios.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validacion del form por backend
        $rules = array(
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
        );

        $messages = array(
            'name.required' => 'Los nombres son requeridos.',
            'last_name.required' => 'Los apellidos es requerida.',
            'email.required' => 'El correo electronico es requerido.',

        );
        $request->validate($rules, $messages);

        $user = User::find($id);

        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('usuarios.index')->with('success', 'Bien!!, la información del usuario ha sido actualizada.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('usuarios.index')->with('success', 'Bien!!, El usuario ha sido eliminado');
    }
}

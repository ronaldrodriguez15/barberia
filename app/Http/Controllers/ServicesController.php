<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::orderBy('created_at', 'DESC')->get();

        foreach ($services as $service) {

            if ($service->tpo_identification === 1) 
            {
                $service->tpo_identification = 'Tarjeta de identidad';
            } 
            else if ($service->tpo_identification === 2) 
            {
                $service->tpo_identification = 'Cédula de ciudadania';
            } 
            else 
            {
                $service->tpo_identification = 'Cédula de extranjeria';
            }
        }

        return view('panel.servicios.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'names' => 'required',
            'fecha_nacimiento' => 'required',
            'tpo_identification' => 'required',
            'nro_identification' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'phone_two' => 'required'
        );

        $messages = array(
            'names.required' => 'Los nombres son requeridos.',
            'fecha_nacimiento.required' => 'La fecha de nacimiento es requerida.',
            'tpo_identification.required' => 'El tipo de identificación es requerida.',
            'nro_identification.required' => 'el número de identificación es requerido.',
            'email.required' => 'El correo es requerido',
            'address.required' => 'La dirección es requerida.',
            'phone.required' => 'El número de teléfono fijo es requerido',
            'phone_two.required' => 'El número de telefono movil es requerido'
        );
        $request->validate($rules, $messages);

        // se guarda el registro en la BD
        $service = new Services();
        $service->names = $request->names;
        $service->fch_age = $request->fecha_nacimiento;
        $service->tpo_identification = $request->tpo_identification;
        $service->nro_identification = $request->nro_identification;
        $service->email = $request->email;
        $service->address = $request->address;
        $service->phone = $request->phone;
        $service->phone_two = $request->phone_two;
        $service->save();

        $message_store = "Excelente!!, El servicio ha sido solicitado, pronto nos comunicaremos contigo.";

        return view('contactanos', compact('message_store'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Services::findOrFail($id);

        $service->delete();

        return redirect()->route('servicios.index')->with('success', 'Bien!!, El servicio ha sido eliminado');
    }
}

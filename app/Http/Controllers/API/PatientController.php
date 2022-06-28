<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Patient::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'surname' => 'required',
            'age' => 'required',
            'sex' => 'required',
            'ci' => 'required|unique:patients,ci',
            'type_blood' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required'
        ];
        $messages = [
            'name.required' => 'El campo :attribute es requerido',
            'surname.required' => 'El campo :attribute es requerido',
            'age.required' => 'El campo :attribute es requerido',
            'sex.required' => 'El campo :attribute es requerido',
            'ci.required' => 'El campo :attribute es requerido',
            'ci.required' => 'El CI ya se encuentra registrado',
            'type_blood.required' => 'El campo :attribute es requerido',
            'phone.required' => 'El campo :attribute es requerido',
            'email.required' => 'El campo :attribute es requerido',
            'address.required' => 'El campo :attribute es requerido',
        ];
        Patient::create($request->validate($rules, $messages));
        return response()->json([
            'res' => true,
            'msg' => 'Paciente guardado correcamente'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $paciente)
    {
        return response()->json([
            'res' => true,
            'paciente' => $paciente
        ]);
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
        //
    }
}

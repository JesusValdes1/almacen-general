<?php

namespace App\Http\Controllers;

use App\Models\Usuario;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function storeUsuario(Request $request)
    {
        $rules = [
            'nombre' => 'required|string|max:20',
            'apellidos' => 'nullable|string|max:20',
            'password' => 'required|string|max:8',
            'estado' => 'required|integer',
        ];

        $messages = [
            'nombre.required' => "El campo Nombre Corto es requerido",
            'nombre.required' => "El campo Nombre es requerido",
            'nombre.unique' => 'El valor del campo Nombre ya existe',
            'nombre.max' => 'El campo Nombre debe tener máximo :max caracteres',
        ];

        // Guardar usuario
        Usuario::create([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'contraseña' => $request->password,
            'estado' => $request->estado,
        ]);

        return redirect()->back()->with('success', 'Usuario guardado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

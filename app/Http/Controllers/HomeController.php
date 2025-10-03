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
        try {

            $rules = [
                'nombre' => 'required|string|max:20',
                'apellidos' => 'nullable|string|max:20',
                'contrasenia' => 'required|string|max:8',
                'estado' => 'required|integer',
            ];

            $messages = [
                'nombre.required' => "El campo nombre es requerido.",
                'nombre.max' => 'El nombre debe tener máximo :max caracteres.',
                'apellidos.max' => 'El apellido debe tener máximo :max caracteres.',
                'contrasenia.required' => 'La contraseña es requerida.',
                'contrasenia.max' => 'La contraseña debe tener máximo :max caracteres.',
                'estado.required' => 'El estado es requerido.',
                'estado.integer' => 'El estado debe ser un número entero.',
            ];

                $validated = $request->validate($rules, $messages);

                $usuario = Usuario::create($validated);

                $respuesta = [
                    'error' => false,
                    'usuario' => $usuario
                ];

        } catch (Exception $e) {
            $respuesta = [
                'codigo' => 500,
                'error' => true,
                'errorMessage' => $e->getMessage()
            ];
        }

        return $respuesta;
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

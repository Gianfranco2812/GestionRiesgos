<?php

namespace App\Http\Controllers;

use App\Models\Proceso;
use Illuminate\Http\Request;

class ProcesoController extends Controller
{
    // Mostrar todos los procesos
    public function index()
    {
        $procesos = Proceso::all();
        return view('Proceso.index', compact('procesos'));
    }

    // Mostrar formulario para crear un nuevo proceso
    public function create()
    {
        return view('Proceso.create');
    }

    // Guardar un nuevo proceso en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        Proceso::create($request->all());

        return redirect()->route('procesos.index')->with('success', 'Proceso creado exitosamente.');
    }

    // Mostrar los detalles de un proceso específico
    public function show($id)
    {
        $proceso = Proceso::findOrFail($id);
        return view('Proceso.show', compact('proceso'));
    }

    // Mostrar formulario para editar un proceso existente
    public function edit($id)
    {
        $proceso = Proceso::findOrFail($id);
        return view('Proceso.edit', compact('proceso'));
    }

    // Actualizar un proceso en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $proceso = Proceso::findOrFail($id);
        $proceso->update($request->all());

        return redirect()->route('procesos.index')->with('success', 'Proceso actualizado exitosamente.');
    }

    // Eliminar un proceso de la base de datos
    public function destroy($id)
    {
        $proceso = Proceso::findOrFail($id);
        $proceso->delete();

        return redirect()->route('procesos.index')->with('success', 'Proceso eliminado exitosamente.');
    }
}
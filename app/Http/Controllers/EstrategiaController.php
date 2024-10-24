<?php

namespace App\Http\Controllers;

use App\Models\Estrategia; // Asegúrate de importar tu modelo
use Illuminate\Http\Request;

class EstrategiaController extends Controller
{
    // Muestra la lista de estrategias
    public function index()
    {
        $estrategias = Estrategia::all(); // Obtener todas las estrategias
        return view('Estrategia.index', compact('estrategias')); // Pasar datos a la vista
    }

    // Muestra el formulario para crear una nueva estrategia
    public function create()
    {
        return view('Estrategia.create'); // Retornar vista de creación
    }

    // Almacena una nueva estrategia
    public function store(Request $request)
    {
        $request->validate([
            'estrategia_mitigacion' => 'required|max:18',
        ]);

        Estrategia::create($request->all()); // Crear nueva estrategia
        return redirect()->route('estrategias.index')->with('success', 'Estrategia creada correctamente.'); // Redirigir a index
    }

    // Muestra el formulario para editar una estrategia existente
    public function edit($id)
    {
        $estrategia = Estrategia::findOrFail($id); // Buscar la estrategia por ID
        return view('Estrategia.edit', compact('estrategia')); // Retornar vista de edición
    }

    // Actualiza una estrategia existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'estrategia_mitigacion' => 'required|max:18',
        ]);

        $estrategia = Estrategia::findOrFail($id); // Buscar la estrategia por ID
        $estrategia->update($request->all()); // Actualizar estrategia
        return redirect()->route('estrategias.index')->with('success', 'Estrategia actualizada correctamente.'); // Redirigir a index
    }

    // Elimina una estrategia
    public function destroy($idestrategia)
    {
        $estrategia = Estrategia::findOrFail($idestrategia); // Buscar la estrategia por ID
        $estrategia->delete(); // Eliminar estrategia
        return redirect()->route('estrategias.index')->with('success', 'Estrategia eliminada correctamente.'); // Redirigir a index
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\TipoActivo; // Asegúrate de importar tu modelo
use Illuminate\Http\Request;

class TipoActivoController extends Controller
{
    // Muestra la lista de tipos de activos
    public function index()
    {
        $tiposActivos = TipoActivo::all(); // Obtener todos los tipos de activos
        return view('TiposActivo.index', compact('tiposActivos')); // Pasar datos a la vista
    }

    // Muestra el formulario para crear un nuevo tipo de activo
    public function create()
    {
        return view('TiposActivo.create'); // Retornar vista de creación
    }

    // Almacena un nuevo tipo de activo
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:18',
            'definicion' => 'required|max:18',
        ]);

        TipoActivo::create($request->all()); // Crear nuevo tipo de activo
        return redirect()->route('tipos-activo.index')->with('success', 'Tipo de Activo creado correctamente.'); // Redirigir a index
    }

    // Muestra el formulario para editar un tipo de activo existente
    public function edit($id)
    {
        $tipoActivo = TipoActivo::findOrFail($id); // Buscar el tipo de activo por ID
        return view('TiposActivo.edit', compact('tipoActivo')); // Retornar vista de edición
    }

    // Actualiza un tipo de activo existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:18',
            'definicion' => 'required|max:18',
        ]);

        $tipoActivo = TipoActivo::findOrFail($id); // Buscar el tipo de activo por ID
        $tipoActivo->update($request->all()); // Actualizar tipo de activo
        return redirect()->route('tipos-activo.index')->with('success', 'Tipo de Activo actualizado correctamente.'); // Redirigir a index
    }

    // Elimina un tipo de activo
    public function destroy($id)
    {
        $tipoActivo = TipoActivo::findOrFail($id); // Buscar el tipo de activo por ID
        $tipoActivo->delete(); // Eliminar tipo de activo
        return redirect()->route('tipos-activo.index')->with('success', 'Tipo de Activo eliminado correctamente.'); // Redirigir a index
    }
}
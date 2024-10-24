<?php

namespace App\Http\Controllers;

use App\Models\Amenaza;
use Illuminate\Http\Request;

class AmenazaController extends Controller
{
    // Mostrar todas las amenazas
    public function index()
    {
        $amenazas = Amenaza::all();
        return view('Amenaza.index', compact('amenazas'));
    }

    // Mostrar formulario para crear nueva amenaza
    public function create()
    {
        return view('Amenaza.create');
    }

    // Almacenar una nueva amenaza
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:18',
        ]);

        Amenaza::create($request->all());

        return redirect()->route('amenazas.index')
                        ->with('success', 'Amenaza creada correctamente.');
    }

    // Mostrar una amenaza específica
    public function show($idamenaza)
    {
        $amenaza = Amenaza::findOrFail($idamenaza);
        return view('amenazas.show', compact('amenaza'));
    }

    // Mostrar formulario para editar una amenaza específica
    public function edit($idamenaza)
    {
        $amenaza = Amenaza::findOrFail($idamenaza);
        return view('Amenaza.edit', compact('amenaza'));
    }

    // Actualizar una amenaza específica
    public function update(Request $request, $idamenaza)
    {
        $request->validate([
            'nombre' => 'required|max:18',
        ]);

        $amenaza = Amenaza::findOrFail($idamenaza);
        $amenaza->update($request->all());

        return redirect()->route('amenazas.index')
                        ->with('success', 'Amenaza actualizada correctamente.');
    }

    // Eliminar una amenaza específica
    public function destroy($idamenaza)
    {
        $amenaza = Amenaza::findOrFail($idamenaza);
        $amenaza->delete();

        return redirect()->route('amenazas.index')
                        ->with('success', 'Amenaza eliminada correctamente.');
    }
}
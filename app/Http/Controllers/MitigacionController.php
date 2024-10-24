<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitigacion;

class MitigacionController extends Controller
{
    public function index()
    {
        $mitigaciones = Mitigacion::all();
        return view('Mitigacion.index', compact('mitigaciones'));
    }

    public function create()
    {
        return view('Mitigacion.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'actividad' => 'required|max:255',
        ]);

        Mitigacion::create($request->all());
        return redirect()->route('mitigaciones.index')->with('success', 'Mitigación creada con éxito.');
    }

    public function show($id)
    {
        $mitigacion = Mitigacion::findOrFail($id);
        return view('Mitigacion.show', compact('mitigacion'));
    }

    public function edit($id)
    {
        $mitigacion = Mitigacion::findOrFail($id);
        return view('Mitigacion.edit', compact('mitigacion'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'actividad' => 'required|max:255',
        ]);

        $mitigacion = Mitigacion::findOrFail($id);
        $mitigacion->update($request->all());
        return redirect()->route('mitigaciones.index')->with('success', 'Mitigación actualizada con éxito.');
    }

    public function destroy($id)
    {
        $mitigacion = Mitigacion::findOrFail($id);
        $mitigacion->delete();
        return redirect()->route('mitigaciones.index')->with('success', 'Mitigación eliminada con éxito.');
    }
}
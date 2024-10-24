<?php

namespace App\Http\Controllers;

use App\Models\Controles;
use Illuminate\Http\Request;

class ControlesController extends Controller
{
    public function index()
    {
        $controles = Controles::all();
        return view('Controles.index', compact('controles'));
    }

    public function create()
    {
        return view('Controles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'control' => 'required|string|max:255',
            'tipo_control' => 'required|string|max:255'
        ]);

        Controles::create($request->all());

        return redirect()->route('controles.index')->with('success', 'Control creado exitosamente.');
    }

    public function show($id)
    {
        $control = Controles::find($id);
        return view('Controles.show', compact('control'));
    }

    public function edit($id)
    {
        $control = Controles::find($id);
        return view('Controles.edit', compact('control'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'control' => 'required|string|max:255',
            'tipo_control' => 'required|string|max:255'
        ]);

        $control = Controles::find($id);
        $control->update($request->all());

        return redirect()->route('controles.index')->with('success', 'Control actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $control = Controles::find($id);
        $control->delete();

        return redirect()->route('controles.index')->with('success', 'Control eliminado exitosamente.');
    }
}
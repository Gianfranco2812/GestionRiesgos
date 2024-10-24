@extends('layouts.app')

@section('content')
<div class="section-header" style="box-shadow: 5px 5px 15px gray;">
    <h1>Controles</h1>
</div>

    
    <a href="{{ route('controles.create') }}" class="btn btn-primary">Crear Nuevo Control</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Control</th>
                <th>Tipo Control</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($controles as $control)
                <tr>
                    <td>{{ $control->idcontrol }}</td>
                    <td>{{ $control->control }}</td>
                    <td>{{ $control->tipo_control }}</td>
                    <td>
                        <a href="{{ route('controles.edit', $control->idcontrol) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('controles.destroy', $control->idcontrol) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
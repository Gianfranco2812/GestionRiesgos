@extends('layouts.app')

@section('content')    
<div class="section-header" style="box-shadow: 5px 5px 15px gray;">
    <h1>Mitigaciones</h1>
</div>

    <a href="{{ route('mitigaciones.create') }}" class="btn btn-primary mb-3">Crear nueva Mitigación</a>

    @if ($mitigaciones->isEmpty())
        <p>No hay mitigaciones registradas.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Actividad de Mitigación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mitigaciones as $mitigacion)
                    <tr>
                        <td>{{ $mitigacion->idmitigacion }}</td>
                        <td>{{ $mitigacion->actividad }}</td>
                        <td>
                            <a href="{{ route('mitigaciones.edit', $mitigacion->idmitigacion) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('mitigaciones.destroy', $mitigacion->idmitigacion) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
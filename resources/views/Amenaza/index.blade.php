@extends('layouts.app')

@section('content')
<div class="section-header" style="box-shadow: 5px 5px 15px gray;">
    <h1>Amenazas</h1>
</div>

    
    <a href="{{ route('amenazas.create') }}" class="btn btn-primary mb-3">Crear nueva Amenaza</a>

    @if ($amenazas->isEmpty())
        <p>No hay amenazas registradas.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre de la Amenaza</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($amenazas as $amenaza)
                    <tr>
                        <td>{{ $amenaza->idamenaza }}</td>
                        <td>{{ $amenaza->nombre }}</td>
                        <td>
                            <a href="{{ route('amenazas.edit', $amenaza->idamenaza) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('amenazas.destroy', $amenaza->idamenaza) }}" method="POST" style="display:inline-block;">
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
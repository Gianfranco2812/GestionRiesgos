@extends('layouts.app')

@section('title', 'Tipos de activo') <!-- Cambia el título dinámicamente -->

@section('content')
<div class="section-header" style="box-shadow: 5px 5px 15px gray;">
    <h1>Activos</h1>
</div>

<div class="container">
    <a href="{{ route('tipos-activo.create') }}" class="btn btn-primary">Crear Tipo de Activo</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Definición</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tiposActivos as $tipo)
            <tr>
                <td>{{ $tipo->idtipoactivo }}</td>
                <td>{{ $tipo->nombre }}</td>
                <td>{{ $tipo->definicion }}</td>
                <td>
                    <a href="{{ route('tipos-activo.edit', $tipo->idtipoactivo) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('tipos-activo.destroy', $tipo->idtipoactivo) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
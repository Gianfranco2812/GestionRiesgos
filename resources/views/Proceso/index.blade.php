@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section-header" style="box-shadow: 5px 5px 15px gray;">
        <h1>Procesos</h1>
    </div>

    <a href="{{ route('procesos.create') }}" class="btn btn-primary">Agregar Proceso</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($procesos as $proceso)
                <tr>
                    <td>{{ $proceso->idproceso }}</td>
                    <td>{{ $proceso->nombre }}</td>
                    <td>
                        <a href="{{ route('procesos.edit', $proceso->idproceso) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('procesos.destroy', $proceso->idproceso) }}" method="POST" style="display:inline;">
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
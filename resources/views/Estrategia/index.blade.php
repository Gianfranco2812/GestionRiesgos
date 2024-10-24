@extends('layouts.app')

@section('content')
<div class="section-header" style="box-shadow: 5px 5px 15px gray;">
    <h1>Estrategias</h1>
</div>
    <div class="container">
        <a href="{{ route('estrategias.create') }}" class="btn btn-primary">Crear Estrategia</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Estrategia de Mitigación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($estrategias as $estrategia)
                    <tr>
                        <td>{{ $estrategia->id }}</td>
                        <td>{{ $estrategia->estrategia_mitigacion }}</td>
                        <td>
                            <a href="{{ route('estrategias.edit', $estrategia->idestrategia) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('estrategias.destroy', $estrategia->idestrategia) }}" method="POST" style="display:inline;">
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

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section-header" style="box-shadow: 5px 5px 15px gray;">
        <h1>Editar Proceso</h1>
    </div>

    <form action="{{ route('procesos.update', $proceso->idproceso) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $proceso->nombre }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
        <a href="{{ route('procesos.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
    </form>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section-header" style="box-shadow: 5px 5px 15px gray;">
        <h1>Editar Tipo de Activo</h1>
    </div>
    
    <form action="{{ route('tipos-activo.update', $tipoActivo) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $tipoActivo->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="definicion" class="form-label">Definición</label>
            <input type="text" class="form-control" id="definicion" name="definicion" value="{{ $tipoActivo->definicion }}" required>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
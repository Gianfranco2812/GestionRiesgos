@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section-header" style="box-shadow: 5px 5px 15px gray;">
        <h1>Crear tipo de activo</h1>
    </div>
    
    <form action="{{ route('tipos-activo.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" required>
        </div>
        <div class="form-group">
            <label for="definicion">Definición</label>
            <input type="text" class="form-control" name="definicion" id="definicion" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('tipos-activo.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section-header" style="box-shadow: 5px 5px 15px gray;">
        <h1>Agregar Proceso</h1>
    </div>

    <form action="{{ route('procesos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Guardar</button>
        <a href="{{ route('procesos.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
    </form>
</div>
@endsection
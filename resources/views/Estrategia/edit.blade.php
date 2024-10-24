@extends('layouts.app')

@section('content')
<div class="section-header" style="box-shadow: 5px 5px 15px gray;">
    <h1>Editar Estrategia</h1>
</div>
    <div class="container">
        <form action="{{ route('estrategias.update', $estrategia->idestrategia) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="estrategia_mitigacion">Estrategia de Mitigación</label>
                <input type="text" name="estrategia_mitigacion" class="form-control" value="{{ $estrategia->estrategia_mitigacion }}" required maxlength="18">
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>
@endsection

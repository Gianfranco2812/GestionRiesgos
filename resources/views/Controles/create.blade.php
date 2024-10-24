@extends('layouts.app')

@section('content')
<div class="section-header" style="box-shadow: 5px 5px 15px gray;">
    <h1>Crear Nuevo Control</h1>
</div>

    

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('controles.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="control">Control</label>
            <input type="text" name="control" class="form-control">
        </div>
        <div class="form-group">
            <label for="tipo_control">Tipo Control</label>
            <input type="text" name="tipo_control" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
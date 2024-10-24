@extends('layouts.app')

@section('content')
<div class="section-header" style="box-shadow: 5px 5px 15px gray;">
    <h1>Crear Amenaza</h1>
</div>
    <form action="{{ route('amenazas.store') }}" method="POST">
        @csrf

        <table class="table table-bordered">
            <tr>
                <th>Nombre de la Amenaza</th>
                <td><input type="text" name="nombre" class="form-control" required></td>
            </tr>
        </table>

        <button type="submit" class="btn btn-success">Crear</button>
        <a href="{{ route('amenazas.index') }}" class="btn btn-secondary">Volver</a>
    </form>
@endsection
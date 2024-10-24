@extends('layouts.app')

@section('content')
<div class="section-header" style="box-shadow: 5px 5px 15px gray;">
    <h1>Crear Mitigación</h1>
</div>
    
    <form action="{{ route('mitigaciones.store') }}" method="POST">
        @csrf

        <table class="table table-bordered">
            <tr>
                <th>Actividad de Mitigación</th>
                <td><input type="text" name="actividad" class="form-control" required></td>
            </tr>
        </table>

        <button type="submit" class="btn btn-success">Crear</button>
        <a href="{{ route('mitigaciones.index') }}" class="btn btn-secondary">Volver</a>
    </form>
@endsection
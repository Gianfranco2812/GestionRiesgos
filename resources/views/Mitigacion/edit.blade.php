@extends('layouts.app')

@section('content')
<div class="section-header" style="box-shadow: 5px 5px 15px gray;">
    <h1>Editar Mitigación</h1>
</div>


    <form action="{{ route('mitigaciones.update', $mitigacion->idmitigacion) }}" method="POST">
        @csrf
        @method('PUT')

        <table class="table table-bordered">
            <tr>
                <th>Actividad de Mitigación</th>
                <td><input type="text" name="actividad" value="{{ $mitigacion->actividad }}" class="form-control" required></td>
            </tr>
        </table>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('mitigaciones.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
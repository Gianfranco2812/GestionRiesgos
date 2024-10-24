@extends('layouts.app')

@section('content')
<div class="section-header" style="box-shadow: 5px 5px 15px gray;">
    <h1>Editar Amenaza</h1>
</div>



    <form action="{{ route('amenazas.update', $amenaza->idamenaza) }}" method="POST">
        @csrf
        @method('PUT')

        <table class="table table-bordered">
            <tr>
                <th>Nombre de la Amenaza</th>
                <td><input type="text" name="nombre" value="{{ $amenaza->nombre }}" class="form-control" required></td>
            </tr>
        </table>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('amenazas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
@extends('adminlte::page')

@section('title', 'CRUD de Estudiantes de EFPEM')

@section('content_header')
    <h1>Listado de Estudiantes de EFPEM</h1>
@stop

@section('content')
<a href="estudiantes/create" class="btn btn-primary">Insertar</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</Th>
            <th scope="col">Nombre</Th>
            <th scope="col">Carrera</Th>
            <th scope="col">Estatura</Th>
            <th scope="col">Edad</Th>
            <th scope="col">Acciones</Th>
        </tr>
    </thead>
    <tbody>
        @foreach ($estudiantes as $estudiante)
        <tr>
            <td>{{ $estudiante->id}}</td>
            <td>{{ $estudiante->nombre}}</td>
            <td>{{ $estudiante->carrera}}</td>
            <td>{{ $estudiante->estatura}}</td>
            <td>{{ $estudiante->edad}}</td>
            <td>
            <form action="{{ route('estudiantes.destroy',$estudiante->id) }}" method="POST">
                <a href="/estudiantes/{{$estudiante->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Borrar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
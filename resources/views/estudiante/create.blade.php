@extends('adminlte::page')

@section('title', 'Insertar estudiantes')

@section('content_header')
    <h1>Insertar Estudiantes</h1>
@stop

@section('content')
<form action="/estudiantes" method="POST">
@csrf
  <div class="mb-3">
    <label for="" class="form-label">ID</label>
    <input id="id" name="id" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Carrera</label>
    <input id="carrera" name="carrera" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Estatura</label>
    <input id="estatura" name="estatura" type="number" step="any" value="0.00" class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Edad</label>
    <input id="edad" name="edad" type="text" class="form-control" tabindex="5">
  </div>
  <a href="/estudiantes" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
@extends("../layouts/plantilla")
@section("cabecera")
@section("contenido")

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<br>
<div class="col">
  <a href="{{ url('/') }}" class="btn btn-dark">Inicio</a>
</div>
<body>
<div class="container">
<br>
<div class="row">
  <div class="col order-5">
    <a href="{{route('productos.create')}}" class="btn btn-success">Añadir Productos</a>
  </div>
</div>
<div class="text-center">
<h1>Detalles de Productos</h1>
</div>
<div class="container">
<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      <th scope="col">Contenido</th>
      <th scope="col">Editar Regristro</th>
    </tr>
    @foreach($productos as $producto)
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$producto->Nombre}}</th>
      <td>{{$producto->Descripcion}}</td>
      <td>{{$producto->Precio}}</td>
      <td>{{$producto->Contenido}}</td>
      <td><button type="button" class="btn btn-light"><a href="{{route('productos.edit', $producto->id)}}">Editar</button</a></td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>
@section("pie")
</div>
</body>



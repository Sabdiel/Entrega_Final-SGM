@extends("../layouts/plantilla")
@section("cabecera")
@section("contenido")

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<body>

<div class="container">
<center><h1>Detalles de Productos</h1></center>
</div>
<div class="container text-center">
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
</body>



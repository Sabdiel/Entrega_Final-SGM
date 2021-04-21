@extends("../layouts/plantilla")
@section("cabecera")
@section("contenido")

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<body>
<div class="container">
<center><h1>Detalles</h1></center>
<div class="row">
<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">Estatus</th>
      <th scope="col">ID del Cliente</th>
      <th scope="col">ID del Vendedor</th>
      <th scope="col">Editar Registro</th>
    </tr>
    @foreach($pedidos as $pedido)
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$pedido->Estatus}}</th>
      <td>{{$pedido->id_cliente}}</td>
      <td>{{$pedido->id_vendedor}}</td>
      <td><button type="button" class="btn btn-light"><a href="{{route('pedidos.edit', $pedido->id)}}">Editar</button</a></td>
    </tr>
  </tbody>
  @endforeach
</table>
@section("pie")
</body>
</div>
</div>


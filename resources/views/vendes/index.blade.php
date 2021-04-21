@extends("../layouts/plantilla")
@section("cabecera")
@section("contenido")

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<body>
<div class="container" >
<h1 class="text-center">Detalles</h1>
</div>
<div class="container text-center">
<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Editar Registro</th>
    </tr>
    @foreach($vendes as $vende)
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$vende->Nombre}}</th>
      <td>{{$vende->Apellido_Paterno}}</td>
      <td>{{$vende->Apellido_Materno}}</td>
      <td><button type="button" class="btn btn-light"><a href="{{route('vendes.edit', $vende->id)}}">Editar</button</a></td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>
@section("pie")
</body>
</div>
</div>
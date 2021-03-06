@extends("../layouts/plantilla")
@section("cabecera")
@section("contenido")

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<body>
<div class="container">
<center><h1>Actualizar</h1></center>
<div class="row">

<form method="post" action="/clientes/{{$cliente->id}}">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre del Cliente</label><br>
    <input type="text" name="Nombre" value="{{$cliente->Nombre}}" class="form-control">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Apellido Paterno</label><br>
    <input type="text" name="Apellido_Paterno" value="{{$cliente->Apellido_Paterno}}" class="form-control">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Apellido Materno</label><br>
    <input type="text" name="Apellido_Materno" value="{{$cliente->Apellido_Materno}}" class="form-control">
  </div>
  {{csrf_field()}}

  <input type="hidden" name="_method" value="PUT">
  <br><button type="submit" class="btn btn-success" name="Enviar" value="Enviar">Actualizar</button>
  </form>

  <form method="post" action="{{ url('/clientes/'.$cliente->id) }}">
        {{csrf_field() }}
        {{ method_field('Delete') }}
        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Eliminar Cliente?')">Eliminar</button>
        </form>

  @section("pie")

</body>
</div>
</div>


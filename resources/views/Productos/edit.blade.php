@extends("../layouts/plantilla")
@section("cabecera")
@section("contenido")

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<body>
<div class="container">
<center><h1>Actualizar</h1></center>
<div class="row">

<form method="post" action="/productos/{{$producto->id}}">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre del Producto</label><br>
    <input type="text" name="Nombre" value="{{$producto->Nombre}}" class="form-control">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Descripcion del Producto</label><br>
    <input type="text" name="Descripcion" value="{{$producto->Descripcion}}" class="form-control">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Precio del Producto</label><br>
    <input type="text" name="Precio" value="{{$producto->Precio}}" class="form-control">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Contenido del Producto</label><br>
    <input type="text" name="Contenido" value="{{$producto->Contenido}}" class="form-control">
  </div>
  {{csrf_field()}}

  <input type="hidden" name="_method" value="PUT">
  <br><button type="submit" class="btn btn-primary" name="Enviar" value="Enviar">Actualizar</button>
  </form>

  <form method="post" action="{{ url('/productos/'.$producto->id) }}">
        {{csrf_field() }}
        {{ method_field('Delete') }}
        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Eliminar Producto?')">Eliminar</button>
        </form>
  @section("pie")

</body>
</div>
</div>

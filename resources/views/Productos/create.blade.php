@extends("../layouts/plantilla")
@section("cabecera")
@section("contenido")

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<body>
<div class="container">
<center><h1>Formulario de Productos</h1></center>
<div class="row">

<form method="post" action="/productos">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre del Producto</label><br>
    <input type="text" name="Nombre" class="form-control">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Descripcion del Producto</label><br>
    <input type="text" name="Descripcion" class="form-control">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Precio del Producto</label><br>
    <input type="text" name="Precio" class="form-control">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Contenido del Producto</label><br>
    <input type="text" name="Contenido" class="form-control">
  </div>
  {{csrf_field()}}
  <br><button type="submit" class="btn btn-dark" name="Enviar" value="Enviar" href="{{route('productos.create')}}">Enviar</button>
  
</form>

</body>
</div>
</div>

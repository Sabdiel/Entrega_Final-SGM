@extends("../layouts/plantilla")
@section("cabecera")
@section("contenido")

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<body>
<div class="container">
<center><h1>Agregar Vendedor</h1></center>
<div class="row">

<form method="post" action="/vendes">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label><br>
    <input type="text" name="Nombre" class="form-control">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Apellido Paterno</label><br>
    <input type="text" name="Apellido_Paterno" class="form-control">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Apellido Materno</label><br>
    <input type="text" name="Apellido_Materno" class="form-control">
  </div>
  {{csrf_field()}}
  <br><button type="submit" class="btn btn-dark" name="Enviar" value="Enviar">Enviar</button>

</form>
</body>
</div>
</div>

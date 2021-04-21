@extends("../layouts/plantilla")
@section("cabecera")
@section("contenido")

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<body>

<div class="container">
<label><h1>Formulario de Pedidos</h1></label>

<div class="row">

<form method="post" action="/pedidos">
  <div class="form-group">
    <label for="Estatus">Estatus</label><br>
    <input type="text" name="Estatus" class="form-control">
  </div>
  <div class="form-group">
    <label for="Fecha_pedido">Fecha del pedido</label><br>
    <input type="date" name="Fecha_pedido" class="form-control">
  </div>

  <div class="form-group">
    <label for="Fecha_envio">Fecha de Envío</label><br>
    <input type="date" name="Fecha_envio" class="form-control">
  </div>
  <div class="form-group">
    <label for="ID_Cliente">Identificacion del cliente</label><br>
    <input type="text" name="id_cliente" class="form-control">
  </div>

  <div class="form-group">
    <label for="ID_Vendedor">Identificacion del vendedor</label><br>
    <input type="text" name="id_vendedor" class="form-control">
  </div>
  {{csrf_field()}}
  <br><button type="submit" class="btn btn-dark" name="Enviar" value="Enviar">Enviar</button>

</form>
</div>
</div>
</body>
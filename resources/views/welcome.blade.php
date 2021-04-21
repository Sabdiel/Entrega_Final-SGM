

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>

<body>
    <div class="jumbotron jumbotron-fluid text-center" style="background-color: rgba(0, 0, 0, 0.1);">
        <div class="container">
            <h1 class="display-4">Tienda</h1>
            <p class="lead">Esta es una aplicacion sencilla de una tienda en laravel</p>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row bg-dark">
            <div class="col">
                <br>
                <div class="text-center">
                    <img src="https://cdn3.iconfinder.com/data/icons/prettycons-user-interface-vol-1-outline/60/039-Products-interface_browser_interaction_user_internet-512.png" class="img-thumbnail">
                </div>
                <br>
                <div class="text-center">

                    <a href="{{route('productos.index')}}" class="btn btn-primary">Productos</a>
                </div>
                <br>
                <div class="text-center">
                    <a href="{{route('productos.create')}}" class="btn btn-success">Añadir Productos</a>
                </div>
                <br>
            </div>
            <div class="col">
                <br>
                <div class="text-center">
                    <img src="https://cdn0.iconfinder.com/data/icons/customer-support-18/50/Customer_Support-27-512.png" class="img-thumbnail">
                </div>
                <br>
                <div class="text-center">
                    <a href="{{route('vendes.index')}}" class="btn btn-primary">Vendedores</a>
                </div>
                <br>
                <div class="text-center">
                    <a href="{{route('vendes.create')}}" class="btn btn-success">Añadir Vendedores</a>
                </div>
                <br>
            </div>
            <div class="col">
                <br>
                <div class="text-center">
                    <img src="https://cdn2.iconfinder.com/data/icons/users-groups-2/64/x-08-512.png" class="img-thumbnail">
                </div>
                <br>
                <div class="text-center">
                    <a href="{{route('clientes.index')}}" class="btn btn-primary">Clientes</a>
                </div>
                <br>
                <div class="text-center">
                    <a href="{{route('clientes.create')}}" class="btn btn-success">Añadir Clientes</a>
                </div>
                <br>
            </div>
            <div class="col">
                <br>
                <div class="text-center">
                    <img src="https://cdn0.iconfinder.com/data/icons/logistics-butterscotch-vol-1/512/Order_Delivery-512.png" class="img-thumbnail">
                </div>
                <br>
                <div class="text-center">
                    <a href="{{route('pedidos.index')}}" class="btn btn-primary">Pedidos</a>
                </div>
                <br>
                <div class="text-center">
                    <a href="{{route('pedidos.create')}}" class="btn btn-success">Añadir Pedidos</a>
                </div>
                <br>
            </div>
        </div>
    </div>
</body>
<br>
<br>
<footer class="bg-light text-center text-lg-start">
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 SGM:
<br>
    <b class="text-dark" >Sabdiel Gutiérrez Mejía 8° A IDGS</b>
  </div>
</footer>
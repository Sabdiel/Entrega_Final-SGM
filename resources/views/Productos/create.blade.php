Añadir un nuevo producto
<form action="{{url('/productos')}}" method="POST">
{{csrf_field()}}
    <div class="input-group">
    <label for="Nombre_producto">{{'Nombre'}}</label>
        <input class="input--style-1" type="text" placeholder="nombre del producto" name="Nombre_producto" id="Nombre_producto" value="">
    </div>

    <div class="input-group">
    <label for="Tipo_producto">{{'Tipo'}}</label>
        <input class="input--style-1" type="text" placeholder="Tipo del producto" name="Tipo_producto" id="Tipo_producto" value="">
    </div>

    <div class="input-group">
    <label for="clave_producto">{{'Clave'}}</label>
        <input class="input--style-1" type="text" placeholder="Clave del producto" name="clave_producto" id="clave_producto" value="">
    </div>

    <div class="input-group">
        <input type="submit" placeholder="Agregar" value="Agregar">
    </div>

</form>
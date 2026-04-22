<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="{{route("purchases.store")}}" method="post">
        @csrf
        <label for="a1">Ingrese la cantidad de compra</label>
        <input type="number" name="cantidad" id="a1">
        <br>
        <select name="productos" id="">
            @foreach ($products as $product)
                <option value="{{$product->id}}">"{{$product->name}}"</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Guardar proveedor</button>
    </form>
    
    <h1>Listado de Proveedores</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Cantidad de compra</th>
                <th>Producto</th>
                <th>Usuario</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($purchases as $purchase)
                <tr>
                    <td>{{$purchase->id}}</td>
                    <td>{{$purchase->quantity}}</td>
                    <td>{{$purchase->product->name}}</td>
                    <td>{{$purchase->user->name}}</td>
                    <td>
                        <a href="{{route("purchases.edit", $purchase->id)}}" class = "btn btn-warning">Editar</a>
                        <form action="{{route("purchases.destroy", $purchase->id)}}" method="post">
                            @csrf
                            @method("delete")
                            <button type="submit" class = "btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
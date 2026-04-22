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
    <form action="{{route("products.store")}}" method="post">
        @csrf
        <label for="a1">Ingrese el Nombre del producto</label>
        <input type="text" name="nombre" id="a1">
        <br>
        <label for="a2">Ingrese el precio</label>
        <input type="number" name="precio" id="a2">
        <br>
        <select name="proveedores" id="">
            @foreach ($suppliers as $supplier)
                <option value="{{$supplier->id}}">"{{$supplier->name}}"</option>
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
                <th>Nombre</th>
                <th>Precio</th>
                <th>Proveedores</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->supplier->name}}</td>
                    <td>
                        <a href="{{route("products.edit", $product->id)}}" class = "btn btn-warning">Editar</a>
                        <form action="{{route("products.destroy", $product->id)}}" method="post">
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
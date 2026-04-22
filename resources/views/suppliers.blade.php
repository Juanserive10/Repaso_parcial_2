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
    <form action="{{route("suppliers.index")}}" method="post">
        @csrf
        <label for="a1">Ingrese el Nombre del proveedor</label>
        <input type="text" name="nombre" id="a1">
        <br>
        <label for="a2">Ingrese el email</label>
        <input type="email" name="email" id="a2">
        <br>
        <button type="submit">Guardar proveedor</button>
    </form>
    
    <h1>Listado de Proveedores</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suppliers as $supplier)
                <tr>
                    <td>{{$supplier->id}}</td>
                    <td>{{$supplier->name}}</td>
                    <td>{{$supplier->email}}</td>
                    <td>
                        <a href="{{route("suppliers.edit", $supplier->id)}}" class = "btn btn-warning">Editar</a>
                        <form action="{{route("suppliers.destroy", $supplier->id)}}" method="post">
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
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
    <form action="{{route("suppliers.update",$supplier->id)}}" method="post">
        @csrf
        @method("put")
        <label for="a1">Ingrese el Nombre del proveedor</label>
        <input type="text" name="nombre" id="a1" value = "{{$supplier->name}}">
        <br>
        <label for="a2">Ingrese el email</label>
        <input type="email" name="email" id="a2" value = "{{$supplier->email}}">
        <br>
        <button type="submit">Guardar proveedor</button>
    </form>
</body>
</html>
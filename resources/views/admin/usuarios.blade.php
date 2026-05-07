<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
</head>
<body>

<h1>Lista de Usuarios</h1>

<table border="1" cellpadding="10">

    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Rol</th>
    </tr>

    @foreach($usuarios as $usuario)

    <tr>
        <td>{{ $usuario->id }}</td>
        <td>{{ $usuario->name }}</td>
        <td>{{ $usuario->email }}</td>
        <td>{{ $usuario->rol }}</td>
    </tr>

    @endforeach

</table>

</body>
</html>
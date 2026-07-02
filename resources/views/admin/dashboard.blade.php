<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Panel Administrador</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

    <div class="admin-container">

        <h1>Panel Administrador</h1>

        <p>Bienvenido, {{ auth()->user()->name }}</p>

        <div class="admin-buttons">

            <a href="/usuarios" class="admin-btn">
                Ver Usuarios
            </a>

            <a href="/" class="admin-btn">
                Ir al Inicio
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout-btn">
                    Cerrar sesión
                </button>
            </form>

        </div>

    </div>

</body>

</html>

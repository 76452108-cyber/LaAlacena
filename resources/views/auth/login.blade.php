<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - La Alacena</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<div class="login-container">

    <div class="login-card">
        <h2>Iniciar Sesión</h2>
        <p>Bienvenido a La Alacena</p>

        <!-- ERRORES -->
        @if ($errors->any())
            <div class="error-box">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required>

            <label>Contraseña</label>
            <input type="password" name="password" required>

            <div class="remember">
                <input type="checkbox" name="remember"> Recordarme
            </div>

            <button type="submit">Ingresar</button>
        </form>

        <div class="extra-links">
            <a href="{{ route('register') }}">Crear cuenta</a>
        </div>
    </div>

</div>

</body>
</html>
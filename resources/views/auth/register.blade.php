<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - La Alacena</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<div class="login-container">

    <div class="login-card">
        <h2>Crear Cuenta</h2>
        <p>Únete a La Alacena</p>

        <!-- ERRORES -->
        @if ($errors->any())
            <div class="error-box">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label>Nombre</label>
            <input type="text" 
                   name="name" 
                   value="{{ old('name') }}" 
                   required>

            <label>Email</label>
            <input type="email" 
                   name="email" 
                   value="{{ old('email') }}" 
                   required>
            
            <label>Tipo de cuenta</label>
            <select name="rol" required>
                <option value="cliente">Cliente</option>
                <option value="restaurante">Restaurante</option>
            </select>

            <label>Contraseña</label>
            <input type="password" 
                   name="password" 
                   required>

            <label>Confirmar Contraseña</label>
            <input type="password" 
                   name="password_confirmation" 
                   required>

            <button type="submit">Registrarse</button>
        </form>

        <div class="extra-links">
            <a href="{{ route('login') }}">
                ¿Ya tienes cuenta? Inicia sesión
            </a>
        </div>

    </div>

</div>

</body>
</html>
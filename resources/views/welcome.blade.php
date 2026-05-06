<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Alacena</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <!-- NAVBAR -->
    <header class="navbar">
        <div class="logo">La Alacena</div>

        <input type="text" placeholder="Buscar comida o restaurante..." class="search">

        <nav>
            <a href="#">Inicio</a>
            <a href="#">Explorar</a>
            <a href="#">Pedidos</a>
            <a href="{{ route('login') }}">Login</a>
        </nav>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-text">
            <h1>Comida buena, a mejor precio</h1>
            <p>Evita el desperdicio y ahorra dinero en Arequipa</p>
            <button>Explorar ofertas</button>
        </div>
    </section>

    <!-- CATEGORÍAS -->
    <section class="categorias">
        <button>🍞 Panaderías</button>
        <button>🍛 Restaurantes</button>
        <button>🥦 Supermercados</button>
        <button>🍰 Postres</button>
    </section>

    <!-- PRODUCTOS -->
    <section class="productos">
        <h2>Ofertas disponibles</h2>

        <div class="grid">

            <div class="card">
                <img src="https://via.placeholder.com/300x200">
                <div class="card-body">
                    <h3>Panadería Don José</h3>
                    <p>Bolsa sorpresa de panes</p>

                    <div class="info">
                        <span class="precio">S/ 5.00</span>
                        <span class="stock">Stock: 5</span>
                    </div>

                    <button>Agregar</button>
                </div>
            </div>

            <div class="card">
                <img src="https://via.placeholder.com/300x200">
                <div class="card-body">
                    <h3>Restaurante Criollo</h3>
                    <p>Menú del día</p>

                    <div class="info">
                        <span class="precio">S/ 10.00</span>
                        <span class="stock">Stock: 3</span>
                    </div>

                    <button>Agregar</button>
                </div>
            </div>

        </div>
    </section>

</body>
</html>
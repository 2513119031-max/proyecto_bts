<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda BTS</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <header>
        <h1>Agregar Mercancía</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="mercancia.php">Catalogo</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Agregar nueva mercancía de BTS</h2>
            <form action="#" method="post">
                <label for="nombre">Nombre del producto:</label>
                <input type="text" name="nombre" id="nombre" required>
                <br>
                <label for="categoria">Categoria:</label>
                <input type="text" name="categoria" id="categoria" required>
                <br>
                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" required>
                <br><br>
                <button type="submit">Guardar producto</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2026 Tienda BTS pave the way</p>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda BTS - Agregar Mercancía</title>
</head>
<body>
    <header>
        <h1>Tienda BTS</h1>
        <nav>
            <a href="index.php">Inicio</a> |
            <a href="productos.php">Catálogo</a> |
            <a href="alta-producto.php">Agregar Producto</a>
        </nav>
    </header>

    <main>
        <section>
            <h2>Agregar nueva mercancía de BTS</h2>
            <form action="#" method="post">
                <label for="nombre">Nombre del producto:</label><br>
                <input type="text" name="nombre" id="nombre" required><br><br>

                <label for="categoria">Categoría:</label><br>
                <input type="text" name="categoria" id="categoria" required><br><br>

                <label for="precio">Precio:</label><br>
                <input type="number" name="precio" id="precio" required><br><br>

                <label for="stock">Stock:</label><br>
                <input type="number" name="stock" id="stock" required><br><br>

        
                <button type="submit">Guardar producto</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Tienda BTS - BTS pave the way</p>
    </footer>
</body>
</html>
<?php
// Leer datos del archivo JSON
$json_data = file_get_contents("../datos/datos.json");
$productos = json_decode($json_data, true);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda BTS - Mercancía</title>
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
        <h2>Catálogo de Productos BTS</h2>
        <a href="alta-producto.php">+ Agregar producto</a>
        <br><br>

        <?php foreach ($productos as $producto): ?>
            <section>
                <h3><?php echo $producto['nombre']; ?></h3>
                <p>Categoría: <?php echo $producto['categoria']; ?></p>
                <p>Precio: $<?php echo $producto['precio']; ?></p>
                <a href="producto-detalle.php?id=<?php echo $producto['id']; ?>">Ver detalle</a>
            </section>
            <hr>
        <?php endforeach; ?>
    </main>

    <footer>
        <p>&copy; 2026 Tienda BTS - BTS pave the way</p>
    </footer>
</body>
</html>
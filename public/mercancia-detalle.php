<?php
$id = $_GET['id'] ?? null;
$json_data = file_get_contents("../datos/datos.json");
$productos = json_decode($json_data, true);

$productoEncontrado = null;
if ($id) {
    foreach ($productos as $p) {
        if ($p['id'] == $id) {
            $productoEncontrado = $p;
            break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda BTS - Detalle del Producto</title>
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
        <?php if ($productoEncontrado): ?>
            <h2><?php echo $productoEncontrado['nombre']; ?></h2>
            <p><strong>Categoría:</strong> <?php echo $productoEncontrado['categoria']; ?></p>
            <p><strong>Precio:</strong> $<?php echo $productoEncontrado['precio']; ?></p>
            <p><strong>Stock disponible:</strong> <?php echo $productoEncontrado['stock']; ?> unidades</p>
            <p><strong>Imagen:</strong> <?php echo $productoEncontrado['imagen']; ?></p>
        <?php else: ?>
            <h2>Producto no encontrado</h2>
        <?php endif; ?>
        <br>
        <a href="productos.php">Volver al catálogo</a>
    </main>

    <footer>
        <p>&copy; 2026 Tienda BTS - BTS pave the way</p>
    </footer>
</body>
</html>
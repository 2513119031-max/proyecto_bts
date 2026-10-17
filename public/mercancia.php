<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda BTS - Catálogo</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <header>
        <h1>Productos</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="mercancia.php">Catalogo</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Catalogo</h2>
        <a href="alta-mercancia.php" class="boton-agregar">Agregar producto +</a>
        <section class="tarjetas-productos">
            <article>
                <img src="https://placehold.co/200x150" alt="Army Bomb Ver 4">
                <div class="tarjetas-productos-info">
                    <h3>Army Bomb Ver. 4</h3>
                    <p class="etiqueta-categoria">Categoria: Lightsticks</p>
                    <p class="texto-secundario">Lightstick oficial con conectividad Bluetooth para conciertos.</p>
                    <p class="tarjeta-producto-precio">Precio: $1200</p>
                    <a class="enlace-detalle" href="mercancia-detalle.php?id=1">Ver detalle</a>
                </div>
            </article>

            <article>
                <img src="https://placehold.co/200x150" alt="Álbum Proof">
                <div class="tarjetas-productos-info">
                    <h3>Álbum Proof (Standard)</h3>
                    <p class="etiqueta-categoria">Categoria: Álbumes</p>
                    <p class="texto-secundario">Edición de colección antológica con photobook y photocards.</p>
                    <p class="tarjeta-producto-precio">Precio: $1500</p>
                    <a class="enlace-detalle" href="mercancia-detalle.php?id=2">Ver detalle</a>
                </div>
            </article>

            <article>
                <img src="https://placehold.co/200x150" alt="Sudadera BT21 RJ">
                <div class="tarjetas-productos-info">
                    <h3>Sudadera BT21 RJ</h3>
                    <p class="etiqueta-categoria">Categoria: Ropa</p>
                    <p class="texto-secundario">Sudadera oficial de felpa personaje RJ por Jin.</p>
                    <p class="tarjeta-producto-precio">Precio: $850</p>
                    <a class="enlace-detalle" href="mercancia-detalle.php?id=3">Ver detalle</a>
                </div>
            </article>

            <article>
                <img src="https://placehold.co/200x150" alt="Photocards Set">
                <div class="tarjetas-productos-info">
                    <h3>Set Photocards MOTS</h3>
                    <p class="etiqueta-categoria">Categoria: Coleccionables</p>
                    <p class="texto-secundario">Colección especial de tarjetas exclusivas de la era MOTS.</p>
                    <p class="tarjeta-producto-precio">Precio: $350</p>
                    <a class="enlace-detalle" href="mercancia-detalle.php?id=4">Ver detalle</a>
                </div>
            </article>
        </section>
    </main>
    <footer>
        <p>&copy; 2026 Tienda BTS pave the way</p>
    </footer>
</body>
</html>
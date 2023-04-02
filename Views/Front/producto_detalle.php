<?php
include '../../Templates/componentes.php';
echo generarHead('Nombre del producto');
?>


<body>

<!--PHP Component-->
<?php echo generarHeader(); ?>


<main class="container mx-auto my-6">
<h1 class="text-white text-3xl font-bold mb-6">Bienvenido a Farmacia XYZ</h1>

<!-- Lista de productos -->
<ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <li class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="https://via.placeholder.com/500x500" alt="Producto 1" class="w-full">
        <div class="p-4">
            <h2 class="font-bold text-xl mb-2">Producto 1</h2>
            <p class="text-gray-700">Descripción del producto 1.</p>
            <p class="text-gray-700 font-bold mt-2">$20.00</p>
            <form action="agregar_carrito.php" method="POST">
                <input type="hidden" name="producto_id" value="1">
                <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Agregar al carrito</button>
            </form>
        </div>
    </li>
    <li class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="https://via.placeholder.com/500x500" alt="Producto 2" class="w-full">
        <div class="p-4">
            <h2 class="font-bold text-xl mb-2">Producto 2</h2>
            <p class="text-gray-700">Descripción del producto 2.</p>
            <p class="text-gray-700 font-bold mt-2">$30.00</p>
            <form action="agregar_carrito.php" method="POST">
                <input type="hidden" name="producto_id" value="1">
                <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Agregar al carrito</button>
            </form>
        </div>
    </li>
</ul>
</main>

<!--PHP Component-->
<?php
echo generarFooter();
?>
</body>


<?php
include 'Templates/componentes.php';
echo generarHead('Suprafarma | Farmacia Online');
?>
<body class="bg-stone-900">
	<!-- Header -->
	<header class="bg-stone-800 py-3">
		<div class="container mx-auto flex justify-between items-center px-6">
			<a href="#" class="text-gray-100 font-bold text-xl">Suprafarma</a>
			<nav>
				<ul class="flex items-center text-gray-100">
					<li><a href="#" class="hover:text-gray-400 px-3 py-2"><i class="fa-solid fa-house fa-sm"></i> Inicio</a></li>
					<li><a href="#" class="hover:text-gray-400 px-3 py-2"><i class="fa-solid fa-users fa-sm"></i> Sobre nosotros</a></li>
					<li><a href="#" class="hover:text-gray-400 px-3 py-2"><i class="fa-solid fa-phone fa-sm"></i> Contacto</a></li>
					<li><a href="Views/Front/ingresar.php" class="hover:text-gray-400 px-3 py-2"><i class="fa-solid fa-right-to-bracket fa-sm"></i> Iniciar Sesión</a></li>
					<li><a href="Views/Front/carrito.php" class="hover:text-gray-400 px-3 py-2"><i class="fa-solid fa-cart-shopping fa-sm"></i> Mi carrito</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<nav class="bg-stone-700 p-4">
		<div class="flex items-center justify-initial">
			<div class="flex items-center">
				<select class="ml-4 py-2 px-3 rounded-lg shadow-md text-gray-600 font-medium">
					<option value="">Selecciona una categoría</option>
					<option value="1">Medicamentos</option>
					<option value="2">Cuidado personal</option>
					<option value="3">Salud sexual</option>
					<option value="4">Suplementos alimenticios</option>
				</select>
			</div>
			<div class="flex">
				<a class="text-white py-2 px-3 rounded-lg hover:bg-blue-600" href="#"><i class="fa-solid fa-hands-bubbles fa-sm"></i> Cuidado Personal</a>
				<a class="text-white py-2 px-3 rounded-lg hover:bg-blue-600" href="#"><i class="fa-solid fa-person-breastfeeding fa-sm"></i> Mamá & Bebé</a>
				<a class="text-white py-2 px-3 rounded-lg hover:bg-blue-600" href="#"><i class="fa-solid fa-pump-soap fa-sm"></i> Dermocosmetica</a>
				<a class="text-white py-2 px-3 rounded-lg hover:bg-blue-600" href="#"><i class="fa-solid fa-heart-pulse fa-sm"></i> Bienestar</a>
			</div>
		</div>
	</nav>


<!-- Main -->
<main class="container mx-auto my-6">
	<!-- Título -->
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
<?php
echo generarFooter();
?>
				

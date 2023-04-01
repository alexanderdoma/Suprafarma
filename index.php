<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Farmacia XYZ</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<header class="bg-green-800 sticky top-0 z-50 shadow">
		<div class="container mx-auto flex justify-between items-center px-2 py-2">
			<div class="flex items-center justify-center">
				<img src="http://localhost/Suprafarma/public/assets/img/icon.svg" alt="Icono de suprafarma" class="w-12 h-12">
				<a href="http://localhost/Suprafarma" class="text-gray-100 font-bold text-xl  ml-2">Suprafarma</a>
			</div>
			<nav>
				<ul class="flex items-center text-gray-100">
					<li><a href="#" class="hover:text-gray-400 px-3 py-2"><i class="fa-solid fa-house fa-sm"></i> Inicio</a></li>
					<li><a href="#" class="hover:text-gray-400 px-3 py-2"><i class="fa-solid fa-phone fa-sm"></i> Contacto</a></li>
					<li><a href="#" class="hover:text-gray-400 px-3 py-2"><i class="fa-solid fa-users fa-sm"></i> Sobre nosotros</a></li>
					<li><a href="http://localhost/Suprafarma/Views/Front/ingresar.php" class="hover:text-gray-400 px-3 py-2"><i class="fa-solid fa-right-to-bracket fa-sm"></i> Iniciar sesión</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="bg-green-500">
		<div class="container mx-auto flex justify-intial items-center py-2">
			<nav>
				<div class="flex items-center">
					<div class="flex items-center">
						<select class="ml-4 py-2 px-3 text-gray-600 font-medium">
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
						<a class="text-white py-2 px-3 rounded-lg hover:bg-blue-600" href="#"><i class="fa-solid fa-pump-soap fa-sm"></i> Dermocosmética</a>
						<a class="text-white py-2 px-3 rounded-lg hover:bg-blue-600" href="#"><i class="fa-solid fa-heart-pulse fa-sm"></i> Bienestar</a>
					</div>
				</div>
			</nav>
			<div>
				<input type="text" placeholder="Buscar producto" class="text-white ml-5 py-1 px-3 w-56 focus:outline-none focus:bg-white focus:text-gray-900 transition-colors duration-300">
				<button class="bg-green-300 text-white py-1 px-4 hover:bg-green-600"><i class="fa-solid fa-magnifying-glass fa-sm"></i> Buscar</button>
			</div>
		</div>	
	</div>

	<!-- Main -->
	<main class="container mx-auto my-6">
		<!-- Título -->
		<h1 class="text-3xl font-bold mb-6">Bienvenido a Farmacia XYZ</h1>

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
				

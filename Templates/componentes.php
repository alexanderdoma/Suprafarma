<?php
function generarHeader(){
    return '
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
    ';
}

function generarHead($Titulo){
    return '
    <!DOCTYPE html>
    <html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>'. $Titulo . '</title>
    </head>
    ';
}
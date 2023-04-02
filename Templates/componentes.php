<?php
function generarHead($titulo){
    return '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <script src="https://cdn.tailwindcss.com"></script>
            <title>' . $titulo . '</title>
        </head>
    ';
}

function generarHeader(){
    return '
    <header class="bg-stone-800 py-3">
		<div class="container mx-auto flex justify-between items-center px-6">
			<a href="#" class="text-gray-100 font-bold text-xl">Farmacia XYZ</a>
			<nav>
				<ul class="flex items-center text-gray-100">
					<li><a href="#" class="hover:text-gray-400 px-3 py-2">Inicio</a></li>
					<li><a href="#" class="hover:text-gray-400 px-3 py-2"></a></li>
					<li><a href="#" class="hover:text-gray-400 px-3 py-2">Contacto</a></li>
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
				<a class="text-white py-2 px-3 rounded-lg hover:bg-blue-600" href="#">Cuidado Personal</a>
				<a class="text-white py-2 px-3 rounded-lg hover:bg-blue-600" href="#">Mamá & Bebé</a>
				<a class="text-white py-2 px-3 rounded-lg hover:bg-blue-600" href="#">Dermocosmetica</a>
				<a class="text-white py-2 px-3 rounded-lg hover:bg-blue-600" href="#">Bienestar</a>
			</div>
		</div>
	</nav>
    ';
}

function generarFooter(){
    return '
        <footer class="bg-stone-800 text-white py-4">
            <div class="container mx-auto flex justify-between items-center">
            <p class="text-sm">© 2023 Suprafarma. Todos los derechos reservados.</p>
            <ul class="flex space-x-4">
                <li><a href="#" class="text-white hover:text-gray-400">Aviso de privacidad</a></li>
                <li><a href="#" class="text-white hover:text-gray-400">Términos y condiciones</a></li>
                <li><a href="#" class="text-white hover:text-gray-400">Contacto</a></li>
            </ul>
            </div>
        </footer>
    </body> 
    </html>
    ';
}
?>
<!--Head page-->
<?php
    include '../../Templates/componentes.php';
    echo generarHead('Iniciar sesión');
?>

<!--Page content -->
  <body class="bg-stone-800">
    <div class="min-h-screen flex items-center justify-center">
      <div class="max-w-md w-full space-y-8">
        <div>
          <h1 class="text-center text-white text-3xl font-extrabold text-gray-900">Iniciar Sesión</h1>
        </div>
        <form class="mt-8 space-y-6" action="../../Controllers/Front/Ingresar_controller.php" method="POST">
          <div class="rounded-md shadow-sm -space-y-px">
            <div>
              <label for="username" class="sr-only">Nombre de Usuario</label>
              <input id="username" name="username" type="text" autocomplete="username" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-green-500 focus:border-green-500 focus:z-10 sm:text-sm" placeholder="Nombre de Usuario">
            </div>
            <div>
              <label for="password" class="sr-only">Contraseña</label>
              <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-green-500 focus:border-green-500 focus:z-10 sm:text-sm" placeholder="Contraseña">
            </div>
          </div>

          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
              <label for="remember_me" class="ml-2 block text-white text-sm text-gray-900">
                Recordarme
              </label>
            </div>

            <div class="text-sm">
              <a href="#" class="font-medium text-green-600 hover:text-green-500">
                ¿Olvidaste tu contraseña?
              </a>
            </div>
          </div>

          <div>
            <!--<button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
              <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                <svg class="h-5 w-5 text-green-500 group-hover:text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M15 8V6a5 5 0 00-10 0v2a1 1 0 01-1 1H1a1 1 0 01-1-1V5a1 1 0 011-1h3.5a1 1 0 01.86.5L5.8 6H14a1 1 0 011 1v2a3 3 0 11-2.8-2.995L12.44 6H5.56l-.72-.995A3.001 3.001 0 118 3h4a3 3 0 013 3z" clip-rule="evenodd" />
            </svg>
              </span>
              Iniciar Sesión
            </button>-->
            <a href="../../index.php" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Ingresar</a>
          </div>
        </form>
      </div>
    </div>
  </body>



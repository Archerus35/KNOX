<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - KNOX</title>
    <!-- Este sera el apartado de la APP, donde nos precisara la colocacion y uso del sistema de registro y de acceso de la página -->

    <!-- Tailwind CSS Link -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
  </head>
  <body class="bg-gray-100 text-gray-800" style="background-size:cover;background-repeat: no-repeat;background-attachment: fixed;float:right;background-image: url(https://66.media.tumblr.com/7d7916290ee905bba571911f6f168680/7450bd2ea56fb971-5a/s1280x1920/a51b66e5b81af9b2ccb3712c4ae929c23d7b0e19.gif);padding: -10px;
  float: left;
  width: 100%;">

    <nav class="flex py-5 bg-indigo-900 text-white" style="padding: 15px;
    float: left;
    width: 100%;">
      <div class="w-1/2 px-12 mr-auto">
        <p class=" text-2xl font-bold">KNOX</p>
      </div>

      <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
      @if(auth()->check())
        <li class="mx-8">
          <p class="text-xl">Bienvenido: <b>{{ auth()->user()->name }}</b></p>
        </li>
        <li>
          <a href="{{ route('login.destroy') }}" class="font-bold
          py-3 px-4 rounded-md hover:">Cerrar Sesion</a>

        </li>
      @else
        <li class="mx-6">
          <a href="{{ route('login.index') }}" class="font-semibold
          hover: py-3 px-4 rounded-md">Acceder</a>

        </li>
        <li>
          <a href="{{ route('register.index') }}" class="font-semibold
           py-3 px-4 rounded-md hover:">Registrarse</a>
        </li>
      @endif
      </ul>

    </nav>


    @yield('content')


  </body>
</html>

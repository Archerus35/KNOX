@extends('layouts.app')

@section('title', 'Home')
<!-- El apartado home donde tras pasar el acceso nos encontraremos con las novedades y nuevas pestañas que usar -->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">


    </head>
    <nav  class=" text-white bg-black sm:flex sm:justify-center sm:items-center">
        <div class="flex flex-col sm:flex-row">
            <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="/home">Inicio</a>
            <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('products.list')}}">Tienda</a>
            <a href="{{ route('cart.list') }}" class="flex items-center">
                <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                {{ Cart::getTotalQuantity()}}
            </a>

        </div>
    </nav>
    @section('content')
    <div class="container">
        <div class="box">
          <span></span>
          <div class="content">
            <h2>Ragnarök</h2>
            <p>God of War: Ragnarök es un próximo juego de acción y aventuras en desarrollo por Santa Monica Studio y que será publicado por Sony Interactive Entertainment.</p>
            <a href="https://www.youtube.com/watch?v=-tIAazzD1gk">Trailer</a>
          </div>
        </div>
        <div class="box">
          <span></span>
          <div class="content">
            <h2>The Quarry</h2>
            <p>No hay un mejor momento para una sangría (de las malas) que el verano. En tus manos está decidir quién muere y quién no con lo nuevo de los creadores de Until Dawn.</p>
            <a href="https://www.youtube.com/watch?v=-c9AMs6szC0">Trailer</a>
          </div>
        </div>
      </div>
      <!-- partial -->
</html>



@endsection

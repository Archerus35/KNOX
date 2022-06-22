@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="block mx-auto my-12 p-8 bg-black w-1/3 border border-gray-900
rounded-lg shadow-lg" style="background-size:initial;background-attachment: fixed;background-image: url(https://64.media.tumblr.com/95f07365124166faf8bff85bceecfb98/tumblr_okpftxQMgT1rldv4go1_1280.gifv);position: relative;float:right;">

  <h1 class="text-3xl text-center font-bold text-green-100">Acceso</h1>

  <form class="mt-4" method="POST" action="">
    @csrf

    <input type="email" class="border border-gray-900 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email"
    id="email" name="email">

    <input type="password" class="border border-gray-900 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña"
    id="password" name="password">

    @error('message')
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">* {{ $message }}</p>
    @enderror

    <button type="submit" class="rounded-md bg-indigo-900 w-full text-lg
    text-white font-semibold p-2 my-3 hover:bg-indigo-600">Enviar</button>


  </form>


</div>

@endsection

@extends('layouts.frontend')

<!-- Este sera el apartado de productos, donde se manejara la vista de estos, con todos sus atributos. -->
@section('content')
<body>
        <div class="container px-9 mx-auto" style="background-size: cover;background-image: url(https://c.tenor.com/8XfhFrwNfv0AAAAC/space-pixel-art.gif);">
            <h3 class="texto1 text-2xl font-medium text-blue-300" style="text-align: center;">Lista de Productos</h3>
            <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($products as $product)
                <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
                    <img src="{{ url($product->image) }}" alt="" class="w-full max-h-60">
                    <div class="flex items-end justify-end w-full bg-cover">

                    </div>
                    <div class="px-2 py-6">
                        <h3 class="text-blue-300 uppercase">{{ $product->name }}</h3>
                        <span class="mt-2 text-blue-300">${{ $product->price }}</span>
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="id">
                            <input type="hidden" value="{{ $product->name }}" name="name">
                            <input type="hidden" value="{{ $product->price }}" name="price">
                            <input type="hidden" value="{{ $product->image }}"  name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="boton4 px-4 py-2 text-white bg-red-900 rounded">Agregar al carro</button>
                        </form>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </body>

@endsection

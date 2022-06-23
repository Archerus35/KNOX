@extends('layouts.frontend')
<!-- El apartado de carrito, aqui nos podremos encontrar con los productos que nosotros hayamos seleccionado del apartado de tienda -->

<link href="{{ asset('css/style2.css') }}" rel="stylesheet">
@section('content')
          <main class="my-8">
            <div class="container px-6 mx-auto">
                <div class="flex justify-center my-6">
                    <div class="flex flex-col w-full p-10 text-gray-800  shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                      @if ($message = Session::get('success'))
                          <div class="p-4 mb-3 bg-green-400 rounded">
                              <p class="text-green-800">{{ $message }}</p>
                          </div>
                      @endif
                        <h3 class="text-3xl text-bold text-gray-100">Lista del carrito</h3>
                      <div class="flex-1">
                        <table class="w-full text-sm lg:text-base" cellspacing="0">
                          <thead>
                            <tr class="h-12 uppercase">
                              <th class="hidden md:table-cell"></th>
                              <th class="text-left text-gray-100">Nombre</th>
                              <th class="pl-5 text-left lg:text-right lg:pl-0">
                                <span class="lg:hidden " title="Quantity"></span>
                                <span class="hidden lg:inline text-gray-100">Cantidad</span>
                              </th>
                              <th class="hidden text-right md:table-cell text-gray-100">Precio</th>
                              <th class="hidden text-right md:table-cell text-gray-100">Eliminar </th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($cartItems as $item)
                            <tr>
                              <td class="hidden pb-4 md:table-cell">
                                <a href="#">
                                  <img src="{{ $item->attributes->image }}" class="w-20 rounded" alt="Thumbnail">
                                </a>
                              </td>
                              <td>
                                <a href="#">
                                  <p class="mb-2 md:ml-4 text-gray-100">{{ $item->name }}</p>

                                </a>
                              </td>
                              <td class="justify-center mt-6 md:justify-end md:flex">
                                <div class="h-10 w-28">
                                  <div class="relative flex flex-row w-full h-8">

                                    <form action="{{ route('cart.update') }}" method="POST">
                                      @csrf
                                      <input type="hidden" name="id" value="{{ $item->id}}" >
                                    <input type="number" name="quantity" value="{{ $item->quantity }}"
                                    class="w-7 text-center bg-gray-300 rounded-md"  />
                                    <button type="submit" class="boton1 bg-blue-500 px-1 pb-1 ml-1 text-white rounded-md">Cambiar</button>
                                    </form>
                                  </div>
                                </div>
                              </td>
                              <td class="hidden text-right md:table-cell">
                                <span class="text-sm font-medium lg:text-base text-gray-100">
                                    ${{ $item->price }}
                                </span>
                              </td>
                              <td class="hidden text-right md:table-cell">
                                <form action="{{ route('cart.remove') }}" method="POST">
                                  @csrf
                                  <input type="hidden" value="{{ $item->id }}" name="id">
                                  <button class="boton2 px-4 py-1 text-white bg-red-600 rounded-md">x</button>
                              </form>

                              </td>
                            </tr>
                            @endforeach

                          </tbody>
                        </table>
                        <div>
                      <p class="text-gray-100">Total: ${{ Cart::getTotal() }}</p>
                        </div>
                        <div>
                          <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button class="boton3 px-6 py-2 text-gray-100 bg-red-800 rounded-md">Eliminar todo el carrito</button>
                          </form>
                        </div>


                      </div>
                    </div>
                  </div>
            </div>
        </main>
    @endsection

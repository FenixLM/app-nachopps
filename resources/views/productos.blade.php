@extends('inicio')

@section('content')
<section class="bg-white w-full">

    <div class="py-16 max-w-7xl mx-8 md:mx-auto">
        <div class="flex flex-col items-center gap-y-4 ">
            <h2 class="text-4xl md:text-6xl font-semibold text-black text-center"> Descubre un mundo de sabores</h2>
            <h1 class="text-2xl md:text-4xl font-semibold primary text-center">Con Nachopps</h1>
            <p class="font-medium ">En nuestro menú encontrarás una gran variedad de platos y bebidas para disfrutar en un ambiente acogedor y familiar.</p>
            <div
                class="w-full mt-16 mb-10 flex items-center gap-4  md:flex-row flex-col md:justify-center lg:justify-between  flex-wrap  ">
                <div
                    class="w-80 h-40 flex flex-col items-center justify-center  space-y-4 rounded-md border-2 border-solid border-gray-800/50">
                  
                   <i class="fa fa-user text-4xl text-red-500"></i>
                    <p class=" text-md md:text-lg  font-medium">Atención personalizada</p>
                </div>
                <div
                    class="w-80 h-40 flex flex-col items-center justify-center  space-y-4 rounded-md border-2 border-solid border-gray-800/50">
                    <i class="fa fa-cutlery text-4xl text-red-500"></i>
                    <p class=" font-medium text-md md:text-lg">Platillos de calidad</p>
                </div>
                <div
                    class="w-80 h-40 flex flex-col items-center justify-center  space-y-4 rounded-md border-2 border-solid border-gray-800/50">
                        <i class="fa fa-motorcycle text-4xl text-red-500"></i>
                    <p class="text-md md:text-lg font-medium ">Delivery</p>
                </div>
            </div>
        </div>

    </div>


</section>

<div class="p-5" >
    <h1 class="text-center text-4xl font-weight-700">
        Nuestro menú
    </h1>
 {{-- <h1 class="font-weight-700" >Descubre un mundo de sabores</h1>
 <h1 class="primary">Con Nachopps</h1>
 <p>En nuestro menú encontrarás una gran variedad de platos y bebidas para disfrutar en un ambiente acogedor y familiar.</p> --}}
 <ul class="contenedor-productos pt-5">
    @foreach ($productos as $producto)
    <div class="card-custom">
        <div class="card-img">
            <img src="{{ Vite::asset($producto['imagen']) }}" alt="Producto1">
        </div>
        <div class="card-body">
            <h4 class="text-center">{{ $producto->nombre }}</h4>
            <div class="mt-1">
                <p>{{ $producto->descripcion }}</p>
                <p>Precio: ${{ $producto->precio }}</p>
            </div>

        </div>

        <div class="m-1 text-center">
            <button  type="button" class="btn-comprar btn btn-primary"  data-producto="{{ $producto }}">Comprar</button>
        </div>
    </div>
    @endforeach
</ul>
</div>
   
@endsection

@extends('inicio')

@section('content')
    <h1>Listado de Productos</h1>

    <ul>
        @foreach ($productos as $producto)
        <div class="card">
            <div class="card-img">
                <img src="assets/img/anticucho-1.jpg" alt="Producto1">
            </div>
            <div class="card-body">
                <h4 class="text-center">{{ $producto->nombre }}</h4>
                <div class="mt-1">
                    <p>{{ $producto->descripcion }}</p>
                    <p>Precio: ${{ $producto->precio }}</p>
                </div>

            </div>

            <div class="m-1 text-center">
                <button type="button" class="btn btn-primary">Comprar</button>
            </div>
        </div>
        @endforeach
    </ul>
@endsection

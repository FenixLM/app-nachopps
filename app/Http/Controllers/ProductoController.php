<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $productos = Producto:: all();
       return view('productos', compact('productos'));
       echo $datos;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Datos de ejemplo para crear 10 productos
        $productos = [
            [
                'nombre' => 'Producto 1',
                'descripcion' => 'Descripción del Producto 1',
                'precio' => 10.99,
                'imagen' => 'producto1.jpg',
            ],
            [
                'nombre' => 'Producto 2',
                'descripcion' => 'Descripción del Producto 2',
                'precio' => 15.99,
                'imagen' => 'producto2.jpg',
            ],
            [
                'nombre' => 'Producto 3',
                'descripcion' => 'Descripción del Producto 3',
                'precio' => 20.99,
                'imagen' => 'producto3.jpg',
            ],
            [
                'nombre' => 'Producto 4',
                'descripcion' => 'Descripción del Producto 4',
                'precio' => 25.99,
                'imagen' => 'producto4.jpg',
            ],
            [
                'nombre' => 'Producto 5',
                'descripcion' => 'Descripción del Producto 5',
                'precio' => 30.99,
                'imagen' => 'producto5.jpg',
            ],
            [
                'nombre' => 'Producto 6',
                'descripcion' => 'Descripción del Producto 6',
                'precio' => 35.99,
                'imagen' => 'producto6.jpg',
            ],
            [
                'nombre' => 'Producto 7',
                'descripcion' => 'Descripción del Producto 7',
                'precio' => 40.99,
                'imagen' => 'producto7.jpg',
            ],
            [
                'nombre' => 'Producto 8',
                'descripcion' => 'Descripción del Producto 8',
                'precio' => 45.99,
                'imagen' => 'producto8.jpg',
            ],
            [
                'nombre' => 'Producto 9',
                'descripcion' => 'Descripción del Producto 9',
                'precio' => 50.99,
                'imagen' => 'producto9.jpg',
            ],
            [
                'nombre' => 'Producto 10',
                'descripcion' => 'Descripción del Producto 10',
                'precio' => 55.99,
                'imagen' => 'producto10.jpg',
            ],
        ];

        // Itera sobre los datos y crea cada producto
        foreach ($productos as $productoData) {
            Producto::create($productoData);
        }

        // Puedes redirigir a una vista o hacer cualquier otra acción necesaria después de crear los productos
        // return redirect()->route('productos.index');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

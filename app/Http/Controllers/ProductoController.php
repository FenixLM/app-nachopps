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

       // compact('productos') es equivalente a ['productos' => $productos]
       // en donde la clave 'productos' es el nombre de la variable que se pasará a la vista
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
                "nombre" => "Lasaña de Carne",
                "descripcion" => "Deliciosa lasaña de carne con salsa de tomate casera y queso gratinado.",
                "precio" => 10.00,
                "imagen" => "resources/images/lasaña-2.jpg"
            ],
            [
                "nombre" => "Anticuchos",
                "descripcion" => "Tradicionales brochetas de corazón de res marinadas y acompañadas de papas doradas.",
                "precio" => 20.00,
                "imagen" => "resources/images/anticucho-1.jpg"
            ],
            [
                "nombre" => "Pizza Hawaiana",
                "descripcion" => "Pizza con base de salsa de tomate, jamón, piña y abundante queso mozzarella.",
                "precio" => 30.00,
                "imagen" => "resources/images/pizza-3.jpg"
            ],
            [
                "nombre" => "Sudado de Mero",
                "descripcion" => "Mero cocido al vapor con hierbas frescas y vegetales, servido en una deliciosa salsa.",
                "precio" => 40.00,
                "imagen" => "resources/images/sudadomero-1.jpg"
            ],
            [
                "nombre" => "Leche de Tigre",
                "descripcion" => "Refrescante y picante mezcla de pescado fresco marinado en limón con cebolla y ají.",
                "precio" => 50.00,
                "imagen" => "resources/images/leche-3.jpg"
            ],
            [
                "nombre" => "Parihuela",
                "descripcion" => "Sopa de mariscos al estilo peruano, con un toque picante y especias aromáticas.",
                "precio" => 60.00,
                "imagen" => "resources/images/parihuela-2.jpg"
            ]
        
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

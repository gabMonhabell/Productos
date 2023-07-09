<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        
        $response = Http::get('https://vpic.nhtsa.dot.gov/api/vehicles/GetWMIsForManufacturer/hon?format=json'); // Reemplaza con la URL real de la API

        if ($response->successful()) {
            $data = $response->json();
            $products = $data['Results'];
        
            foreach ($products as $productData) {
                Product::create([
                    'Pais' => $productData['Country'],
                    'Nombre' => $productData['Name'],
                    'Actualizacion' => $productData['UpdatedOn'],
                    'Tipo_vehiculo' => $productData['VehicleType'],
                    'wmi' => $productData['WMI'],
                ]);
            }

            $products = Product::paginate(10);
            return view('productsindex', compact('products'));

        } else {
            // La solicitud a la API no fue exitosa
            return back()->withError('Error al obtener la lista de productos de la API.');
        }
    }


    public function search(Request $request){
        $searchTerm = $request->input('search');
        $products = Product::where('Nombre', 'like', "%$searchTerm%")->get();
        return view('products.search', compact('products', 'searchTerm'));
    }

    public function show(Product $product)
{
    return view('products.show', compact('product'));
}


}

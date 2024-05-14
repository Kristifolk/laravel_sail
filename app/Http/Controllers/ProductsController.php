<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;

class ProductsController extends Controller
{
    public function index()
    {
        try{
           $response = Http::get('http://makeup-api.herokuapp.com/api/v1/products.json?brand=maybelline');
            $data = $response->json();
            $products = [];
            foreach ($data as $product){
                $products[] = [
                    'name' => $product['name'],
                    'imageLink' => $product['image_link'],
                ];
            }
        } catch (\Exception $e) {
            echo "API error" . $e->getMessage();
        }
        return view('products', compact('products'));
    }
}

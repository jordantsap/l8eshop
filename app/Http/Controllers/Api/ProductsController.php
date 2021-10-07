<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        // return Product::all();

        return ProductResource::collection(
            Product::with('category')
            ->withTranslation()
            ->get()
        );
    }
}

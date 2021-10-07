<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubType;
use App\Models\Type;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $pagination = 20;

    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Display the dropdown in header search form.
     *
     * @return \Illuminate\Http\Response
     */
    public function dropdown(Request $request)
    {
        $searchname = $request->input('searchname');
        // return $searchname;

        return Product::whereTranslationLike( 'title', '%'.$searchname.'%' )
        ->get();
    }
    /**
     * Display the dropdown in header search form.
     *
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request)
    {
        $searchname = $request->input('searchname');

        $products = Product::whereTranslationLike('title', '%'.$searchname.'%' )
        // ->withTranslation()
        ->paginate();
        return view('products.searchresults', compact('products'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::withTranslation()->paginate('9');
        // $category = Category::withTranslation()->get();
        $brands = Brand::withTranslation()->get();

        return view('products.index', compact('products', 'brands'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::whereTranslation('slug', $slug)
        ->with('category')
        ->first();

        return view("products.product", compact('product'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function category($slug)
    {
        $category = Category::with('products')
        ->whereTranslation('slug', $slug)->first();
        $products = $category->products()->paginate(10);

        return view('products.index')
        ->with('category', $category)
        ->with('products', $products);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function type($slug)
    {
        $type =  Type::whereTranslation('slug', $slug)->first();
        $products = $type->products()->paginate(10);

        return view('products.type', compact('type', 'products'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubType  $subtype
     * @return \Illuminate\Http\Response
     */
    public function subtype($slug)
    {
        $type =  SubType::whereTranslation('slug', $slug)->first();
        $products = $type->products()->paginate(10);

        return view('products.type', compact('type', 'products'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function brand($slug)
    {
        $brand =  Brand::whereTranslation('slug', $slug)->first();
        $products = $brand->products()->paginate(10);

        return view('products.brand')
        ->with('brand', $brand)
        ->with('products', $products);
    }
}

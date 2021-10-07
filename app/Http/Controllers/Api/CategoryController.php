<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount(['products' => function ($query) {
            $query->with('category')
            ->withFilters(
                // request()->input('prices', []),
                request()->input('categories', []),
                request()->input('manufacturers', [])
            )->withTranslation();
        }])
        ->get();

    return CategoryResource::collection($categories);

    }
}

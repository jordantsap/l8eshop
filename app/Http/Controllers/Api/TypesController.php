<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TypesResource;
use App\Models\Category;
use App\Models\Type;
use Illuminate\Http\Request;

class TypesController extends Controller
{
    public function __invoke(Category $category)
    {
        return TypesResource::collection(
            Type::where('category_id', $category->id)->get()
        );
    }
}

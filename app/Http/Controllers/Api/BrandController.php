<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BrandResource;
use App\Http\Resources\ManufacturerResource;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::withCount(['products' => function ($query) {
                $query->with('category')
                ->withFilters(
                    // request()->input('prices', []),
                    request()->input('categories', []),
                    request()->input('brands', [])
                )->withTranslation();
            }])
            ->get();

        return BrandResource::collection($brands);

    }
}

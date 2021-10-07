<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class FormtypesController extends Controller
{
    public function index()
    {
        $types = Type::whereHas('category', function ($query) {
            $query->where('category_id',request()->input('category_id', 0));
        })->withTranslation()->get();

        return response()->json($types);
    }
}

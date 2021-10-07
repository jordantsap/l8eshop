<?php

namespace App\Http\Controllers;

use App\Models\SubType;
use Illuminate\Http\Request;

class FormsubtypesController extends Controller
{
    public function index()
    {
        $subtypes = SubType::whereHas('type', function ($query) {
            $query->where('type_id',request()->input('type_id', 0));
        })->withTranslation()->get();

        return $subtypes;// response()->json($subtypes);
    }
}

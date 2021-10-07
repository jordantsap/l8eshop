<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Gate;

class ConfigController extends Controller
{
    public function clear()
    {
        if (Gate::allows('config.clear')) {
            abort(403);
        }
        Artisan::call('config:clear');
        $notification = array(
            'message' => 'Config cleared successfully',
            'alert-type' => 'info'
        );
        return redirect(route('dashboard'))->with($notification);
    }
}

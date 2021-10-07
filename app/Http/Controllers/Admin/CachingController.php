<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;

class CachingController extends Controller
{
    public function clear()
    {
        if (Gate::allows('cache.clear')) {
            abort(403);
        }
        Artisan::call('cache:clear');
        $notification = array(
            'message' => 'Cache cleared successfully',
            'alert-type' => 'info'
        );
        return redirect(route('dashboard'))->with($notification);
    }
}

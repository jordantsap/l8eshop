<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array
     */
    protected $except = [
        'en/login/',
        'el/login/',
        'en/backend/*',
        'el/backend/*',
        'en/null-onlyfor-public',
        'el/null-onlyfor-public'
    ];
}

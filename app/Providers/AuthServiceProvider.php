<?php

namespace App\Providers;

use App\Policies\CachingPolicy;
use App\Policies\ConfigPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Product' => 'App\Policies\ProductPolicy',
        'App\Models\Company' => 'App\Policies\CompanyPolicy',
        Product::class => ProductPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('cache.clear', [CachingPolicy::class, 'view']);
        Gate::define('config.clear', [ConfigPolicy::class, 'view']);
    }
}

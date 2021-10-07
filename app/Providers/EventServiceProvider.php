<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\SubType;
use App\Models\Type;
use App\Models\Variant;
use App\Observers\BrandObserver;
use App\Observers\CategoryObserver;
use App\Observers\ColorObserver;
use App\Observers\ProductObserver;
use App\Observers\SubTypeObserver;
use App\Observers\TypeObserver;
use App\Observers\VariantObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        CategoryCreated::class => [
            SendHttpRequest::class,
            TranslateTitle::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        // Product::observe(ProductObserver::class);
        // Variant::observe(VariantObserver::class);
        // Brand::observe(BrandObserver::class);
        // Color::observe(ColorObserver::class);
        // Category::observe(CategoryObserver::class);
        // Type::observe(TypeObserver::class);
        // SubType::observe(SubTypeObserver::class);
    }
}

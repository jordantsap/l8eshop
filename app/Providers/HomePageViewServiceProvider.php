<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubType;
use App\Models\Type;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class HomePageViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /* this is the file that loads all the data that is shown in the megamenu and home views partials */

        view()->composer('partials.header', function ($view) {

            $headercategories = Cache::rememberForever('headercategories', function () {
                return Category::withTranslation()
                    ->with(['types','subtypes'])->withTranslation()
                    ->get();
            });
            $view->with('headercategories', $headercategories);
        });

        // NO CACHING but returned in both slider and home-products

        view()->composer('partials.slider', function ($view) {

            $sliderproducts = Product::withTranslation()
                ->addToSlider()
                ->active()
                ->get();

            $view->with('sliderproducts', $sliderproducts);
        });

        // return view home-categories
        view()->composer(['home-categories'], function ($view) {

            $homecategories = Cache::rememberForever('homecategories', function () {
                return Category::withTranslation()
                    // ->featured()
                    ->get();
            });
            $view->with('homecategories', $homecategories);
        });

        // homeproducts in home top blade

        view()->composer('featured-products', function ($view) {

            $featuredproducts = Product::withTranslation()
                ->featured()
                ->take(4)
                ->get();

            $view->with('featuredproducts', $featuredproducts);
        });

        view()->composer('new-products', function ($view) {

            $newproducts = Product::withTranslation()
                ->orderBy('id', 'DESC')
                ->take(6)
                ->get();

            $view->with('newproducts', $newproducts);
        });

        // 'partials.sidebar'
        // 'partials.sidebar'
        view()->composer(['partials.sidebar', 'products.*'], function ($view) {

            $categories = Cache::rememberForever('categories', function () {

                return Category::withTranslation()
                ->with('types', 'subtypes')
                    ->get();
            });

            $view->with('categories', $categories);

            $brands = Cache::rememberForever('brands', function () {

                return Brand::withTranslation()->get(); //featured()->get();
            });

            $view->with('brands', $brands);
        });

        view()->composer('index', function ($view) {

            // if (!Cache::has('categories')) {
            //     $categories = Cache::rememberForever('categories', function () {
            //         return Category::get();
            //     });
            // } else {
            //     $categories = Category::get();
            // }
            // $view->with('categories', $categories);

            // if (!Cache::has('types')) {
            //     $types = Cache::rememberForever('types', function () {
            //         return Type::take(9)->get();
            //     });
            // } else {
            //     $types = Type::take(9)->get();
            // }
            // $view->with('types', $types);


            // if (!Cache::has('subtypes')) {
            //     $subtypes = Cache::rememberForever('subtypes', function () {
            //         return SubType::take(9)->get();
            //     });
            // } else {
            //     $subtypes = SubType::take(9)->get();
            // }
            // $view->with('subtypes', $subtypes);
        });
        // CATEGORY_VIEWMENU END HERE

    }


    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

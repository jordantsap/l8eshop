<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

/// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('index'));
});

// Home > About
Breadcrumbs::for('about', function ($trail) {
    $trail->parent('home');
    $trail->push('About', route('about'));
});

// Home > Blog
Breadcrumbs::for('shop', function ($trail) {
    $trail->parent('home');
    $trail->push('Shop', url('products'));
});
Breadcrumbs::for('categories', function ($trail) {
    $trail->parent('home');
    $trail->push('categories', route('categories'));
});

// Home > Blog > [Category]
Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('shop');
    $trail->push($category->title, route('category', $category->slug));
});
Breadcrumbs::for('type', function ($trail, $type) {
    $trail->parent('shop');
    $trail->push($type->title, route('type', $type->slug));
});
Breadcrumbs::for('brand', function ($trail, $brand) {
    $trail->parent('shop');
    $trail->push($brand->title, route('brand', $brand->slug));
});
// Home > Blog > [Products]
// Breadcrumbs::for('products', function ($trail, $category) {
//     $trail->parent('shop');
//     $trail->push($category->title, route('products', $category->slug));
// });

// Home > Blog > [Category] > [Product]
Breadcrumbs::for('product', function ($trail, $product) {
    $trail->parent('category', $product->category);
    $trail->push($product->title, route('product', $product->id));
});

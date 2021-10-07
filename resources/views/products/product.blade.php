@extends('layouts.public')
@section('title', $product->title)
@section('meta_description', $product->meta_description)
@section('meta_keywords', $product->meta_keywords . ' ' . $product->category->title)

@section('content')
    <section id="product">
        <div class="container">
            <h1>{{ Breadcrumbs::render('product', $product) }}</h1>
            <div class="row">
                <div class="">
                    <div class="col-sm-12 col-md-6">
                        <img height="350px" src="{{ asset('images/products/' . $product->image) }}"
                            title="{{ $product->title }}" class="" alt="{{ $product->title }}">
                    </div>
                    <div class="col-sm-12 col-md-6">
                        {{-- <h1 class="text-center products-header">{{ $product->title }}</h1> --}}
                        <div class="divider"></div>


                        <ul class="list-group">
                            <li class="list-group-item bold">
                                <h2>{{ __('Κατηγορία') }}
                                    <a href="{{ route('category', $product->category->slug) }}">
                                        {{ Str::limit($product->category->title, 200) }}
                                    </a>
                                </h2>
                            </li>
                            <li class="list-group-item bold">
                                <h2>{{ __('Χρώμα') }}
                                    {{ $product->color?$product->color->title:'' }}
                                </h2>
                            </li>
                            <li class="list-group-item bold">
                                <h3>{{ __('SKU:') }}
                                    {{ $product->sku }}
                                </h3>
                            </li>
                            <li class="list-group-item bold">
                                <h3>{{ __('Τιμή') }}
                                    {{ $product->price }}
                                </h3>
                            </li>
                                <div class="center-block">
                                    <div class="panel panel-danger text-center">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">{{ __('single.description') }}</p>
                                        </div>
                                        <div class="panel-body">
                                            <h4>{{ $product->description }}</h4>
                                        </div>
                                    </div>
                                </div>
                            <li class="list-group-item bold mt-3" style="border: none !important;">
                                <form id="cartstore" action="{{ route('cart.store') }}" method="post">
                                  {{ csrf_field() }}
                                  <input type="hidden" name="id" value="{{ $product->id }}">
                                  <input type="hidden" name="title" value="{{ $product->title }}">
                                  <input type="hidden" name="price" value="{{ $product->price }}">
                                  <button id="btn" onclick="bouncer()" type="submit" class="btn btn-primary btn-block">{{__('single.addtocart')}}</button>

                                </form>
                              </li>
                        </ul>
                    </div>

                </div>
                {{-- <div class="col-sm-12 center-block">
                    <div class="panel panel-danger text-center">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{ __('single.description') }}</p>
                        </div>
                        <div class="panel-body">
                            <h4>{{ $product->description }}</h4>
                        </div>
                    </div>
                </div> --}}
            </div>

    </section>
@endsection

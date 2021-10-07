@extends('layouts.public')
{{-- @section('title', __('head.products'))
@section('meta_description', __('meta.productspagedescription'))
@section('meta_keywords', __('meta.productspagekeywords')) --}}

@section('content')

    <div class="container">
        <div class="row">
            <h1 class="">
                {{ Breadcrumbs::render('shop') }}
            </h1>
            <div class="col-sm-3" id="sidebar">
                @include('partials.sidebar')

            </div>

            <div class="col-sm-9">
                @include('partials.sorting')

                @if ($products)
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                                <a href="{{ route('product', $product->id) }}">
                                    <img class="img-responsive rounded" style="width:100%;height:150px;"
                                        src="{{ asset('images/products/' . $product->image) }}"
                                        alt="{{ $product->title }}">
                                    <h2>{{ Str::limit($product->title, 20) }}</h2>
                                </a>
                                <h3><b>{{ __('Κατηγορία') }}</b> <br>
                                    <a href="{{ route('category', $product->category->slug) }}">
                                        {{ $product->category->title }}</a>
                                </h3>
                                <h4 class="col-sm-12 text-center"><b>{{ __('Τιμή') }}</b> <br>€ {{ $product->price }}
                                </h4>
                                <form class="cartstore" action="{{ route('cart.store') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="hidden" name="title" value="{{ $product->title }}">
                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                    <button type="submit"
                                        class="btn btn-primary btn-block">{{ __('single.addtocart') }}</button>
                                    {{-- <script type="text/javascript">
                                    function formSubmit()
                     {
                       alert("{{__('form.cartconfirm')}}");
                         $("#cartstore").submit();
                     }
                                    </script> --}}
                                </form>
                                <br>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="d-flex justify-content-center noresults">
                        <h1 class="align-middle"><b>{{ __('page.noresults') }}</b></h1>
                    </div>
                @endif


                <div class="d-flex justify-content-center">
                    {{ $products->links() }}
                </div>
            </div>



        </div>
        <!-- /.row -->


    </div>
    <!-- /.container -->
    {{-- <br> --}}

@endsection

@extends('layouts.public')
@section('title', )
@section('meta_description',  __('head.company'))
@section('meta_keywords', __('head.company'))

@section('content')
{{-- <img class="img-responsive img-fluid rounded" style="width:100%;height:150px;" src="{{ asset('images/categories/' . $category->image) }}" alt="{{ $category->title }}"> --}}
<div id="type">
    <div class="container">

        <div class="row">
            <h1 class="breadcrumbs">
                {{-- {{ Breadcrumbs::render('category', $category) }} --}}

            </h1>
            {{-- <h1 class="type products-header text-center">__('page.products') {{ $category->title}}</h1> --}}
            <div class="divider"></div>

            <div class="col-sm-3" id="sidebar">
                @include('partials.sidebar')
            </div>

            <div class="col-sm-9">
                @include('partials.sorting')
                <div class="row">
                    @if (count($products) > 0)
                        @foreach ($products as $product)
                            <div class="col-sm-4 text-center">
                                <a href="{{ route('product', $product->slug) }}">

                                    <img class="img-responsive img-fluid rounded" style="width:100%;height:150px;"
                                        src="{{ asset('images/products/' . $product->image) }}"
                                        alt="{{ $product->title }}">

                                    <h2>{{ Str::limit($product->title, 20) }}</h2>

                                </a>
                                <h3><b>{{ __('Κατηγορία: ') }}</b> <br>
                                    <a href="{{ route('category', $product->category->slug) }}">
                                        {{ $product->category->title }}</a>
                                </h3>
                                <h4 class="col-12 text-center"><b>{{ __('Τιμή') }}</b> <br>€ {{ $product->price }}
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

            </div>

            <div class="d-flex justify-content-center">
                {{ $products->links() }}
            </div>

        </div>
    <!-- /.row -->


    </div>
<!-- /.container -->
</div>
<br>
@endsection

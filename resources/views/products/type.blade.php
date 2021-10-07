@extends('layouts.public')
@section('title', $type->title . ' ' . $type->title)
@section('meta_description', $type->title . ' ' . __('head.company') . ' ' . $type->meta_description)
@section('meta_keywords', $type->meta_keywords . ' ' . $type->title . ' ' . __('head.company'))

@section('content')
    {{-- <img class="img-responsive img-fluid rounded" style="width:100%;height:150px;" src="{{ asset($type->image) }}" alt="{{ $type->title }}"> --}}
    <div id="type">
        <div class="container">
            <div class="row">
                <h1 class="breadcrumbs">
                    {{ Breadcrumbs::render('type', $type) }}

                </h1>
                {{-- <h1 class="type-header text-center">{{ __('page.products') }} {{ $type->title}}</h1> --}}
                <div class="divider"></div>
                <front-page></front-page>

                {{-- <div class="col-sm-3">
                    @include('partials.sidebar')
                    <sidebar><sidebar/>
                </div> --}}


                {{-- <div class="col-sm-9">
                    @include('partials.sorting') --}}

                    {{-- @if (count($type->products) > 0)
                    <products><products/> --}}
                    {{-- <div class="row">
                            @foreach ($type->products as $product)
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
                                        <script type="text/javascript">
                                            function formSubmit() {
                                                alert("{{ __('form.cartconfirm') }}");
                                                $("#cartstore").submit();
                                            }
                                        </script>
                                    </form>
                                    <br>
                                </div>
                            @endforeach

                            <div class="d-flex justify-content-center">
                                {{ $products->links() }}
                            </div>
                    </div> --}}
                {{-- @else
                    <div class="d-flex justify-content-center noresults">
                        <h1 class="align-middle"><b>{{ __('page.noresults') }}</b></h1>
                    </div>
                    @endif

                </div> --}}

            </div>
            <!-- /.row -->


        </div>
        <!-- /.container -->
    </div>
    <br>
@endsection

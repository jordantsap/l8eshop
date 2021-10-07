<section class="new-products">
    <div class="col-sm-8">
        <div class="mx-auto">
            <h1 class="new-products-header text-center">{{__("page.new_products")}}</h1>
        </div>
        @if ($newproducts)
        @foreach ($newproducts as $product)
        <div class="col-sm-12 col-md-6 mb-2 new-products-item">
            <div class="hovereffect">
                <img class="img-responsive" src="{{ asset('images/products/'. $product->logo) }}" alt="{{ $product->title }}">
                <div class="overlay">
                    <h2>{{ $product->title }}</h2>
                    <p>
                        <a href="{{route('product', $product->slug)}}">{{$product->title}}</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach

        @endif

    </div>
</section>

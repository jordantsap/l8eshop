<section class="home-products">
    <div class="border-left border-danger col-sm-4">
        <div class="mx-auto">
            <h1 class="home-products-header text-center">{{__("page.featured_products")}}</h1>
        </div>
        @if ($featuredproducts)
        @foreach ($featuredproducts as $product)
        <div class="col-12 home-products-item">
            <div class="mb-4 hovereffect">
                <img class="img-responsive" src="{{ asset('images/products/'. $product->logo) }}" alt="{{ $product->title }}">
                <div class="overlay">
                    <h2>{{ $product->title }}</h2>
                    <p>
                        <a href="{{route('product', $product->slug)}}">LINK HERE</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach

        @endif

    </div>
</section>

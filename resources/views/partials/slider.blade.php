<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
    {{-- <div class="carousel-indicators">
        @foreach ($homeproducts as $key => $item)
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $item->id }}"
                class="{{ $key==0 ? "active" : "" }}" aria-current="true" aria-label="Slide 1">
            </button>
        @endforeach
    </div> --}}
    <div class="carousel-inner" style="height:400px;">

        @foreach ($sliderproducts as $key => $item)
            <div class="carousel-item {{ $key == 1 ? 'active' : '' }}">
                <a href="{{ route('product', $item->slug) }}">
                    <img src="{{ asset('images/products/' . $item->logo) }}" class="d-block w-100"
                        alt="{{ $item->title }}">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>{{ $item->title }}</h1>
                        <h2>{{ Str::limit($item->description, 80) }}</h2>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

{{-- <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach ($homeproducts as $key => $item)

            <button type="button" data-bs-target="#slidercarousel" data-bs-slide-to="{{ $key }}"
                class="{{ $key ? 'active' : '' }}" aria-current="true"
                aria-label="{{ $item->title }}"></button>

        @endforeach

    </div>
    <div class="carousel-inner">
        @foreach ($homeproducts as $key => $item)
            <a href="{{ route('product', $item->slug) }}">
                <div class="carousel-item {{ $key ==1?'active':'' }}">
                    <img src={{ asset('images/products/' . $item->image) }} class="d-block w-100"
                        alt="{{ $item->title }}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $item->title }}</h5>
                        <p>{{ Str::limit($item->title, 20) }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#slidercarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#slidercarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div> --}}

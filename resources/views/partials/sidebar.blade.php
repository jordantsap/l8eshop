<div>
    <nav id="sidebar">
        <ul class="nav navbar-nav list-group d-flex justify-content-center">
            <li class="list-group-item text-center list-group-item-filters">
                <h1>{{ __('page.currentfilters') }}</h1>
            </li>
            <li class="list-group-item text-center list-group-item-filters">
                <h2>{{ __('page.categories') }}</h2>
            </li>
            @foreach ($categories as $category)
                <li class="list-group-item text-center p-3">
                    <a href="{{ route('category', $category->slug) }}" class="align-middle">
                        {{ $category->title }}
                    </a>
                </li>
            @endforeach

            <hr class="list-group-item-filters">
            <li class="list-group-item text-center list-group-item-filters">
                <h2>{{ __('page.price') }}</h2>
            </li>
                <input class="text-center" type="text" id="amount" readonly style="border:0; color:#000000; font-weight:bold;font-size: 18px;">

              <div id="slider-range"></div>
            {{-- <hr> --}}
            <hr class="list-group-item-filters">
            <li class="list-group-item text-center list-group-item-filters">
                <h2>{{ __('page.brands') }}</h2>
            </li>
            @foreach ($brands as $brand)
                <li class="list-group-item text-center p-3">
                    <a href="{{ route('brand', $brand->slug) }}" class="align-middle">
                        {{ $brand->title }}
                    </a>
                </li>
            @endforeach

        </ul>

    </nav>

</div>

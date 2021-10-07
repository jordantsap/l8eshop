<div class="container">
    <div class="row grid grid-cols-3 gap-2 place-content-start">

        <div class="col-3">
            <a class="navbar-brand logo " href="{{ route('index') }}">
                {{-- <img width="100" src="{{ asset('images/logo.png') }}" alt="foititikesprosfores"> --}}
                <h1> {{ config('app.name') }}</h1>
            </a>
        </div>
        <div class="col-5">
            {{-- <livesearch></livesearch> --}}
            @include('partials.searchform')

            {{-- <div class="row" id="pos_search_top">
                <form>
                    <div class="d-flex justify-content-center my-5">
                        <input type="text" id="searchbuttontop" class="col-10 form-control ac_input" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <button type="submit" class="col-2 search_submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                              </svg>
                            <img src="search-solid.svg" alt="search button">
                        </button>
                    </div>
                </form>
            </div> --}}
        </div>
        <div class="col d-flex justify-content-end">
            <div class="contact-link">
                <a href="tel:210.263.35.88">
                    <h5 class="___class_+?7___">{{ __('page.call-us') }}:</h5>
                    <p class="___class_+?8___">210.263.35.88 - 210.440.20.40</p>
                    {{-- {{__('page.callus')}} --}}
                </a>
            </div>
        </div>

    </div>
</div>
<div id="headermenu" class="bg-dark text-white">
    <div class="container-fluid">
        <div class="row">
            <div class="___class_+?12___">
                <div class="font-bold">
                    <ul class="list- d-md-flex flex-wrap justify-content-center">
                        @foreach ($headercategories as $category)
                            <li class="list-group-item bg-dark dropdown">
                                <a class="text-white text-center align-middle"
                                    href="{{ route('category', $category->slug) }}">
                                    {{ $category->title }}
                                </a>
                                @if ($category->has('types'))

                                    @include('partials.megamenu')
                                @endif
                            </li>
                        @endforeach


                        <li class="dropdowncart mt-4">
                            <a href="{{ route('cart.index') }}" class="dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="true">
                                <i class="fas fa-shopping-cart fa-2x"></i>
                                @if (Cart::count() >= 1)
                                    <span class="badge">{{ Cart::count() }}</span>
                                @endif
                            </a>
                            <ul class="dropdown-cart-menu" aria-labelledby="cart">
                                @if (Cart::count() == 1)
                                    <li class="list-group-item">{{ Cart::count() }} {{ __('cart.productincart') }}
                                    </li>
                                    <li class="list-group-item">{{ __('cart.total') }} {{ Cart::total() }}€</li>
                                    <li class="list-group-item">
                                        <a href="{{ route('cart.index') }}">{{ __('cart.cart') }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <form action="{{ route('cart.clean') }}" method="post">
                                            {{ csrf_field() }}
                                            <button title="{{ __('cart.cleantitle') }}" type="submit"
                                                class="btn btn-danger" value="Remove">{{ __('cart.clean') }}</button>
                                        </form>
                                    </li>
                                @elseif(Cart::count() > 1)
                                    <li class="list-group-item">{{ Cart::count() }}
                                        {{ __('cart.productsincart') }}</li>
                                    <li class="list-group-item">{{ __('cart.total') }} {{ Cart::total() }}</li>
                                    <li class="list-group-item">
                                        <a href="{{ route('cart.index') }}">{{ __('cart.cart') }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <form action="{{ route('cart.clean') }}" method="post">
                                            {{ csrf_field() }}
                                            <button title="{{ __('cart.cleantitle') }}" type="submit"
                                                class="btn btn-danger" value="Remove">{{ __('cart.clean') }}</button>
                                        </form>
                                    </li>
                                @else
                                    <li class="list-group-item">{{ __('cart.nocart') }}</li>
                                @endif
                            </ul>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </div>
</div>

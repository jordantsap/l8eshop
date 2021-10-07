<section id="homecategories">

    <div class="col-sm-4">
        <div class="scroll-animation-in right mb-3">
            <h2 class="animated tada animate__backInDown text-center">{{ __('page.categoriesheader') }}</h2>
        </div>
        {{-- <div class="divider"></div> --}}

        <div class="list-group text-center">
            {{-- <div class="animated slideInLeft">
                        <h3>{{ __('page.categories') }}</h3>
                    </div> --}}
            @foreach ($homecategories as $category)
                <li class="list-group-item">
                    <a href="{{ url('category', $category->slug) }}">
                        <h4 class="/*animated slideInUp*/">{{ $category->title }}</h4>
                    </a>
                </li>
            @endforeach
        </div>
        <div id="pricerange">
            <div class="price-range">
                <!--price-range-->
                <h2>Price Range</h2>
                <div class="well text-center">
                    <input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20"
                        data-slider-step="1" data-slider-value="14" />
                    <script>
                        // Without JQuery
                        var slider = new Slider('#ex1', {
                            formatter: function(value) {
                                return 'Current value: ' + value;
                            }
                        });
                    </script>
                    <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                </div>
            </div>
            <!--/price-range-->
        </div>
        {{-- <div class="col-sm-12 text-center">
                    <div class="scroll-animation-bounce">
                        <h3 class="text-black animated slideInDown">{{ __('page.types') }}</h3>
                    </div>
                    @foreach ($types as $type)
                        <li class="text-black list-group-item">
                            <a href="{{ url('groups-category', $type->slug) }}">
                                <h4 class="animated slideInUp">{{ $type->title }}</h4>
                            </a>
                        </li>
                    @endforeach
                </div> --}}
        {{-- <div class="col-sm-12 text-center">
                    <div class="animated slideInRight">
                        <h3>{{ __('page.subtypes') }}</h3>
                    </div>
                    @foreach ($subtypes as $subtype)
                        <li class="list-group-item">
                            <a href="{{ url('products-category', $subtype->slug) }}">
                                <h4 class="animated slideInUp">{{ $subtype->title }}</h4>
                            </a>
                        </li>
                    @endforeach
                </div> --}}

    </div>

</section>

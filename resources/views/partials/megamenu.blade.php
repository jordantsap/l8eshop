<div class="megamenu container">
    <div class="row">
        <div class="col-sm-12">
            <ul class="dropdown-menu text-center" aria-labelledby="productCategoryMenu">
                {{-- <li class="list-group-item">
                    <a href=" {{ url('products') }}">Όλα τα Προϊόντα</a>
                </li>
                <li class="divider"></li> --}}

                {{-- <br> --}}
                @foreach ($category->types as $type)
                    {{-- <div class=""> --}}
                    <!--d-flex justify-content-around-->
                    <ul class="list-group">
                        <li class="list-group-item dropright1">
                            <a class="disabled" href="{{ route('type', $type->slug) }}" id="categoryTypeMenu"
                                aria-expanded="false">
                                {{ $type->title }}
                            </a>
                            @if ($type->has('subtypes'))
                                <ul class="dropdown-menu text-center mb-2" aria-labelledby="categoryTypeMenu">
                                    @foreach ($type->subtypes as $subtype)
                                        <li class="container-fluid list-group-item dropright2">
                                            <div class="col-12">
                                                <a href="{{ route('subtype', $subtype->slug) }}">
                                                    {{ $subtype->title }}
                                                </a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    </ul>
                    {{-- </div> --}}
                @endforeach

            </ul>

        </div>
    </div>
</div>

<section class="">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css /> -->
<div class="container">
    <div class="row">
        <div class="mx-auto">
            <h1 class="home-products-header text-center">{{__('page.categories')}}</h1>
        </div>
        {{-- @if ($homecategories) --}}
            @foreach ($homecategories as $category)
            <div class="col-sm-3">
                <div class="box">
                    <img class="" src="{{ asset('images/categories/'. $category->image) }}" alt="{{ $category->title }}">
                    <div class="box-content">
                        <h2 class="title">{{ $category->title }}</h2>
                        <span class="post">{{ Str::limit($category->description, 10)}}</span>
                    </div>
                    <ul class="icon">
                        {{-- <li><a href="#"><i class="fa fa-search"></i></a></li> --}}
                        <li><a href="{{ route('category', $category->slug) }}"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
            @endforeach
        {{-- @else

        @endif --}}

    </div>

</div>

</section>

<section class="home-products">
    <div class="">

        <div class="row">
            <div class="mx-auto">
                <h1 class="home-products-header text-center">Κατηγορίες Προϊόντων</h1>
            </div>
            @if ($homecategories)
            @foreach ($homecategories as $category)
            <div class="col-sm-4 mb-4 home-products-item">
                <div class="hovereffect">
                    <img class="img-responsive" src="{{ asset('images/categories/'. $category->image) }}" alt="{{ $category->title }}">
                    <div class="overlay">
                        <h2>{{ $category->title }}</h2>
                        <p>
                            <h2>{{ $category->title }}</h2>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            @else dffshtyhdf
            @endif


        </div>

    </div>

</section>

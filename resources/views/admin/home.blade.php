@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -content-header content-->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    {{-- <h1 class="box-title"><b>Καλώς ήρθες</b></h1> --}}
                    {{-- float right section --}}
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    {{-- no company for authenticated user --}}
                    <div class="">
                            {{-- <div class="card">
                                <div class="card-body">

                                    <a class="card-text" href="{{ route('companies.create') }}">Δημιουργήστε το κατάστημά
                                        σας</a>
                                </div>
                            </div> --}}
                    {{-- @endif --}}
                    {{-- @if (Auth::user()->has('company.products')) --}}
                        <div class="container-fluid">
                        <h1 class="text-center">Τα προϊόντα σας</h1>
                        <div class="row">
                            @foreach ($products as $product)

                                <div class="col-sm-12 col-md-3 col-lg-3 text-center pb-2">
                                    <a href="{{ route('product', $product->id) }}">
                                        <img class="img-responsive rounded" style="width:100%;height:150px;"
                                            src="{{ asset('images/products/' . $product->image) }}"
                                            alt="{{ $product->title }}">
                                        <h2>{{ Str::limit($product->title, 20) }}</h2>
                                    </a>
                                    <h3><b>{{ __('Κατηγορία') }}</b> <br>
                                        <a href="{{ route('category', $product->category->slug) }}">
                                            {{ $product->category->title }}</a>
                                    </h3>
                                    <h4 class="col-sm-12 text-center"><b>{{ __('Τιμή') }}</b> <br>€
                                        {{ $product->price }}
                                    </h4>
                                    <h5> <a href="{{ $product->link }}" title="{{ $product->link }}" target="_blank">Go
                                            to Product
                                        </a> </h5>
                                    <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>
                                    -

                                    <a class="btn btn-primary" href="{{ route('products.show', $product->id) }}">View</a>
                                    <br>
                                </div>

                            @endforeach
                        </div>
                    </div>

                </div>
                {{-- @endrole --}}

            </div>
            <!-- /.box-body -->
        {{-- </div> --}}
            <!-- /.box-footer-->
    </div>
    <!-- /.box -->

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

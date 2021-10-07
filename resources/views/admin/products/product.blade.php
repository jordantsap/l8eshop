@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Product : {{ $product->title }}
                @can('update_products', App\Models\Product::class)
                    <small><a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>
                    @endcan
                    - <a class="btn btn-warning" href="javascript:history.back()">Go Back</a></small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="title">Ονομασία:</label>
                                <div class="input-group">
                                    <input type="text" value="{{ $product->title }}" class="form-control" name="title"
                                        placeholder="{{ $product->title }}" readonly>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-home"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="category_id">Category</label>
                            <div class="form-control" name="category_id" id="category_id" readonly>
                                @if (!empty($product->category))
                                    {{ $product->category->title }}
                                @else Null
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @hasanyrole('Super-Admin|Admin|Blogger')
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="active"> Active
                                    <input type="checkbox" name="active" value="" {{ $product->active ? 'checked' : '' }}>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="active"> Add to Home Slider
                                    <input type="checkbox" name="slider" value="" {{ $product->slider ? 'checked' : '' }}>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="homepage"> Add to Home Page
                                    <input type="checkbox" name="homepage" value=""
                                        {{ $product->slider ? 'checked' : '' }}>
                                </label>
                            </div>
                        </div>
                        @endhasanyrole

                        <div class="col-sm-3">
                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                <label for="price">Τιμή</label>
                                <div class="input-group">
                                    <input type="text" value="{{ $product->price }}" class="form-control" name="price"
                                        placeholder="Τιμή" readonly>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-euro"></span>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row form-group">
                        <label for="image">Images</label>
                        <div class="input-group">
                            <label for="logo">Λογοτυπο: </label>
                            <span class="col"><img width="200" height="200" src="{{ asset('images/products/' . $product->logo) }}"
                                    alt="{{ $product->title }}"></span>
                            <label for="image4">Εικόνα 1: </label>
                            <span class="col"><img width="200" height="200" src="{{ asset('images/products/' . $product->image1) }}"
                                    alt="{{ $product->title }}"></span>
                            <label for="image4">Εικόνα 2: </label>
                            <span class="col"><img width="200" height="200" src="{{ asset('images/products/' . $product->image2) }}"
                                    alt="{{ $product->title }}"></span>
                            <label for="image4">Εικόνα 3: </label>
                            <span class="col"><img width="200" height="200" src="{{ asset('images/products/' . $product->image3) }}"
                                    alt="{{ $product->title }}"></span>
                            <label for="image4">Εικόνα 4: </label>
                            <span class="col"><img width="200" height="200" src="{{ asset('images/products/' . $product->image4) }}"
                                    alt="{{ $product->title }}"></span>
                            <label for="image4">Εικόνα 5: </label>
                            <span class="col"><img width="200" height="200" src="{{ asset('images/products/' . $product->image5) }}"
                                    alt="{{ $product->title }}"></span>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <label for="brand">Brand: </label>
                            <input type="text" value="{{ $product->brand ? $product->brand->title : 'None' }}"
                                class="form-control" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label for="color">Χρώμα</label>
                            <div class="input-group">
                                <input type="text" value="{{ $product->color ? $product->color->title : 'None' }}"
                                    class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label for="color">SKU</label>
                            <div class="input-group">
                                <input type="text" value="{{ $product->sku }}" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    {{-- </div> --}}

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description">Περιγραφή</label>
                                <div class="input-group">
                                    <textarea name="description" id="description" class="form-control" rows="5"
                                        readonly>{{ $product->description }}</textarea>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-info-sign"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

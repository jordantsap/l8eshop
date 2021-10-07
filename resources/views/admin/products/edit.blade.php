@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Product :
                <small>{{ $product->title }}</small>
                <a class="btn btn-warning" href="javascript:history.back()">Go Back</a>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <form action="{{ route('products.update', [$product->id]) }}" method="post" role="form"
                    enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label for="title" class="control-label">{{ __('Τίτλος') }}</label>
                                    <input id="title" type="text" class="form-control" name="title"
                                        value="{{ $product->title }}">

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            {{-- </div> --}}

                            {{-- <div class="form-group{{ $errors->has('meta_description') ? ' has-error' : '' }}">
            <label for="meta_description" class="control-label">{{ __('Meta Description') }}</label>
                <input id="meta_description" type="text" class="form-control" name="meta_description" value="{{ $product->meta_description}}" >

                @if ($errors->has('meta_description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('meta_description') }}</strong>
                    </span>
                @endif
        </div>

        <div class="form-group{{ $errors->has('meta_keywords') ? ' has-error' : '' }}">
            <label for="meta_keywords" class="control-label">{{ __('Meta Keywords') }}</label>
                <input id="meta_keywords" type="text" class="form-control" name="meta_keywords" value="{{ $product->meta_keywords}}" >

                @if ($errors->has('meta_keywords'))
                    <span class="help-block">
                        <strong>{{ $errors->first('meta_keywords') }}</strong>
                    </span>
                @endif
        </div> --}}

                            {{-- <div class="row"> --}}
                            @hasanyrole('Super-Admin|Admin|Blogger')
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="active"> Active
                                        <input type="checkbox" name="active" value="1"
                                            {{ $product->active ? 'checked' : '' }}>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="slider"> Add to Home Slider
                                        <input type="checkbox" name="slider" value="1"
                                            {{ $product->slider ? 'checked' : '' }}>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="homepage"> Add to homepage
                                        <input type="checkbox" name="homepage" value="1"
                                            {{ $product->homepage ? 'checked' : '' }}>
                                    </label>
                                </div>
                            </div>
                            @endhasanyrole

                            <div class="col-sm-3">
                                <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                    <label for="price">Τιμή</label>
                                    <div class="input-group">
                                        <input type="text" value="{{ $product->price }}" class="form-control"
                                            name="price" placeholder="Τιμή">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-euro"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row mb-2">
                                <div class="form-group col{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                    <label for="category_id" class="col-form-label">Κατηγορία Προϊόντος</label>
                                    @if ($errors->has('category_id'))
                                        <strong class="text-danger">{{ $errors->first('category_id') }}</strong>
                                    @endif
                                    <div class="input-group">
                                        <select id="category_id" value="{{ old('category_id') }}" name="category_id"
                                            class="form-control">
                                            <option value="">Επιλέξτε</option>
                                            @if (count($categories))
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ $category->id == $product->category->id ? 'selected' : '' }}>
                                                        {{ $category->title }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-list"></span>
                                        </span>
                                    </div>
                                </div>

                            <div class="form-group col" id="type">
                                <label for="type_id" class="col-form-label">{{ __('Type') }}</label>

                                <div class="{{ $errors->has('type_id') ? ' has-error' : '' }}">
                                    <select class="form-control" id="type_id" name="type_id" required>
                                        <option value="" selected>Choose Type</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col" id="subtype">
                                <label for="sub_type_id"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Subtype') }}</label>

                                <div class="{{ $errors->has('sub_type_id') ? ' has-error' : '' }}">
                                    <select class="form-control" id="sub_type_id" name="sub_type_id">
                                        <option value="" selected>Choose Sub type</option>
                                    </select>
                                </div>

                            </div>

                        </div> <!--categories row end -->

                        <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    {{ __('admin.variants') }}
                                </div>

                                <div class="card-body">
                                    <table class="table" id="variants_table">
                                        <thead>
                                            <tr>
                                                <th>{{ __('admin.variants') }}</th>
                                                <th>{{ __('admin.variantvalue') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (old('variants', $product->variants->count() ? $product->variants : ['']) as $product_variant)
                                                <tr id="variant{{ $loop->index }}">
                                                    <td>
                                                        <select name="variants[]" class="form-control">
                                                            <option value="">-- {{ __('admin.choosevariant') }} --</option>
                                                            @foreach ($variants as $variant)
                                                                <option value="{{ $variant->id }}"
                                                                    @if (old('variants.' . $loop->parent->index, optional($product_variant)->id) == $variant->id) selected @endif>{{ $variant->title }}
                                                                    {{-- (${{ number_format($product->price, 2) }}) --}}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="number" name="quantities[]" class="form-control"
                                                            value="{{ old('quantities.' . $loop->index) ?? optional(optional($product_variant)->pivot)->quantity ?? '1' }}" />
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr id="variant{{ count(old('variants', $product->variants->count() ? $product->variants : [''])) }}">
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <button id="add_row" class="btn btn-default pull-left">+
                                                {{ __('admin.addvariant') }}</button>
                                            <button id='delete_row' class="pull-right btn btn-danger">-
                                                {{ __('admin.deletevariant') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm-3 {{ $errors->has('brand_id') ? ' has-error' : '' }}">
                                <label for="brand_id">Brand: </label>
                                <select id="brand_id" value="{{ old('brand_id') }}" name="brand_id"
                                    class="form-control">
                                    <option value="">Επιλέξτε</option>
                                    {{-- @if ($companies) --}}
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}"
                                            {{ $product->brand && ($brand->id = $product->brand->id ? 'selected' : '') }}>
                                            {{ $brand->title }}</option>
                                    @endforeach
                                    {{-- @endif --}}
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group{{ $errors->has('color_id') ? ' has-error' : '' }}">
                                    <label for="color_id">Χρώμα Προϊόντος</label>
                                    @if ($errors->has('color_id'))
                                        <strong class="text-danger">{{ $errors->first('color_id') }}</strong>
                                    @endif
                                    <div class="input-group">
                                        <select name="color_id" class="form-control">
                                            <option value="">Επιλέξτε</option>
                                            @foreach ($colors as $color)
                                                <option value="{{ $color->id }}"
                                                    {{ $product->color === $color->id ? 'selected' : '' }}>
                                                    {{ $color->title }}</option>
                                            @endforeach
                                        </select>

                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-list"></span>
                                        </span>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-sm-4">
                              <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
                                <label for="logo">Λογότυπο: </label>
                                <span><img width="200" height="200" src="{{asset('images/products/'.$product->logo)}}" alt="{{$product->title}}"></span>
                                <input type="file" value="{{asset('images/products/'.$product->logo)}}" name="logo">
                                <p class="help-block">Example block-level help text here.</p>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-group{{ $errors->has('image1') ? ' has-error' : '' }}">
                                <label for="image1">Εικόνα 1: </label>
                                <span><img width="200" height="200" src="{{asset('images/products/'.$product->image1)}}" alt="{{$product->title}}"></span>
                                <input type="file" value="{{asset('images/products/'.$product->image1)}}" name="image1">
                                <p class="help-block">Example block-level help text here.</p>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-group{{ $errors->has('image2') ? ' has-error' : '' }}">
                                <label for="image2">Εικόνα 2: </label>
                                <span><img width="200" height="200" src="{{asset('images/products/'.$product->image2)}}" alt="{{$product->title}}"></span>
                                <input type="file" value="{{asset('images/products/'.$product->image2)}}" name="image2">
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-group{{ $errors->has('image3') ? ' has-error' : '' }}">
                                <label for="image3">Εικόνα 3: </label>
                                <span><img width="200" height="200" src="{{asset('images/products/'.$product->image3)}}" alt="{{$product->title}}"></span>
                                <input type="file" value="{{asset('images/products/'.$product->image3)}}" name="image3">
                                <p class="help-block">Example block-level help text here.</p>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-group{{ $errors->has('image4') ? ' has-error' : '' }}">
                                <label for="image4">Εικόνα 4: </label>
                                <span><img width="200" height="200" src="{{asset('images/products/'.$product->image4)}}" alt="{{$product->title}}"></span>
                                <input type="file" value="{{asset('images/products/'.$product->image4)}}" name="image4">
                                <p class="help-block">Example block-level help text here.</p>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-group{{ $errors->has('image5') ? ' has-error' : '' }}">
                                <label for="image5">Εικόνα 5: </label>
                                <span><img width="200" height="200" src="{{asset('images/products/'.$product->image5)}}" alt="{{$product->title}}"></span>
                                <input type="file" value="{{asset('images/products/'.$product->image5)}}" name="image5">
                                <p class="help-block">Example block-level help text here.</p>
                              </div>
                            </div>

                          </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                    <label for="description">Περιγραφή</label>
                                    <div class="input-group">
                                        <textarea name="description" id="description" class="form-control" rows="5"
                                            value="{{ $product->description }}">{{ $product->description }}</textarea>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-info-sign"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                            <div class="col-sm-6">
                                <a class="btn btn-default btn-block" href="javascript:history.back()">Go Back</a>
                            </div>
                        </div>
                </form>
            </div>
    </div>
    <!-- /.box -->

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


@section('scripts')
    <script>
      $(document).ready(function(){
        let row_number = {{ count(old('variants', $product->variants->count() ? $product->variants : [''])) }};
        $("#add_row").click(function(e){
          e.preventDefault();
          let new_row_number = row_number - 1;
          $('#variant' + row_number).html($('#variant' + new_row_number).html()).find('td:first-child');
          $('#variants_table').append('<tr id="variant' + (row_number + 1) + '"></tr>');
          row_number++;
        });

        $("#delete_row").click(function(e){
          e.preventDefault();
          if(row_number > 1){
            $("#variant" + (row_number - 1)).html('');
            row_number--;
          }
        });

        // product category dropdowns
        $('#category_id').change(function() {
                var $type = $('#type_id');
                $.ajax({
                    url: "{{ route('formtypes.index') }}",
                    data: {
                        category_id: $(this).val()
                    },
                    success: function(data) {
                        $type.html('<option value="" selected>Choose Type</option>');
                        $.each(data, function(id, value) {
                            $type.append('<option value="' + value.id + '">' + value
                                .title + '</option>');
                        });
                    }
                });
                $('#type_id, #subtype_id').val("");
                // $('#type').removeClass('d-none');

            });
            $('#type_id').change(function() {
                var $subtype = $('#sub_type_id');
                $.ajax({
                    url: "{{ route('formsubtypes.index') }}",
                    data: {
                        type_id: $(this).val()
                    },
                    success: function(data) {
                        $subtype.html('<option value="" selected>Choose Sub Type</option>');
                        $.each(data, function(id, value) {
                            $subtype.append('<option value="' + value.id + '">' + value
                                .title + '</option>');
                        });
                    }
                });
                // $('#subtype').removeClass('d-none');
            });

      });
    </script>
@endsection

@extends('admin.layouts.app')

@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="row">
                <div class="col">
                    <h1>
                        {{ __('form.admincreateproduct') }}

                    </h1>
                </div>
            </div>
        </div>
        <section class="content">

            <div class="box">
                <form action="{{ route('products.store') }}" method="post" role="form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label for="title">{{ __('admin.producttitle') }}:</label>
                                    @if ($errors->has('title'))
                                        <strong class="text-danger">{{ $errors->first('title') }}</strong>
                                    @endif
                                    <div class="input-group">
                                        <input type="text" value="{{ old('title') }}" class="form-control" name="title"
                                            placeholder="{{ __('admin.producttitle') }}" required>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-home"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="active"> {{ __('admin.active') }}
                                        <input type="checkbox" name="active" value="1">
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="slider"> {{ __('admin.addtoslider') }}
                                        <input type="checkbox" name="slider" value="1">
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="homepage"> {{ __('admin.addtohome') }}
                                        <input type="checkbox" name="homepage" value="1">
                                    </label>
                                </div>
                            </div>

                        </div>
                        <!--ROW END--->

                            <div class="row">
                                <div class="col">
                                    <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                        <label for="price">{{ __('admin.price') }}</label>
                                        @if ($errors->has('price'))
                                            <strong class="text-danger">{{ $errors->first('price') }}</strong>
                                        @endif
                                        <div class="input-group">
                                            <input type="text" value="{{ old('price') }}" class="form-control"
                                                name="price" placeholder="Τιμή" required>
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-euro"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col {{ $errors->has('color_id') ? ' has-error' : '' }}">
                                    <div class="form-group{{ $errors->has('color_id') ? ' has-error' : '' }}">
                                        <label for="color_id">{{ __('form.color') }}</label>
                                        @if ($errors->has('color_id'))
                                            <strong class="text-danger">{{ $errors->first('color_id') }}</strong>
                                        @endif
                                        <div class="input-group">
                                            <select name="color_id" class="form-control">
                                                <option value="">{{ __('form.select') }}</option>
                                                @foreach ($colors as $color)
                                                    <option value="{{ $color->id }}">{{ $color->title }}</option>
                                                @endforeach
                                            </select>

                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-list"></span>
                                            </span>

                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group{{ $errors->has('brand_id') ? ' has-error' : '' }}">
                                        <label for="brand_id">{{ __('form.brand') }}: </label>
                                        <select id="brand_id" value="{{ old('brand_id') }}" name="brand_id"
                                            class="form-control">
                                            <option value="">{{ __('form.select') }}</option>

                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->title }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                            <div class="col">
                                <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                                    <label for="quantity">{{ __('admin.productquantity') }}:</label>
                                    @if ($errors->has('quantity'))
                                        <strong class="text-danger">{{ $errors->first('quantity') }}</strong>
                                    @endif
                                    <div class="input-group">
                                        <input type="number" value="{{ old('quantity') }}" class="form-control"
                                            name="quantity" placeholder="{{ __('admin.choosequantity') }}" required>
                                    </div>
                                </div>
                            </div>
                            </div>


                            <div class="row">

                                <div class="form-group col-3">
                                    <label for="category" class="col-form-label">
                                        {{ __('form.category') }}
                                    </label>

                                    <div class="{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                        <select class="form-control" id="category_id" name="category_id" required>
                                            <option value="" selected>{{ __('form.select') }}</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-3" id="type">
                                    <label for="type_id" class="col-form-label">{{ __('form.type') }}</label>

                                    <div class="{{ $errors->has('type_id') ? ' has-error' : '' }}">
                                        <select class="form-control" id="type_id" name="type_id" required>
                                            <option value="" selected>{{ __('form.select') }}</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col" id="subtype">
                                    <label for="sub_type_id"
                                        class="col-md-4 col-form-label text-md-right">{{ __('form.subtype') }}</label>

                                    <div class="{{ $errors->has('sub_type_id') ? ' has-error' : '' }}">
                                        <select class="form-control" id="sub_type_id" name="sub_type_id">
                                            <option value="" selected>{{ __('form.select') }}</option>
                                        </select>
                                    </div>

                                </div>

                            </div> {{-- category row end --}}

                            <div class="card mt-3">
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
                                            @foreach (old('variants', ['']) as $index => $oldVariant)
                                                <tr id="variant{{ $index }}">
                                                    <td>
                                                        <select name="variants[]" class="form-control">
                                                            <option value="">-- {{ __('admin.choosevariant') }} --
                                                            </option>
                                                            @foreach ($variants as $variant)
                                                                <option value="{{ $variant->id }}"
                                                                    {{ $oldVariant == $variant->id ? ' selected' : '' }}>
                                                                    {{ $variant->title }}
                                                                    {{-- (${{ number_format($variant->price, 2) }}) --}}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="values[]" class="form-control"
                                                            value="{{ old('values.' . $index) ?? '1' }}" />
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr id="variant{{ count(old('variants', [''])) }}"></tr>
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


                            {{-- <input type="file" id="image" name="image" value="{{old('image')}}" required> --}}
                            {{-- <img id="image" width="100"/>
                                <input type="file"
                                    onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                                    id="image" name="image" value="{{ old('image') }}" required> --}}
                            {{-- <img src="images/{{ Session::get('image') }}"> --}}
                            {{-- @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div> --}}

                        <div class="row">

                            <div class="col-sm-4">
                                <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
                                    <label for="logo">Λογοτυπο: </label>
                                    @if ($errors->has('logo'))
                                        <strong class="text-danger">{{ $errors->first('logo') }}</strong>
                                    @endif
                                    <p class="help-block">
                                        <img id="logo" width="100" />
                                        <input type="file"
                                            onchange="document.getElementById('logo').src = window.URL.createObjectURL(this.files[0])"
                                            id="logo" name="logo" value="{{ old('logo') }}" required>
                                    </p>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group{{ $errors->has('image1') ? ' has-error' : '' }}">
                                    <label for="homeimage">Εικόνα 1: </label>
                                    @if ($errors->has('image1'))
                                        <strong class="text-danger">{{ $errors->first('image1') }}</strong>
                                    @endif
                                    <p class="help-block">
                                        <img id="image1" width="100" />
                                        <input type="file"
                                            onchange="document.getElementById('image1').src = window.URL.createObjectURL(this.files[0])"
                                            id="image1" name="image1" value="{{ old('image1') }}" required>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group{{ $errors->has('image2') ? ' has-error' : '' }}">
                                    <label for="pageimage">Εικόνα 2: </label>
                                    @if ($errors->has('image2'))
                                        <strong class="text-danger">{{ $errors->first('image2') }}</strong>
                                    @endif
                                    <p class="help-block">
                                        <img id="image2" width="100" />
                                        <input type="file"
                                            onchange="document.getElementById('image2').src = window.URL.createObjectURL(this.files[0])"
                                            id="image2" name="image5" value="{{ old('image2') }}" required>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group{{ $errors->has('image3') ? ' has-error' : '' }}">
                                    <label for="image3">Εικόνα 3: </label>
                                    @if ($errors->has('image3'))
                                        <strong class="text-danger">{{ $errors->first('image3') }}</strong>
                                    @endif
                                    <p class="help-block">
                                        <img id="image3" width="100" />
                                        <input type="file"
                                            onchange="document.getElementById('image3').src = window.URL.createObjectURL(this.files[0])"
                                            id="image3" name="image3" value="{{ old('image3') }}" required>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group{{ $errors->has('image4') ? ' has-error' : '' }}">
                                    <label for="image4">Εικόνα 4: </label>
                                    @if ($errors->has('image4'))
                                        <strong class="text-danger">{{ $errors->first('image4') }}</strong>
                                    @endif
                                    <p class="help-block">
                                        <img id="image4" width="100" />
                                        <input type="file"
                                            onchange="document.getElementById('image4').src = window.URL.createObjectURL(this.files[0])"
                                            id="image4" name="image4" value="{{ old('image4') }}" required>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group{{ $errors->has('image5') ? ' has-error' : '' }}">
                                    <label for="image5">Εικόνα 5: </label>
                                    @if ($errors->has('image5'))
                                        <strong class="text-danger">{{ $errors->first('image5') }}</strong>
                                    @endif
                                    <p class="help-block">
                                        <img id="image5" width="100" />
                                        <input type="file"
                                            onchange="document.getElementById('image5').src = window.URL.createObjectURL(this.files[0])"
                                            id="image5" name="image5" value="{{ old('image5') }}" required>
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                    <label for="description">{{ __('form.productdescription') }}</label>
                                    @if ($errors->has('description'))
                                        <strong class="text-danger">{{ $errors->first('description') }}</strong>
                                    @endif
                                    <div class="input-group">
                                        <textarea name="description" id="description" class="form-control"
                                            rows="5">{{ old('description') }}</textarea>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-info-sign"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">{{ __('form.submit') }}</button>
                        -
                        <a class="btn btn-warning">{{ __('page.backlink') }}</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            // Product Variants feature
            let row_number = {{ count(old('variants', [''])) }};
            $("#add_row").click(function(e) {
                e.preventDefault();
                let new_row_number = row_number - 1;
                $('#variant' + row_number).html($('#variant' + new_row_number).html()).find(
                    'td:first-child');
                $('#variants_table').append('<tr id="variant' + (row_number + 1) + '"></tr>');
                row_number++;
            });

            $("#delete_row").click(function(e) {
                e.preventDefault();
                if (row_number > 1) {
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
                        $type.html(
                            '<option value="" selected>{{ __('form.select') }}</option>');
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
                        $subtype.html(
                            '<option value="" selected>{{ __('form.select') }}</option>');
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

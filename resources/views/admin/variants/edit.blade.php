@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Variant : {{ $variant->title }}

            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <form method="post" action="{{ route('variants.update', $variant->id) }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="box-body ">
                        <div class="col-12 {{ $errors->has('title') ? ' has-error' : '' }}">
                            <div class="form-group">
                                <label for="title">Type title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder=""
                                    value="{{ $variant->title }}">
                            </div>
                        </div>
                        <div class="col-12 {{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image">Image: </label>
                            <img src="{{ asset('images/variants/' . $variant->image) }}" alt="{{$variant->title}}">
                            <br>
                            <label for="preview">Image preview:</label>
                            <img id="image" width="100" >
                            <input type="file"
                            onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                            id="image" name="image" value="{{ old('image') }}" required>

                        </div>


                        <div class="col-xs-12">
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>

                            <a href="javascript:history.back()" class="btn btn-warning">Back</a>
                        </div>

                    </div>

                </form>
                <!-- /.box-body -->
                {{-- <div class="box-footer">
        Footer
      </div> --}}
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

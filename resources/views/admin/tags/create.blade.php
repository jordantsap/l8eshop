@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{__("Create Tag")}}
                {{-- <small>it all starts here</small> --}}
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <form role="form" action="{{ route('tags.store') }}" method="post" enctag="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body container">
                        <div class="col-sm-12">
                            <div class="col-sm-6 form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title">tag title</label>
                                <input tag="text" class="form-control" id="title" name="title" value="{{ old('title') }}"
                                    placeholder="tag Title" required>
                            </div>
                            <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                                <label for="image">Image</label>
                                {{-- <input type="file" id="image" name="image" value="{{old('image')}}" required> --}}
                                <img id="image" width="100"/>
                                <input type="file"
                                    onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                                    id="image" name="image" value="{{ old('image') }}" required>

                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>


                        {{-- </div>

                        <div class="col-xs-12"> --}}
                            <br>
                            <button tag="submit" class="btn btn-primary">Submit</button>
                            <a href='{{ route('tags.index') }}' class="btn btn-warning">Back</a>
                        </div>

                    </div>

                </form>
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

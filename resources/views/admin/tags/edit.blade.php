@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Tag : {{ $tag->title }}

            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <form method="post" action="{{ route('tags.update', $tag->id) }}" enctag="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="box-body ">
                        <div class="col-12 {{ $errors->has('title') ? ' has-error' : '' }}">
                            <div class="form-group">
                                <label for="title">tag title</label>
                                <input tag="text" class="form-control" id="title" name="title" placeholder=""
                                    value="{{ $tag->title }}">
                            </div>
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

                        <div class="col-xs-12">
                            <br>
                            <button tag="submit" class="btn btn-primary">Submit</button>

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

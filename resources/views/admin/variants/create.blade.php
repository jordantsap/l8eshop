@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create Variant
                {{-- <small>it all starts here</small> --}}
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <form role="form" action="{{ route('variants.store') }}" method="post" encvariant="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body container">
                        <div class="col-sm-12">
                            <div class="col-sm-6 form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title">variant title</label>
                                <input variant="text" class="form-control" id="title" name="title" value="{{ old('title') }}"
                                    placeholder="Variant Title" required>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                    <label for="category_id">Κατηγορία</label>
                                    @if ($errors->has('category_id'))
                                        <strong class="text-danger">{{ $errors->first('category_id') }}</strong>
                                    @endif
                                    <div class="input-group">
                                        <select name="category_id" class="form-control">
                                            <option value="">Επιλέξτε</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        </select>

                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-list"></span>
                                        </span>

                                    </div>
                                </div>
                            </div>


                        {{-- </div>

                        <div class="col-xs-12"> --}}
                            <br>
                            <button variant="submit" class="btn btn-primary">Submit</button>
                            <a href='{{ route('variants.index') }}' class="btn btn-warning">Back</a>
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

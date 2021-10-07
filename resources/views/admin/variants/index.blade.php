@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Variants
                {{-- @can('create_variantss', App\variants::class) --}}
                <small><a class="btn btn-primary" href="{{ route('variants.create') }}">Add New</a></small>
                {{-- @endcan --}}
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Active</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                @foreach ($variants as $variant)
                                    <tbody>
                                        <tr>
                                            <td>{{ $variant->id }}</td>
                                            <td>{{ $variant->active ? 'yes' : 'no' }}</td>
                                            <td>{{ $variant->title }}</td>
                                            <td>{{ $variant->category?$variant->category->title:__('admin.nocategory') }}</td>
                                            <td><img width="150px" height="150px"
                                                    src="{{ $variant->image ? asset('images/variants/' . $variant->image) : asset('images/noimage.jpg') }}"
                                                    alt="{{ $variant->title }}"></td>
                                            <td>
                                                <a class="btn btn-primary"
                                                    href="{{ route('variants.edit', $variant->id) }}">Edit</a>
                                                -
                                                <a class="btn btn-primary"
                                                    href="{{ route('variants.show', $variant->id) }}">View</a>
                                                <form action="{{ route('variants.destroy', $variant->id) }}"
                                                    method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <br>
                                                    <button variant="submit" class="btn btn-primary">Delete</button>
                                                </form>

                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                                <tfoot>
                                    <tr>
                                        <th>id</th>
                                        <th>Active</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        {{-- @can('view_variants', 'update_variants', App\Models\variant::class) --}}
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                            </table>
                            {{ $variants->links() }}
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->


                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection

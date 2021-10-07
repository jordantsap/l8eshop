@extends('admin.layouts.app')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{__("admin.types")}}
        {{-- @can ('create_typess', App\types::class) --}}
          <small><a class="btn btn-primary" href="{{route('types.create')}}">Add New</a></small>
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
                  <th>Εικόνα</th>
                  @hasanyrole('Super-Admin|Admin|Manager')
                    <th>Actions</th>
                  @endhasanyrole
                </tr>
                </thead>
                @foreach ($types as $type)
                  <tbody>
                  <tr>
                    <td>{{$type->id}}</td>
                    <td>{{$type->active?"yes":'no'}}</td>
                    <td>{{$type->title}}</td>
                    <td>{{$type->category->title}}</td>
                    <td><img width="150px" height="150px" src="{{$type->image?asset('images/types/' . $type->image) : asset('images/noimage.jpg')}}" alt="{{$type->title}}"></td>
                    <td>
                        @hasanyrole('Super-Admin|Admin|Manager')
                      <a class="btn btn-primary" href="{{route('types.edit', $type->id)}}">Edit</a> -
                    {{-- @endcan
                    @can ('view_types', App\type::class) --}}
                      <a class="btn btn-primary" href="{{route('types.show', $type->id)}}">View</a>
                      <form action="{{ route('types.destroy', $type->id) }}"
                        method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <br>
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </form>
                    @endhasanyrole
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
                  <th>Εικόνα</th>
                  {{-- @can ('view_types','update_types', App\Models\Type::class) --}}
                    <th>Actions</th>
                  {{-- @endcan --}}
                  </tr>
                </tfoot>
              </table>
              {{$types->links()}}
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

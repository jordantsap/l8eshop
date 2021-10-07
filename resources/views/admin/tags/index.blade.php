@extends('admin.layouts.app')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tags
        {{-- @can ('create_tags', App\tags::class) --}}
          <small><a class="btn btn-primary" href="{{route('tags.create')}}">Add New</a></small>
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
                  @hasanyrole('Super-Admin|Admin|Blogger')
                    <th>Actions</th>
                  @endhasanyrole
                </tr>
                </thead>
                @foreach ($tags as $tag)
                  <tbody>
                  <tr>
                    <td>{{$tag->id}}</td>
                    <td>{{$tag->active?"yes":'no'}}</td>
                    <td>{{$tag->title}}</td>
                    <td><img width="150px" height="150px" src="{{$tag->image?asset('images/tags/' . $tag->image) : asset('images/noimage.jpg')}}" alt="{{$tag->title}}"></td>
                    <td>
                        @hasanyrole('Super-Admin|Admin|Blogger')
                      <a class="btn btn-primary" href="{{route('tags.edit', $tag->id)}}">Edit</a> -
                    {{-- @endcan
                    @can ('view_tags', App\tag::class) --}}
                      <a class="btn btn-primary" href="{{route('tags.show', $tag->id)}}">View</a>
                      <form action="{{ route('tags.destroy', $tag->id) }}"
                        method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <br>
                        <button tag="submit" class="btn btn-primary">Delete</button>
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
                  {{-- <th>Image</th> --}}
                  {{-- @can ('view_tags','update_tags', App\Models\tag::class) --}}
                    <th>Actions</th>
                  {{-- @endcan --}}
                  </tr>
                </tfoot>
              </table>
              {{$tags->links()}}
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

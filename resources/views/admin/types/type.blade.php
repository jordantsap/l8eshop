@extends('admin.layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      tag : {{$tag->title}}
      {{-- @can ('update_categories', App\Models\Category::class) --}}
        <small><a class="btn btn-primary" href="{{route('tags.edit', $tag->id)}}">Edit</a> - <a
            class="btn btn-warning" href="javascript:history.back()">Go Back</a></small>
      {{-- @endcan --}}
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-body">
        <div class="form-group">
          <label for="title">Sub tag Title</label>
          <input tag="text" name="title" class="form-control" value="{{$tag->title}}" id="title" placeholder="Sub tag Title" disabled>
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <div class="form-control" disabled>
                @if (!empty($tag->category))
                    {{ $tag->category->title }}
                @else Null
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <div class="input-group">
                <img width="100%" max-height="200" src="{{ asset('images/tags/', $tag->image) }}" alt="{{ $tag->title }}">
            </div>
        </div>

      </div>
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

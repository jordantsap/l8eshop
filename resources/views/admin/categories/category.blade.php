@extends('admin.layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Category : {{$category->title}}
      {{-- @can ('update_categories', App\Models\Category::class) --}}
        <small><a class="btn btn-primary" href="{{route('categories.edit', $category->id)}}">Edit</a> - <a
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
          <label for="categoryid">category id</label>
          <input type="text" value="{{$category->id}}" class="form-control" id="categoryid" placeholder="category id" disabled>
        </div>
        <div class="form-group">
          <label for="categoryname">category Name</label>
          <input type="text" class="form-control" value="{{$category->title}}" id="categoryname" placeholder="Rokle Name" disabled>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="featured" value="1" @if ($category->featured == 1) {{ 'checked' }} @endif>
                Εμφάνιση στην Αρχική
            </label>
        </div>
        <div class="form-group col-sm-12 mt-2">
            <label for="image">Image</label><br>
            <img width="150" height="150" src="{{ asset('images/categories/' . $category->image) }}"
                alt="{{ $category->title }}">
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

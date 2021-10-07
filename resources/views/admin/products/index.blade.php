@extends('admin.layouts.app')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{__("admin.products")}}
        @can ('create_products', App\Models\Product::class)
          <small><a class="btn btn-primary" href="{{route('products.create')}}">{{__('form.addnew')}}</a></small>
        @endcan
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>id</th>
                    @hasanyrole('Super-Admin|Admin|Manager')
                      <th>{{__("admin.productquantity")}}</th>
                      <th>{{__("admin.active")}}</th>
                      <th>{{__("admin.addtosliderth")}}</th>
                      <th>{{__("admin.addtohometh")}}</th>
                    @endhasanyrole
                    <th>{{__("form.title")}}</th>
                    <th>{{__("form.categoryth")}}</th>
                    {{-- <th>Company</th> --}}
                    <th>{{__("form.logo")}}</th>
                    <th>{{__("form.description")}}</th>
                    @hasanyrole('Super-Admin|Admin|Manager')
                      <th>Actions</th>
                    @endhasanyrole
                  </tr>
                </thead>
                @if (count($products) > 0)
                  @foreach ($products as $product)
                    <tbody>
                    <tr>
                      <td>{{$product->id}}</td>
                      @hasanyrole('Super-Admin|Admin|Manager')
                      <th> {{ $product->quantity }}</th>
                      <td>{{$product->active ? 'yes' : 'no'}}</td>
                      <td>{{$product->slider ? 'yes' : 'no'}}</td>
                      <td>{{$product->homepage ? 'yes' : 'no'}}</td>
                    @endhasanyrole
                      <td>{{$product->title}}</td>
                      <td>
                        @if( ! empty($product->category)){{ $product->category->title }}
                        @else None
                        @endif
                      </td>
                      {{-- <td>
                        @if( ! empty($product->company)){{ $product->company->title }}
                        @else None
                        @endif
                      </td> --}}
                      <td><img width="150px" height="150px" src="{{asset('images/products/'.$product->logo)}}" alt="{{$product->title}}"></td>
                      <td>{{Str::limit($product->description, 20)}}</td>
                      <td>
                        @hasanyrole('Super-Admin|Admin|Manager')
                          <a class="btn btn-primary" href="{{route('products.edit', $product->id)}}">{{__('form.edit')}}</a> -

                          <a class="btn btn-primary" href="{{route('products.show', $product->id)}}">{{__('form.view')}}</a>

                          <form action="{{ route('products.destroy', $product->id) }}"
                            method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <br>
                            <button type="submit" class="btn btn-primary">{{__('form.remove')}}</button>
                        </form>
                        @endhasanyrole
                      </td>
                    </tr>
                    </tbody>
                  @endforeach
                  @else
                    no products
                @endif
                <tfoot>
                  <tr>
                    <th>id</th>
                    @hasanyrole('Super-Admin|Admin|Blogger')
                      <th>Quantity</th>
                      <th>Active</th>
                      <th>Slider</th>
                      <th>HomePage</th>
                    @endhasanyrole
                    <th>Title</th>
                    <th>Category</th>
                    {{-- <th>Company</th> --}}
                    <th>Image</th>
                    <th>Description</th>
                    @can ('view_products','update_products', App\Models\Product::class)
                      <th>Actions</th>
                    @endcan
                  </tr>
                </tfoot>

              </table>
              {{$products->links()}}
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

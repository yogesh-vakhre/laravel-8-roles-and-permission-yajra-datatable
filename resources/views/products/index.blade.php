@extends('layouts.app')

@section('title', 'Products Management')

@push('head-html')
 
@endpush

@section('content')


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">
          @can('product-create')
          <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
          @endcan
        </h4>

        <h6 class="card-subtitle"> </h6>
        <div class="table-responsive">
          <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Details</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
              <tr>
                <td>{{$loop->iteration }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->detail }}</td>
                <td>
                  <a class="btn waves-effect waves-light btn-rounded btn-sm btn-info"
                    href="{{ route('products.show',$product->id) }}">Show</a>
                  @can('role-edit')
                  <a class="btn waves-effect waves-light btn-rounded btn-sm btn-success"
                    href="{{ route('products.edit',$product->id) }}">Edit</a>
                  @endcan
                  @can('product-delete')
                  {!! Form::open(['method' => 'DELETE','route' => ['products.destroy',
                  $product->id],'style'=>'display:inline']) !!}
                  {!! Form::submit('Delete', ['class' => 'btn waves-effect waves-light btn-rounded btn-sm btn-danger'])
                  !!}
                  {!! Form::close() !!}
                  @endcan

                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Details</th>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
          {!! $products->render() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('footer-html')

@endpush
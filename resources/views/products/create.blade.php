@extends('layouts.app')

@section('title', 'Create New Product')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
  <strong>Whoops!</strong> There were some problems with your input.<br><br>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create New Product</h4>

        <div class="form-body">

          <div class="row">
            <form action="{{ route('products.store') }}" id="form-product" method="POST">
              @csrf

              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                  <div class="form-actions">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <a href="{{ route('products.index') }}" class="btn btn-dark">Back</a>
                  </div>
                </div>
              </div>


            </form>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@push('footer-html')
  @include('products.form-validation')
@endpush('footer-html')
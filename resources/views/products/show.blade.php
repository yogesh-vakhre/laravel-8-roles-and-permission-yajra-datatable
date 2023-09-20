@extends('layouts.app')

@section('title', 'Show Product')

@section('content')
 <div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Show Product</h4>

        <div class="form-body">

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Details:</strong>
                {{ $product->detail }}
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@extends('layouts.app')

@section('title', 'Create New Role')

@section('content')
 
@if (count($errors) > 0)
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
        <h4 class="card-title">Create New Role</h4>

        <div class="form-body">
          {!! Form::open(array('route' => 'roles.store','method'=>'POST' ,'id'=>'form-role')) !!}
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Permission:</strong>
                <br />
                @foreach($permission as $value)
                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                  {{ $value->name }}</label>
                <br />
                @endforeach
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
              <div class="form-actions">
                <button type="submit" class="btn btn-info">Submit</button>
                <a href="{{ route('roles.index') }}" class="btn btn-dark">Back</a>
              </div>
            </div>
          </div>
          {!! Form::close() !!}

        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@push('footer-html')
  @include('roles.form-validation')
@endpush('footer-html')
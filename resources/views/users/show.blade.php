@extends('layouts.app')

@section('title', 'Show User')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Show User</h4>

        <div class="form-body">

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Name:</strong>
                {{ $user->name }}
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Email:</strong>
                {{ $user->email }}
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Roles:</strong>
                @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                <label class="badge badge-success">{{ $v }}</label>
                @endforeach
                @endif
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
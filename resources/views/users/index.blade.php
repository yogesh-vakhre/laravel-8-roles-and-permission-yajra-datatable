@extends('layouts.app')

@section('title', 'User List')

@push('head-html')

@endpush

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"> <a class="btn btn-dark pull-right" href="{{ route('users.create') }}"> <i
              class="fa fa-plus"></i> Create New
            User</a></h4>



        <h6 class="card-subtitle"> </h6>
        <div class="row">
          <!-- Column -->
          <div class="col-md-6 col-lg-3 col-xlg-3">
            <div class="card card-hover">
              <div class="p-2 bg-primary text-center">
                <h1 class="font-light text-white">2,064</h1>
                <h6 class="text-white">Total Tickets</h6>
              </div>
            </div>
          </div>
          <!-- Column -->
          <div class="col-md-6 col-lg-3 col-xlg-3">
            <div class="card card-hover">
              <div class="p-2 bg-cyan text-center">
                <h1 class="font-light text-white">1,738</h1>
                <h6 class="text-white">Responded</h6>
              </div>
            </div>
          </div>
          <!-- Column -->
          <div class="col-md-6 col-lg-3 col-xlg-3">
            <div class="card card-hover">
              <div class="p-2 bg-success text-center">
                <h1 class="font-light text-white">1100</h1>
                <h6 class="text-white">Resolve</h6>
              </div>
            </div>
          </div>
          <!-- Column -->
          <div class="col-md-6 col-lg-3 col-xlg-3">
            <div class="card card-hover">
              <div class="p-2 bg-danger text-center">
                <h1 class="font-light text-white">964</h1>
                <h6 class="text-white">Pending</h6>
              </div>
            </div>
          </div>
          <!-- Column -->
        </div>
        <div class="table-responsive">
          <table id="user-data-table" class="table border table-striped table-bordered text-nowrap">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection

@push('footer-html')

<script type="text/javascript">
$(function() {

  var table = $('#user-data-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: "{{ route('users.index') }}",
    columns: [{
        data: 'id',
        name: 'id'
      },
      {
        data: 'name',
        name: 'name'
      },
      {
        data: 'email',
        name: 'email'
      },
      {
        data: 'roles',
        name: 'roles'
      },
      {
        data: 'action',
        name: 'action',
        orderable: false,
        searchable: false
      },
    ]
  });

});
</script>
@endpush
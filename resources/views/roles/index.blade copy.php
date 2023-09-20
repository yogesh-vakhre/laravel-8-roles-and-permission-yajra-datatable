@extends('layouts.app')

@section('title', 'Role List ')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">
          @can('role-create')
          <a class="btn btn-dark pull-right" href="{{ route('roles.create') }}"> <i class="fa fa-plus"></i> Create New
            Role</a>
          @endcan
        </h4>

        <h6 class="card-subtitle"> </h6>
        <div class="table-responsive">
          <table id="role-data-table" class="table border table-striped table-bordered text-nowrap">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            
            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Name</th>
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

  var table = $('#role-data-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: "{{ route('roles.index') }}",
    columns: [{
        data: 'id',
        name: 'id'
      },
      {
        data: 'name',
        name: 'name'
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


$('.deleteRecord').click(function(event) {
          var form =  $(this).closest("form");
          var id = $(this).data("id");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
</script>
@endpush
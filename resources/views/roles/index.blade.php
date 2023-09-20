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
<button type="button" class="btn btn-xs btn-danger btn-flat show-alert-delete btn-sm" data-toggle="tooltip"
  title='Delete'>Delete</button>

@endsection

@push('footer-html')

<script type="text/javascript">
function showAlertDelete(dataUrl) {
  $.ajaxSetup({
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
      });
  var dataId = $(".show-alert-delete").data("id");
  var dataUrl = $(".show-alert-delete").data("url");
  console.log(dataUrl);
  // event.preventDefault();
  swal({
    title: "Are you sure you want to delete this record?",
    text: "If you delete this, it will be gone forever.",
    icon: "warning",
    type: "warning",
    buttons: ["Cancel", "Yes!"],
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((willDelete) => {
    if (willDelete) {
      
      $.ajax({
        type: "DELETE",
        url: dataUrl,
        dataType: 'JSON',
        data:{            
            '_token': '{{ csrf_token() }}',
        },
        success: function(data) {
          if
        },
      });
    }
  });
}
 
</script>
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
  var form = $(this).closest("form");
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
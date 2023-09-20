<script src="{{ asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- apps -->
<!-- apps -->
<script src="{{ asset('dist/js/app-style-switcher.js')}}"></script>
<script src="{{ asset('dist/js/feather.min.js')}}"></script>
<script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{ asset('dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('dist/js/custom.min.js')}}"></script>
<script src="{{ asset('dist/js/jquery.validate.min.js')}}"></script>
<!--This page plugins -->
<script src="{{ asset('assets/extra-libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/extra-libs/datatables.net-bs4/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('dist/js/pages/datatable/datatable-basic.init.js')}}"></script>
<script src="{{ asset('dist/js/sweetalert.min.js')}}"></script>
<script type="text/javascript">
$("body").on("click", ".deleteRecord", function(e) {
   e.preventDefault();
   $.ajaxSetup({
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
      });
  let current_object = $(this);
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
      let action = current_object.attr('data-action');
      let token = "{{csrf_token()}}"; 
      let id = current_object.attr('data-id');
      //console.log(action,token,id);

      $.ajax({
        type: "POST",
        url: action,
        dataType: 'JSON',
        data:{            
            '_token': token,
            '_method': 'delete',
            'id':id
        },
        success: function(data) {
          if(data?.status){
            $('.dataTable').DataTable().ajax.reload();
          }
        },
      });
      // $('body').html("<form class='form-inline remove-form' method='post' action='" + action + "'></form>");
      // $('body').find('.remove-form').append('<input name="_method" type="hidden" value="delete">');
      // $('body').find('.remove-form').append('<input name="_token" type="hidden" value="' + token + '">');
      // $('body').find('.remove-form').append('<input name="id" type="hidden" value="' + id + '">');
      // $('body').find('.remove-form').submit();
    }
  });
});
</script>
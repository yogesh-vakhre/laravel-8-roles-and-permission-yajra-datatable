<script>
$(document).ready(function() {
  if ($("#form-product").length > 0) {
    $("#form-product").validate({
      rules: {
        name: {
          required: true,
          maxlength: 20,
        }, 
        detail: {
          required: true,
          maxlength: 100,
        },      
      },
      messages: {
        name: {
          required: "Name is required",
          maxlength: "Name cannot be more than 20 characters"
        },
        detail: {
          required: "Detail is required",
          maxlength: "Detail cannot be more than 100 characters"
        }  
      }
    });
  }
});
</script>
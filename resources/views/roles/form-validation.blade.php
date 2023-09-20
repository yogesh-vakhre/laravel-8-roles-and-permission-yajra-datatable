<script>
$(document).ready(function() {
  if ($("#form-role").length > 0) {
    $("#form-role").validate({
      rules: {
        name: {
          required: true,
          maxlength: 20,
        },      
      },
      messages: {
        name: {
          required: "Name is required",
          maxlength: "Name cannot be more than 20 characters"
        } 
      }
    });
  }
});
</script>
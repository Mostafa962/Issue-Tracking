<script type="text/javascript">
 //***********************************************************************
  //Add Record using Ajax to database
  function AddRecords(formID,route){
      $(formID).submit(function(event) {
       event.preventDefault()
         $.ajax({
          url:route,
          method:"POST",
          data: new FormData(this),
          contentType: false,
          cache:false,
          processData: false,
          dataType:"json",
            success: function(data){
                   $(formID)[0].reset();
                   swal("Good job!", "Record Added!", "success");
                   //Reloade Datatable that hold list that added
                   if (data.saved=='list_added')
                   {
                      $("#lists").DataTable().ajax.reload();
                   }
                   //append added list to TODO List column
                   else if (data.saved=='issue_added')
                   {
                    $('#tracking-lists').load(document.URL + ' #tracking-lists');
                   }
            },
             error: function(data){
              //show validation errors
              if (data.status ==422) {
                $.each(data.responseJSON.errors, function( index, value ) {
                  $("#validation-errors").append("<li><div class='alert alert-danger'>"+value+"</div></li>"); 
                });
              }
              else{
                swal("Sorry!", "Can't save data!", "error");
              }
            }
         });
    });
  }
    //Update Record using Ajax from database
  function UpdateRecords(formID,route){
    $(formID).submit(function(event) {
       event.preventDefault()
         $.ajax({
          url:route,
          method:"POST",
          data: new FormData(this),
          contentType: false,
          cache:false,
          processData: false,
          dataType:"json",
            success: function(data){
                $(formID)[0].reset();
                swal("Good job!", "Issue Updated!", "success");
                $('#tracking-lists').load(document.URL + ' #tracking-lists');
                },
            error: function(data){
              //show validation errors
              if (data.status ==422) {
                $.each(data.responseJSON.errors, function( index, value ) {
                  $("#validation-errors").append("<li><div class='alert alert-danger'>"+value+"</div></li>"); 
                });
              }
              else{
                swal("Sorry!", "Can't save data!", "error");
              }
            }
         });
      });
  }
  //***********************************************************************
    //delete Record using Ajax from database
  function deleteRecord(DataTableID,route){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(DataTableID).on('click', '.delete', function(){
            if(confirm('Are you sure you want to Delete ?'))
            {
                var content = $( this ).data( "content" );
                $.ajax({
                    url:route, 
                    method: 'POST',
                    data: {_token: CSRF_TOKEN, id: content},
                    dataType: 'JSON',
                    beforeSend: function(){
                      $(DataTableID).DataTable().ajax.reload();
                    },
                    success: function (data) { 
                       $(DataTableID).DataTable().ajax.reload();
                    }
                    ,error:function(data){
                       $(DataTableID).DataTable().ajax.reload();
                    }

                }); 
            }
        });
  }
 //check if mail already exist when adding email
function duplicateEmail(element,route){
        var email = $(element).val();
        var _token = $('input[name="_token"]').val();
        $.ajax({
            type: "POST",
            url: route,
            data: {email:email,_token:_token},
            dataType: "json",
            success: function(res) {
                if(res.exists){
                    $('#emailExists').fadeIn();
                    $("#SaveUser").attr("disabled", true);
                }else{
                    $('#emailExists').fadeOut();
                    $("#SaveUser").attr("disabled", false);
                }
            },
            error: function (jqXHR, exception) {
                   $('#emailExists').fadeOut();
                    $("#SaveUser").attr("disabled", false);
            }
        });
    }
</script>
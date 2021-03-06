$(document).ready(function() {
  $("form").on('submit', function() {

    var formData = new FormData($('#main-form')[0]);

    swal({
      title: "Just to confirm...",
      text: "Are you sure you're finished? Once you confirm, you can't change it!",
      type: "info",
      showCancelButton: true,
      closeOnConfirm: false,
      showLoaderOnConfirm: true,
    },
    function() {
      $.ajax({
        url: 'api/nominate/index.php',
        data: formData,
        processData: false,
        contentType: false,
        method: 'POST',
        success: function(data) {
          swal("Success!", "Your nomination has been counted. Thanks for your time!", "success");
        },
        error: function(error) {
          var message = error.responseJSON.message;
          swal("Oh no!", message, "error")
          console.log(error.responseJSON.message);
        }
      })
    });

    return false;
  })
})

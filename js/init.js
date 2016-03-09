$(document).ready(function() {
  $("form").on('submit', function() {

    var formData = new FormData($('#main-form')[0]);

    $.ajax({
      url: '/api/nominate/',
      data: formData,
      processData: false,
      contentType: false,
      method: 'POST',
      success: function(data) {
        console.log(data);
      },
      error: function(error) {
        console.log("error");
        console.log(error.responseJSON.message);
      }
    })

    return false;
  })
})

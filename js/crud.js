$(document).ready(function() {
  // crud buttons

$('#writebox').on('click', '#delete-blog-btn', function(e){
  e.preventDefault();


  var post = $('#update-blog').serialize();
  crud('delete.php', post);

});
$('#writebox').on('click', '#update-blog-btn', function(e){
  e.preventDefault();
  var post = $('#update-blog').serialize();
  crud('edit_post.php', post);

});
  function crud(url, data){
    $.ajax({
      url: url,
      type: 'POST',
      data: data
    })
    .done(function(response) {

      if(response == "edited"){
      $('#helper').html("updated").show();

      }
      else if (response == "deleted") {
        $('#helper').html("deleted").show();

      }
      else{console.log(response);}
    })
    .fail(function() {
      console.log("error");
    })
    .always(function(response) {
      $('#clear-btn').show();
    });

  }
});

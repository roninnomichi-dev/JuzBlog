$(document).ready(function() {
  // crud buttons
//use jq bind() or on() to target dynamic gen elem.



/*  $('#writebox').bind('submit', function(e) {
     var target = $(e.target);
     var post_id = target.serialize();
     if(target.is('#delete-blog-btn')){
       e.preventDefault();
       crud('delete.php', post_id);
     }
     else if (target.is('#update-blog-btn')) {
       e.preventDefault();
       crud('edit_post.php', post_id);
     }
     else {
       console.log('whoopsie');
     }
  })
*/
$('#writebox').on('click', '#delete-blog-btn', function(e){
  e.preventDefault();
//  var killpost = $('#hid_pid').val();

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

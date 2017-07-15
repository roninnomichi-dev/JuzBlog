$(document).ready(function() {
//ajax calls
//login ajax

$('#user-login-fp').submit(function(e){
e.preventDefault();
formData = $(this).serialize();
$.ajax({
  url: '/inc/in-ajax.php',
  type: 'post',
  //dataType: 'json',
  data: formData,
  success: function(data) {
   if(data == "yes"){
$('#btn-login').html('checking...');
  setTimeout(' window.location.href = "home.html.php"; ',1000);
} else if (data == "no") {
  $('#nup').css('display', 'block');
  $('#errmsg').html("You're not one of us! (yet...)");
}
},
error: function(data) {
  $('#nup').css('display', 'block');
$('#errmsg').html(data);
}
})
});

  $('#register').submit(function(e){
  e.preventDefault();
  formData = $(this).serialize();

  $.ajax({
    url: 'ajax.php',
    type: 'post',
    //dataType: 'json',
    data: formData
  })
  .done(function(data) {
    if (data == "yep") {
      $('#yep').css('display', 'block');

    }
  })
  .fail(function(data) {
    console.log(data);
    $('#nup').css('display', 'block');
  })
  .always(function() {
    console.log("complete");
  });
});
//register name check  keyup()

$('#post-blog').submit(function(e){
  e.preventDefault();
  formData = $(this).serialize();
  $.ajax({
    url: 'insert-ajax.php',
    type: 'POST',
    data: formData
  })
  .done(function(data) {
    if(data == "yep"){
	$('#post-blog').trigger('reset');
      $('#yep').show();
    }
  })
  .fail(function(data) {
    console.log(data);
  })
  .always(function() {
    console.log(formData);
  });

})
// dynamic user post list and form
$('.postlist li a').click(function() {
  var getpost = $(this).attr('id');
  $('#post-blog, #rite').addClass('gone');
  $('#edit, #edit-group').removeClass('gone');
  $('#writebox').load('updatepost_form.php', { post: getpost });
});

//CRUD btns (ajax - non ajax to app.js
/*
$('#update-blog-btn').click(function (e) {
  e.preventDefault();
  var newFormData = $('#update-blog').serialize();
  $.ajax({
    url: 'edit_post.php',
    type: 'post',
    data: newFormData
  })
  .done(function(data) {
    if(data == "post edited"){
    $('#yep').show();
    $('#yep p').html(data);
    }
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
});
/*delete post
$('#delete-blog-btn').click(function (e) {
  e.preventDefault();
    var killpost = $('#hid_pid').val();
    $.ajax({
      url: 'delete.php',
      type: 'post',
      data: killpost
    })

    .done(function(data) {
      if(data == "post deleted"){
      $('#yep').show();
      $('#yep p').html(data);
      $('#post-blog').trigger('reset');
      }
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    });

});


$('#writebox').on('click', '#delete-blog-btn', function(e) {
  e.preventDefault();
    var killpost = $('#hid_pid').val();
 $.post('delete.php',{ post: killpost }, function(data) {
   if(data == "Post deleted"){
    $('#yep').show();
    $('#yep p').html(data);
    $('#clear-btn').removeClass('gone');
    $('#post-blog').trigger('reset');
    }
  });

  });
*/


$('#write-blog-btn').click(function () {
  $('#update-blog').addClass('gone');
  $('#post-blog').removeClass('gone');
});
$('#user-login-fp').submit(function(e) {
  e.preventDefault();
  var here = $(location).attr('href');
  var postdata = $(this).serialize();
  $.get(here, postdata);
});
});

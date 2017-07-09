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
  setTimeout(' window.location.href = "home.html.php"; ',1500);
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
	$('#post-blog').reset();
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
/*
$('clicka').click(function (e) {
  e.preventDefault();
  id = $(this).id();

})
*/


});

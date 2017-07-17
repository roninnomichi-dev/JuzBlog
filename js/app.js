$(document).ready(function() {

//modals
//$('#mdModal').modal('show')
// FX

$('.content').hide();
$('#helper').hide();




$('.slida').click(function() {
  var target = $(this).attr('id');
  $('section[data-get=' + target + ']').slideToggle('slow');

});

$('#logout').submit(function(){
  data = $(this).attr(data-dir);
  $.get({ 'inc/logout.php', data})
}
)

$('#write-blog-btn').click(function () {
  $('#update-blog').addClass('gone');
  $('#post-blog').removeClass('gone');
})

});

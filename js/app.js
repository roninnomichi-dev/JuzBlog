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



$('#write-blog-btn').click(function () {
  $('#update-blog').addClass('gone');
  $('#post-blog').removeClass('gone');
})

});

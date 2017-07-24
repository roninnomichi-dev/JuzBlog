$(document).ready(function() {


$('.content').hide();
$('#helper').hide();
$('.progress').hide();

var duration = 2000;

$('#d1,#d2,#d3').each(function(i) {
   $(this).delay( i*(duration/2) ).animate({opacity:100}, duration);
});

$('.lmt').hover(function () {
  $(this).addClass('text-danger');

})
/*
$('.slida').click(function() {
  var target = $(this).attr('id');
  $('section[data-get=' + target + ']').slideToggle('slow');

});
*/


$('#write-blog-btn').click(function () {
  $('#update-blog').addClass('gone');
  $('#post-blog').removeClass('gone');
})

});

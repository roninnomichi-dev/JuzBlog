$(document).ready(function() {
// FX
$('.content').hide();
$('.slida').click(function() {
  var target = $(this).attr('id');
  $('p[data-get=' + target + ']').slideToggle('slow');

});
//non ajax crud ops etc
$('#clear-btn').click(function() {
  $(this).trigger('reset');
});

$('#writebox').on('click', '#clear-form-btn', function() {
  $('#update-blog').trigger('reset');
})
$('#write-blog-btn').click(function () {
  $('#update-blog').addClass('gone');
  $('#post-blog').removeClass('gone');
})

});

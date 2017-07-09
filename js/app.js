$(document).ready(function() {
// FX
$('.content').hide();
$('.slida').click(function() {
  var target = $(this).attr('id');
  $('p[data-get=' + target + ']').slideToggle('slow');

});
});

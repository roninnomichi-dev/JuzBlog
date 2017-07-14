$(document).ready(function() {
  // crud buttons
  $('#writebox').on('click',



  function crud(url, data){
    $.ajax({
      url: url,
      type: 'POST',
      //dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
      data: data
    })
    .done(function(response) {
      if(response == "updated"){
        $('#yep').show();
        $('#yep p').html(data);

      }
      else if (response == "deleted") {
        $('#yep').show();
        $('#yep p').html(data);
      }
      console.log("success");
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      console.log("complete", url, data, response);
    });

  }
});

var main = function() {
  $('form').click(function() {
    if ($('.status-box').val().trim()){
    var newtask = $('.status-box').val();
    $('<li class="panel callout radius">').text(newtask).prependTo('.list-of-tasks');
    $('.status-box').val('');
  }
  });
  $('form').keypress(function(event) {
    if ($('.status-box').val().trim()){
    if (event.keyCode === 13){
      var newtask = $('.status-box').val();
      $('<li class="panel callout radius">').text(newtask).prependTo('.list-of-tasks');
      $('.status-box').val('');
      event.preventDefault();
    }
    }
  });
}

$(document).ready(main);
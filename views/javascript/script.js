$( document ).ready(function() {
    $(document).delegate('.button', 'click', function() {
    var url = $('input[name="url"]').val();
    if (url) {$.ajax({
      url: '/index.php/shortener/shorten',
      type: "POST",
      dataType: 'html',
      data: {'url' : url},
      success: function(data) {
            $('input[name="url"]').val(data);
        }
    });
    } else { 
      alert ("Поле пустое!");
    };
    
  });


});
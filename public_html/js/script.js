function showMenu() {
    if (document.getElementById('mobile').style.display == "none")
    {document.getElementById('mobile').style.display = "block"}
    else
    {document.getElementById('mobile').style.display = "none"}
}

function hideMenu() {
    document.getElementById('mobile').style.display = "none"

}

$(function() {
      $('#form_mail').submit(function(e) {
        var $form = $(this);
        $.ajax({
          type: $form.attr('method'),
          url: $form.attr('action'),
          data: $form.serialize()
        }).done(function() {
          $('#results').css('display', 'inline-block');
          $('#button_send').css('display', 'none');
        }).fail(function() {
          alert('Возникла ошибка: ' + xhr.responseCode);
        });
        //отмена действия по умолчанию для кнопки submit
        e.preventDefault(); 
      });
    });


$(function() {
      $('#cake_del_form').submit(function(e) {
        var $form = $(this);
        $.ajax({
          type: $form.attr('method'),
          url: $form.attr('action'),
          data: $form.serialize()
        }).done(function() {
          $('#button_cake_del').css('display', 'none');
        }).fail(function() {
          alert('Возникла ошибка: ' + xhr.responseCode);
        });
        //отмена действия по умолчанию для кнопки submit
        e.preventDefault(); 
      });
    });
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
      $('#form_offer').submit(function(e) {
        var $form = $(this);
        $.ajax({
          type: $form.attr('method'),
          url: $form.attr('action'),
          data: $form.serialize()
        }).done(function() {
          $('#results2').css('display', 'inline-block');
          $('#button_offer').css('display', 'none');
        }).fail(function() {
          alert('Возникла ошибка: ' + xhr.responseCode);
        });
        //отмена действия по умолчанию для кнопки submit
        e.preventDefault(); 
      });
    });

$(function() {
      $('#bakery_form').submit(function(e) {
        var $form = $(this);
        $.ajax({
          type: $form.attr('method'),
          url: $form.attr('action'),
          data: $form.serialize()
        }).done(function() {
          location.reload();
          $('#results1').css('display', 'inline-block');
          $('#quant').css('display', 'none');
          $('#buy_button').css('display', 'none');
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

$(function() {
      $('#bakery_del').submit(function(e) {
        var $form = $(this);
        $.ajax({
          type: $form.attr('method'),
          url: $form.attr('action'),
          data: $form.serialize()
        }).done(function() {
          // $('#results_del').css('display', 'inline-block');
          // $('#bakery_del_btn').css('display', 'none');
          location.reload();
        }).fail(function() {
          alert('Возникла ошибка: ' + xhr.responseCode);
        });
        //отмена действия по умолчанию для кнопки submit
        e.preventDefault(); 
      });
    });

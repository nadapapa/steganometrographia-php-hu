$(function(){
// a radio button legyen kiválasztva, ha a mellette lévő cucc aktív
  $('#uzenet').focus(function(){
    $('#kodol').prop('checked', true);
    $('#random').prop('checked', false);
    $('#dekodol').prop('checked', false);
    $('#uzenet').attr('pattern','[ABCDEFGHIKLMNOPQRSTVWXZabcdefghiklmnopqrstvwxz\s]+');
  });
  $('#sor').focus(function(){
    $('#random').prop('checked', true);
    $('#kodol').prop('checked', false);
    $('#dekodol').prop('checked', false);
$('#uzenet').removeAttr('pattern');
  });
  $('#dekodol').focus(function(){
    $('#random').prop('checked', false);
    $('#kodol').prop('checked', false);
$('#uzenet').removeAttr('pattern');
  });

//         AJAX
// kiválasztja a küldendő adatot
  $('form').submit(function(e){
    e.preventDefault();

    if ($('input[value=random]:checked').length > 0) {
      formString = "select";
    }
    if ($('input[value=kodol]:checked').length > 0) {
      formString = "input[type=text]";
    }
    if ($('input[value=dekodol]:checked').length > 0) {
      formString = "textarea";
    }
// AJAX hívás
    $.ajax({
      url: 'smg-controller.php',
      type: 'post',
      data: $(formString).serialize(),

      success: function(data) {
        if ($('input[value=dekodol]:checked').length > 0) {
          $('#uzenet').val(data);
        }else{
          $('textarea').val(data);
        }
      },

      error: function(xhr, desc, err) {
        console.log(xhr);
        console.log("Details: " + desc + "\nError:" + err);
      }
    }); // end ajax call
  });
})

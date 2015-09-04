$(function(){

  var regex = /[ABCDEFGHIKLMNOPQRSTVWXZabcdefghiklmnopqrstvwxz]/;
  if ($('input[value=kodol]:checked').length > 0) {
    $('input[type=text]').keyup(function(){
        console.log("hiba");
      
    });
  }

  $('form').submit(function(e){
  if ($('input[value=random]:checked').length > 0) {
    formString = "select";
}
  if ($('input[value=kodol]:checked').length > 0) {
    formString = "input[type=text]";
}
if ($('input[value=dekodol]:checked').length > 0) {
  formString = "textarea";
}
    e.preventDefault();
    $.ajax({
      url: 'smg-controller.php',
      type: 'post',
      data: $(formString).serialize(),

      success: function(data) {
        $('textarea').val(data);
},
      error: function(xhr, desc, err) {
        console.log(xhr);
        console.log("Details: " + desc + "\nError:" + err);
      }
    }); // end ajax call
  });
})

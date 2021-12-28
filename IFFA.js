

/* form validation*/

function isEmail(email) {
  
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  return regex.test(email);
  
}

$("form").submit(function (e) {
    var error = "";

    if ($("#name").val() == "") {
        error += "The name field is required.<br>";
              }
  
    if ($("#email").val() == "") {
      error += "The email field is required.<br>";
    }

    if (isEmail($("#email").val()) == false) {                     
      error += "Your email you entered is not valid.<br>";      
  }

    if ($("#password").val() == "") {
      error += "The password field is required.<br>";
    }

    if ($("#passwordConfirm").val() == "") {
      error += "Retype your password in the confirm password section.<br>";
    }

    if($("#password").val() != $("#passwordConfirm").val()){
      error += "The passwords are't same.<br>";
    }

    if($("#agree").is(':checked')){
        error += "Agree to our user terms.<br>";
    }

    if (error != "") {
      $("#error").html(
        '<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' +
          error +
          "</div>"
      );

      return false;
    } else {
      return true;
    }
  });
 


  $("a[href^='#']").click(function(e) {
    e.preventDefault();
    
    var position = $($(this).attr("href")).offset().top;
  
    $("body, html").animate({
      scrollTop: position
    } );
  });

 


  function validate() {
    let x = document.forms["myForm"]["username"].value;
    let y = document.forms["myForm"]["password"].value;
    var error;
    if (x == "") {
        error+='Name is missing';
      }
    if(error==''){
        alert(error);
    }
    

    
  }
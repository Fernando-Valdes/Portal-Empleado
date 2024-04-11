$(document).on("submit", ".frm_login", function(event){
  event.preventDefault();
  var $form = $(this);
 
  var data_login = {
      email: $("#email",$form).val(),
      password: $("#password", $form).val() 
  }
  
  
  $.ajax({
      type:'POST',
      url: './Modelo/Login.php',
      data: data_login,
      dataType: 'json',
      async: true,
  })
  .done(function ajaxDone(res){
     console.log(res); 
     if(res.error !== undefined){
      Swal.fire({
          icon: 'error',
          title: 'La información ingresada es incorrecta',
          confirmButtonText: 'De acuerdo',
          footer: '&nbsp;<b>El correo o contraseña són incorrectos</b>'
        })
          return false;
     } 
     if(res.redirect !== undefined){
      window.location = res.redirect;
      }
  })
  .fail(function ajaxError(e){
      console.log(e);
  })
  .always(function ajaxSiempre(){
      console.log('Final de la llamada ajax.');
  })
  return false;
});
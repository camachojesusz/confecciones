/*=============================================>>>>>
= HABILITAR EL BOTON DE ENVÍO AL LEER LOS TERMINOS DE LICENCIA =
===============================================>>>>>*/
function validate_submit(obj){
  var d = document.f_message;
  if (obj.checked==true)
  {
    d.f_submit.disabled = false;
  }
  else
  {
    d.f_submit.disabled = true;
  }
}

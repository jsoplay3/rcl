function validacion(){

  // Validación Tipo de Documento

    // Validación No Vacio
    valor = document.getElementById("tipoDocumentoSolicitado").value;
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
      alert("El campo 'Tipo de documento' debe ser dilligenciado'");
      return false;
    }

    // Validación Tipo Numérico

    valor = document.getElementById("tipoDocumentoSolicitado").value;
    if( isNaN(valor) ) {
      alert("El campo 'Tipo de documento' posee un valor no valido");
      return false;
    }

  // Validación Documento
  valor = document.getElementById("documentoSolicitado").value;
  if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
    alert("El campo 'Documento' debe ser dilligenciado'");
    return false;
  }

  // Validación Nombre
  valor = document.getElementById("nombreSolicitado").value;
  if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
    alert("El campo 'Nombres' debe ser dilligenciado'");
    return false;
  }

    //Validación Solo Letras
    valor = document.getElementById("nombreSolicitado").value;
    numeros="0123456789";
    for(i=0; i<valor.length; i++){
          if (numeros.indexOf(valor.charAt(i),0)!=-1){
             alert("El campo 'Nombre' no puede contener números");
             return false;
           }
       }

    // Validación Apellido
       valor = document.getElementById("apellidoSolicitado").value;
       if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
         alert("El campo 'Apellidos' debe ser dilligenciado'");
         return false;
       }

       //Validación Solo Letras
       valor = document.getElementById("apellidoSolicitado").value;
       numeros="0123456789";
       for(i=0; i<valor.length; i++){
             if (numeros.indexOf(valor.charAt(i),0)!=-1){
                alert("El campo 'Apellidos' no puede contener números");
                return false;
              }
          }



  // Validación Género
  opciones = document.getElementsByName("generoSolicitado");

  var seleccionado = false;
  for(var i=0; i<opciones.length; i++) {
    if(opciones[i].checked) {
      seleccionado = true;
      break;
    }
  }

  if(!seleccionado) {
    alert("El campo 'Género' debe ser dilligenciado'");
    return false;
  }




  // Validación Fecha de Nacimiento
  valor = document.getElementById("fechaNacimientoSolicitado").value;
  if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
    alert("El campo 'Fecha de nacimiento' debe ser dilligenciado'");
    return false;
  }


  // Validación Correo Electrónico
  valor = document.getElementById("correoElectronicoSolicitado").value;
  if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
    alert("El campo 'Correo electrónico' debe ser dilligenciado'");
    return false;
  }

  // Validación Contraseña
  valor = document.getElementById("contraseniaSolicitado").value;
  if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
    alert("El campo 'Contraseña' debe ser dilligenciado'");
    return false;
  }






}

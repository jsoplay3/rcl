// Validations for company form

function validaDatos(){

  // Validation input nit ----------------------------------

  // Validation not empty
  let nit = document.getElementById("nit").value;
  if( nit == null || nit.length == 0 || /^\s+$/.test(nit) ) {
    alert ("El Nit de la empresa debe ser diligenciado");
    return false;
  }


  // Validation input nombre empresa ------------------------

  // Validation not empty
  let nombre_empresa = document.getElementById("nit").value;
  if( nombre_empresa == null || nombre_empresa.length == 0 || /^\s+$/.test(nombre_empresa) ) {
    alert("El nombre de la empresa debe ser diligenciado");
    return false;
  }

  // Validation only characters
  let nombre_empresa = document.getElementById("nombre_empresa").value;
  if( !(/[a-zA-Z ][0-9]{2,254}/.test(nombre_empresa)) ) {
    alert("El nombre de la empresa solo puede contener caracteres alfanuméricos");
    return false;
  }


  // Validation input direccion empresa --------------------

  // Validation not empty
  let direccion_empresa = document.getElementById("direccion_empresa").value;
  if( direccion_empresa == null || direccion_empresa.length == 0 || /^\s+$/.test(direccion_empresa) ) {
    alert("La dirección de la empresa debe ser diligenciada");
    return false;
  }


  // Validation input mail empresa --------------------

  // Validation not empty
  let mail_empresa = document.getElementById("mail_empresa").value;
  if( mail_empresa == null || mail_empresa.length == 0 || /^\s+$/.test(mail_empresa) ) {
    alert("El mail de la empresa debe ser diligenciada");
    return false;
  }

  // Validation format mail
  if ( !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(mail_empresa))){
    alert("El mail de la empresa debe tener un formato válido");
    return false;
   }


  // Validation input teléfono empresa --------------------

  // Validation not empty
  // let mail_empresa = document.getElementById("mail_empresa").value;
  // if( mail_empresa == null || mail_empresa.length == 0 || /^\s+$/.test(mail_empresa) ) {
  //   alert("El teléfono de la empresa debe ser diligenciado")
  //   return false;
  // }

  // Validation only numbers
  // let telefono_empresa = document.getElementById("telefono_empresa").value;
  // if( isNaN(telefono_empresa) ) {
  //   alert("El campo n`úmero de teléfono de la empresa solo puede ser tipo nuérico");
  //   return false;
  // }

  // Validation input celular empresa --------------------

  // Validation not empty
  let celular_empresa = document.getElementById("celular_empresa").value;
  if( celular_empresa == null || celular_empresa.length == 0 || /^\s+$/.test(celular_empresa) ) {
    alert("El celular de la empresa debe ser diligenciado");
    return false;
  }

  // Validation only numbers
  if( isNaN(celular_empresa) ) {
    alert("El campo número celular de la empresa solo puede ser tipo nuérico");
    return false;
  }

  // Validation input propietario ----------------------------

  // Validation not empty
  let propietario = document.getElementById("propietario").value;
  if( propietario == null || propietario.length == 0 || /^\s+$/.test(propietario) ) {
    alert("El nombre del propietario de la empresa debe ser diligenciado")
    return false;
  }

  // Validation only characters
  if( !(/[a-zA-Z ]{2,254}/.test(propietario)) ) {
    alert("El nombre del propietario de la empresa solo puede contener caracteres alfanuméricos");
    return false;
  }


  //Validation input direccion propietario ---------------------------

  // Validation not empty
  let direccion_propietario = document.getElementById("direccion_propietario").value;
  if( direccion_propietario == null || direccion_propietario.length == 0 || /^\s+$/.test(direccion_propietario) ) {
    alert("La dirección del propietario debe ser diligenciada");
    return false;
  }

  //Validation input mail propietario ----------------------------------

  // Validation not empty
  let mail_propietario = document.getElementById("mail_propietario").value;
  if( mail_propietario == null || mail_propietario.length == 0 || /^\s+$/.test(mail_propietario) ) {
    alert("El mail del propietario debe ser diligenciado");
    return false;
  }

  // Validation format mail
  if ( !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(mail_propietario))){
    alert("El mail del propietario debe tene run formato válido");
    return false;
   }

  //Validate input telefono propietario
  // Validation not empty
  // let telefono_propietario = document.getElementById("telefono_propietario").value;
  // if( telefono_propietario == null || telefono_propietario.length == 0 || /^\s+$/.test(telefono_propietario) ) {
  //   alert("El teléfono del propietario debe ser diligenciado")
  //   return false;
  // }

  // Validation only numbers
  // if( isNaN(telefono_propietario) ) {
  //   alert("El campo teléfono del propietario solo puede ser tipo nuérico");
  //   return false;
  // }


  // Validation input representante

  // Validation not empty
  let representante = document.getElementById("representante").value;
  if( representante == null || representante.length == 0 || /^\s+$/.test(representante) ) {
    alert("El nombre del representante de la empresa debe ser diligenciado")
    return false;
  }

  // Validation only characters
  if( !(/[a-zA-Z ]{2,254}/.test(representante)) ) {
    alert("El nombre del representante de la empresa solo puede contener letras");
    return false;
  }


  //Validation input direccion representante
  // let representante = document.getElementById("representante").value;
  // if( representante == null || representante.length == 0 || /^\s+$/.test(representante) ) {
  //   alert("El nombre del representante de la empresa debe ser diligenciado")
  //   return false;
  // }

  //Validation input mail representante

  // Validation not empty
  let mail_representante = document.getElementById("mail_representante").value;
  if( mail_representante == null || mail_representante.length == 0 || /^\s+$/.test(mail_representante) ) {
    alert("El mail del representante debe ser diligenciado");
    return false;
  }

  // Validation format mail
  if ( !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(mail_representante))){
    alert("El mail del representante debe tene run formato válido");
    return false;
   }


  //Validate input telefono representante

  // Validation not empty
  // let telefono_representante = document.getElementById("telefono_representante").value;
  // if( telefono_representante == null || telefono_representante.length == 0 || /^\s+$/.test(telefono_representante) ) {
  //   alert("El teléfono del representante debe ser diligenciado")
  //   return false;
  // }

  // Validation only numbers
  // if( isNaN(telefono_representante) ) {
  //   alert("El campo teléfono del representante solo puede ser tipo nuérico");
  //   return false;
  // }


}
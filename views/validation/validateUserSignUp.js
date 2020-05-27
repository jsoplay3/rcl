
function validateUserSignUp() {

    valor = document.getElementById("document").value;
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
        alert("El número de documento es solicitado")
      return false;
    }

    valor = document.getElementById("name").value;
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
        alert("El nombre de usuario es solicitado")
      return false;
    }

    valor = document.getElementById("mail").value;
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
        alert("El mail del usuario es solicitado")
      return false;
    }

    valor = document.getElementById("pass").value;
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
        alert("La contraseña del usuario es solicitada")
      return false;
    }
}

function validateLogin() {

    valor = document.getElementById("mail").value;
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
        alert("El mail del usuario es solicitado")
      return false;
    }

    valor = document.getElementById("pass").value;
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
        alert("La contraseña del usuario es solicitada")
      return false;
    }
}
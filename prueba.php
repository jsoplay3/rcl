<?php

  $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
  $nombres="juan33";
  if(preg_match($patron_texto, $nombres) ){
        echo "funciona";
  }
  else{
    echo "No funciona";
  }

?>

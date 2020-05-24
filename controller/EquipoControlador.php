<?php

class EquipoControlador{

  public function __construct(){
  }

  public function listarEquipo(){
    $option = "
    <option value=''></option>
    <option value='1'>Voluntarios</option>
    <option value='2'>Los Ganadores</option>
    <option value='3'>Gladiadores</option>
    ";
    return $option;
  }

}

?>

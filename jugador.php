<?php

/**
*Clase Jugador
*/
class Jugador{

  //Propiedades
  private $numeroJug;
  private $puntos = 0;

  //Constructor
  public function __construct($numeroJug){
    $this->numeroJug = $numeroJug;
  }

  //getters y setters
  public function getNumeroJugador(){
    return $this->numeroJug;
  }

  public function setNumeroJugador($numeroJug){
    $this->numeroJug = $numeroJug;
  }

  public function getPuntos(){
    return $this->puntos;
  }

  public function setPuntos($puntos){
    $this->puntos = $puntos;
  }

  //Métodos de la Clase
  public function addPuntos($puntos){
    $this->puntos += $puntos;
  }
}

?>

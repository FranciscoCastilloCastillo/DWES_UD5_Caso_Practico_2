<?php

include_once("jugador.php");

/**
*Clase Equipo
*/
class Equipo{

  //Propiedades
  private $jugadores = [];

  //Constructor
  public function _construct(){

  }

  //Métodos de la clase

  //getters y setters
  public function getJugadores(){
    return $this->jugadores;
  }

  public function setJugadores($jugadores){
    $this->jugadores = $jugadores;
  }

  //Añado un jugador al array
  public function addJugador(Jugador $jugador){
    $jugadores[] = $jugador;
  }

  //Recorro el vector de jugadores y, si conincide el dorsal, lo muestro
  //por pantalla
  public function getJugador($numeroJugador){

    $jugador = null;
    for($i=0;$i<sizeof($this->jugadores);$i++){
    	$buscarJugador = $this->jugadores[$i];
      if($numeroJugador == $buscarJugador->getNumeroJugador()){
        echo '--------------Jugador '.$numeroJugador. '---------------<br />';
      	$jugador = $buscarJugador;
        break;
      }
    }

    print_r($jugador);
  }

  //Obtenemos el total de puntuación del equipo
  public function getTotal(){

    $total = 0;
    for($i=0;$i<sizeof($this->jugadores);$i++){
    	$total+= $this->jugadores[$i]->getPuntos();
    }

    echo $total;
  }
}
?>

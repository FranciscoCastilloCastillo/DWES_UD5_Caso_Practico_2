<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DWES</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <header>
      <h2>DESARROLLO WEB ENTORNO SERVIDOR</h2>
      <h4>Temporada Baloncesto</h4>
    </header>
    <article>
      <?php

        //Llamamos a las clases necesarias
        include_once("equipo.php");

        //Creamos nueve jugadores y un equipo
        $equipo = new Equipo();

        //De momento, la función addJugador no funciona
        $array_nuevo = $equipo->getJugadores();

        //Evitamos el texto de tirada 0. Va desde 1 hasta 12
        $dorsal = 1;

        echo "<h4>Equipo de baloncesto</h4>";

        for ($i=0; $i <9 ; $i++) {
          $puntos = rand(20,100);
          $jug = new Jugador($dorsal);
          $jug->addPuntos($puntos);

          //La siguiente sentencia no funciona
          //$equipo->addJugador($jug);

          //Usamos esta sentencia
          $array_nuevo[] = $jug;

          //Mostramos la información de los jugadores
          echo "Jugador ";
          echo $jug->getNumeroJugador();
          echo " - Pts: ";
          echo $jug->getPuntos();
          echo "</br> ";
          $dorsal++;
        }

        //Seteamos el equipo de jugadores
        $equipo->setJugadores($array_nuevo);

        //Total de puntos
        echo "Total: ";
        $equipo->getTotal();
        echo " puntos</br>";

        //Mostramos la información de un jugador aleatorio
        $equipo->getJugador(rand(1,9));
      ?>
    </article>
    <footer>
      <h5>Alumno: Francisco Manuel Castillo Castillo</h5>
      <h5>Asignatura: Desarrollo Web Entorno Servidor</h5>
    </footer>
  </body>
</html>

<html lang="en">
  <head>
    <title>Prueba</title>
  </head>
  <body> 
    <?php  
      require_once('Competicion.php');

      $competidor1 = new Corredor("Alonso",14);
      $competidor1->anadirCarrera(10);
      $competidor1->anadirCarrera(10);
      $competidor1->anadirCarrera(10);
      $competidor1->anadirCarrera(10);
      $competidor1->mostrarTiempos();
      $competidor2 = new Corredor("Sainz",55);
      $competidor2->anadirCarrera(30);
      $competidor2->anadirCarrera(30);
      $competidor2->anadirCarrera(30);
      $competidor2->anadirCarrera(30);
      $competidor3 = new Corredor("Esteve",28);
      $competidor3->anadirCarrera(20);
      $competidor3->anadirCarrera(20);
      $competidor3->anadirCarrera(20);
      $competidor3->anadirCarrera(20);
      $competicion1 = new Competicion();
      $competicion1->anadirCorredor($competidor1);
      $competicion1->anadirCorredor($competidor2);
      $competicion1->anadirCorredor($competidor3);
      echo "<br>Media: ".$competicion1->mediaprimeraCarrera();
      echo $competicion1->corredormasrapido()."<br>";
      print_r($competicion1->corredores15seg());
      echo "<br>";
      print_r($competicion1->corredoresE())
    ?>
  </body>
</html>
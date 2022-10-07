<html>
    <head>
        <title>Corredor</title>
    </head>
    <body>
        <?php
            class Competicion extends Corredor
            {
                private $corredores = array();

                function anadirCorredor($corredor)
                {

                }
                function anadirCarreraACorredor($idcorredor,$tiempo)
                {   
                    $nombre -> getNombre();
                    $corredor = new Corredor($idcorredor,$nombre);
                    $corredor->anadirCarrera($tiempo);
                    array_push($corredores,$idcorredor,$corredor);
                }
                function mediaprimeraCarrera()
                {

                }
                function corredormasrapido()
                {

                }
                function corredores15seg()
                {

                }
                function corredoresE()
                {

                }
            }
        ?>
    </body>
</html>
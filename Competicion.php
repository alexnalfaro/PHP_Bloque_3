<html>
    <head>
        <title>Competicion</title>
    </head>
    <body>
        <?php
            require ('Corredor.php');
            class Competicion
            {
                private $corredores;

                function __construct()
                {
                    $this->corredores = [];
                }

                function anadirCorredor($corredor)
                {
                    $array = $this->corredores;
                    $array = $array + [$corredor->getId() => $corredor];

                }
                function anadirCarreraACorredor($idcorredor,$tiempo)
                {   
                    $array = $this->corredores;
                    $array[$idcorredor]->anadirCarrera($tiempo);
                }
                function mediaprimeraCarrera()
                {
                    $array = $this->corredores;
                    $media = 0;
                    foreach $array as $idcorredor => $corredor)
                    {
                        $media = $media + $corredor->getTiempos()[0];
                    }
                    return $media / count($array);
                }
                function corredormasrapido()
                {
                    $array = $this->corredores;
                    $fastest = [];
                    $arrayCarreras;
                    foreach ($array as $idcorredor => $corredor)
                    {
                        $arrayCarreras = $
                    }
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
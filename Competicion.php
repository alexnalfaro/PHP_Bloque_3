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
                    foreach ($array as $idcorredor => $corredor)
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
                        $arrayCarreras = $corredor->getTiempos();
                        for ($i=0;$i<count($arrayCarreras);$i++)
                        {
                            array_push($fastest,$arrayCarreras[$i]);
                        }
                    }
                    return "El corredor con la carrera más rapida es: ".max($fastest);
                }
                function corredores15seg()
                {
                    $arrayCarreras;
                    $seleccionados = [];
                    $array = $this->corredores;

                    foreach ($array as $idcorredor => $corredor)
                    {
                        $ccarreras = 0;
                        $arrayCarreras = $corredor->getCarreras();
                        for ($i=0;$i<count($arrayCarreras);$i++)
                        {
                            if ($arrayCarreras[$i] > 15)
                            {
                                $ccarreras++;
                            }
                        }
                        if (ccarreras > 2)
                        {
                            $nombre = $corredor->getNombre();
                            array_push($seleccionados, $nombre);
                        }
                    }
                    return $seleccionados;
                }
                function corredoresE()
                {
                    $terminae = [];
                    $array = $this->corredores;
                    foreach ($array as $idcorredor => $corredor) 
                    {
                        $nombre = $corredor->getNombre();
                        if ((substr($nombre, -1) === 'e') ||((substr($nombre, -1) === 'E')))
                        {
                            array_push($terminae, $nombre);
                        }
                    }
                    return $terminae;
                }
            }
        ?>
    </body>
</html>
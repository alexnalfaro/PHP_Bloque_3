<html>
    <head>
        <title>Corredor</title>
    </head>
    <body>
        <?php
            class Corredor
            {
                private $nombre;
                private $id;
                private $tiempos;

                function __construct($n,$i)
                {
                    $this->nombre = $n;
                    $this->id = $i;
                    $this->tiempos=[];
                }

                function anadirCarrera($tiempo)
                {
                   $array = $this->tiempos;
                   $largo = count($array);
                   try
                    {
                        if ($largo <= 5)
                        {
                            array_push($array,$tiempo);
                        }
                        else if ($largo === 5)
                        {
                            throw new Exception ("Numero maximo de carreras alcanzado");
                        }
                        else if ($tiempo < 5)
                        {
                            throw new Exception ("La carrera es demasiado corta");
                        }
                    }
                    catch (Exception $e)
                    {
                        return $e->getMessage();
                    }
                }

                function getNombre()
                {
                    return $this->nombre;
                }
                function getId()
                {
                    return $this->id;
                }
                function getTiempos()
                {
                    return $this->tiempos;
                }
                function mostrarTiempos()
                {
                    print_r($this->tiempos);
                }
            }
        ?>
    </body>
</html>
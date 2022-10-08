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
                   try
                    {
                        if (count($array) >= 5)
                        {
                            throw new Exception ("No se pueden añadir mas carreras");
                        }
                        else if ($tiempo > 5)
                        {
                            throw new Exception ("La carrera no puede ser tan corta");
                        }
                        else
                        {
                            array_push($array,$tiempo); 
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
            }
        ?>
    </body>
</html>
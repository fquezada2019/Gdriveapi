<?php

if (isset($_GET["key"]) && isset($_GET["codigo"]) && isset($_GET["correo"]) )
{
    $key = $_GET["key"];
    if ($key == 'a2d3c4')
    {
        require __DIR__ . '/sharedrv/funciones.php';
        $res = compartir($_GET['codigo'],$_GET['correo']);
        print 'compartido: '. $res  .' permisos';
    }
    
}


?>
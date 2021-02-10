<?php

if (isset($_GET["key"]) )
{
    $key = $_GET["key"];
    if ($key == 'a2d3c4')
    {
        require __DIR__ . '/sharedrv/funciones.php';
        $res = batch_borrado_permisos();
        print 'borrados: '. $res  .' permisos';
    }
    
}


?>
<?php

if (isset($_GET["key"]) && isset($_GET["id"]) && isset($_GET["correo"]) )
{
    $key = $_GET["key"];
    if ($key == 'a2d3c4')
    {
        require __DIR__ . '/sharedrv/funciones.php';
        $res = compartir_xid($_GET['id'],$_GET['correo']);
        print 'compartido: '. $res  .' permisos';
    }
    
}


?>
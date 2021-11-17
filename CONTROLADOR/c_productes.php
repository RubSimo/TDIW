<?php

    require_once __DIR__ . '/../MODEL/connectaBD.php';
    require_once  __DIR__ . '/../MODEL/m_productes.php';

    $ID_categoria = $_GET['id_categoria'] ?? NULL;
    $Productes = getProductes($connexio, $ID_categoria);

    include __DIR__ . '/../VISTA/v_productes.php';

?>
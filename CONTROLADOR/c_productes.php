<?php

    require_once __DIR__ . '/../MODEL/connectaBD.php';
    require_once  __DIR__ . '/../MODEL/m_productes.php';

    $id_categoria = $_GET['id_categoria'] ?? NULL;
    $Productes = getProductes($connexio, $id_categoria);

    include __DIR__ . '/../VISTA/v_productes.php';

?>
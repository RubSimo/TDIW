<?php

    require_once __DIR__ . '/../MODEL/connectaBD.php';
    require_once  __DIR__ . '/../MODEL/m_productes.php';

    $ID_producte = isset($_GET['id_producte']) ? $_GET['id_producte'] : NULL;
    $descripcio = getDetall($connexio,$ID_producte);

    include __DIR__ . '/../VISTA/v_producte_detail.php';

?>

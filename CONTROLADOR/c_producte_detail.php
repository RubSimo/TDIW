<?php

    require_once __DIR__ . '/../MODEL/connectaBD.php';
    require_once  __DIR__ . '/../MODEL/m_categories.php';

    $id_producte = isset($_GET['id_producte']) ? $_GET['id_producte'] : NULL;
    $producte_detail = getDetail($connexio,$id_producte);

    include __DIR__ . '/../VISTA/v_producte_detail.php';

?>

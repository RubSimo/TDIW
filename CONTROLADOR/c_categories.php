<?php

    require_once __DIR__ . '/../MODEL/connectaBD.php';
    require_once  __DIR__ . '/../MODEL/m_categories.php';

    $categories = getCategories($connexio);

    include __DIR__ . '/../VISTA/v_categories.php';

?>
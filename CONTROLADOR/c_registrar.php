<?php
    require_once__DIR__ . "/../MODEL/connectaBD.php";
    require_once__DIR__ . "/../MODEL/m_registrar.php";

    $connexio = connectaBD();
    $resultat =  enregistrarDades($connexio);
?>

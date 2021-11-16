<?php

function confirmaRegistre($connexio){

    $m_nom = $_POST['v_nom'];
    $m_email =$_POST['v_email'];
    $m_adreca = $_POST['v_adreca'];
    $m_poblacio = $_POST['v_poblacio'];
    $m_codi_postal = $_POST['v_codi_postal'];


    $m_password = password_hash($_POST['v_password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuaris (nom, email, password, adreca, poblacio, codi_postal) VALUES ('$m_nom', '$m_email', '$m_password','$m_adreca', '$m_poblacio', '$m_codi_postal' )";
    $inserir = $connexio->prepare($sql);
    $inserir->bindValue(":nom", $m_nom, PDO::PARAM_STR);
    $inserir->bindValue(":email", $m_email, PDO::PARAM_STR);
    $inserir->bindValue(":password", $m_password, PDO::PARAM_STR);
    $inserir->bindValue(":adreca", $m_adreca, PDO::PARAM_STR);
    $inserir->bindValue(":poblacio", $m_poblacio, PDO::PARAM_STR);
    $inserir->bindValue(":codi_postal", $m_codi_postal, PDO::PARAM_INT);

    $inserir->execute();

}

?>

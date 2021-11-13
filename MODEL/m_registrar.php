<?php
    function Registrar($connexio)
    {
        $nom = $_POST['user_reg'];
        $email = $_POST['email_reg'];
        $password = $_POST['password'];
        $adreca = $_POST['adreca'];
        $poblacio = $_POST['poblacio'];
        $codi_postal = $_POST['codi_postal'];

        $filter_nom = filter_var($nom, FILTER_SANITIZE_STRING);
        $filter_email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $filter_password = filter_var($password, FILTER_SANITIZE_STRING);
        $filter_adreca = filter_var($adreca, FILTER_SANITIZE_STRING);
        $filter_poblacio = filter_var($poblacio, FILTER_SANITIZE_STRING);
        $filter_codi_postal = filter_var($codi_postal, FILTER_SANITIZE_STRING);

        if($filter_email == false)
        {
            $comp = false;
        }
        else
        {
            $comp = true;
            $hash = password_hash($_POST['pass_reg'], PASSWORD_DEFAULT);

            $sql = "INSERT INTO usuario(nom, email, password, adreca, poblacio, codi_postal ) VALUE ('$filter_nom','$filter_email', '$hash', '$filter_adreca', '$filter_poblacio', '$filter_codi_postal') ";

            $atmt = $connexio->prepare($sql);
            $atmt->bindValue('nom', $filter_nom);
            $atmt->bindValue('email', $filter_email);
            $atmt->bindValue('password', $hash);
            $atmt->bindValue('adreca', $filter_adreca);
            $atmt->bindValue('poblacio', $filter_poblacio);
            $atmt->bindValue('codi_postal', $filter_codi_postal);

            $atmt->execute();
        }
        return $comp;
    }


?>

<?php


function enregistrarDades($connexio)
{

    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $adreca = $_POST['adreca'];
    $poblacio = $_POST['poblacio'];
    $codi_postal = $_POST['codi postal'];

    $consulta = $connexio->prepare("INSERT INTO usuaris(nom,email,password,adreça,població,codi postal)VALUES(:nom,:email,:password,:adreca,:pobalcio,:codi_postal)");
    $consulta->bindParam(':nom',$nom);
    $consulta->bindParam(':email',$email);
    $consulta->bindParam(':password',$password);
    $consulta->bindParam(':adreca',$adreca);
    $consulta->bindParam(':poblacio',$poblacio);
    $consulta->bindParam(':codi_postal',$codi_postal);

    if($consulta->execute()){
        echo"Dades guardades correctament";
    }else{
        echo"No s'han guardat les dades";
    }
}
?>



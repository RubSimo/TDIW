<?php


function enregistrarDades($connexio){
    try{
        include("./MODEL/m_connectaBD.php");
        $connexio = connectaBD();
        $consulta = $connexio->prepare("INSERT INTO usuaris (nom, email, password, adreça, població, codi) VALUES (:nom, :email, :password, :adreça, :població, :codi)");

        $consulta->bindParam(':nom', $_POST["nom"],PDO::PARAM_INT);
        $consulta->bindParam(':email', $_POST["email"],PDO::PARAM_INT);
        $consulta->bindParam(':password', $_POST["password"],PDO::PARAM_INT);
        $consulta->bindParam(':adreça', $_POST["adreça"],PDO::PARAM_INT);
        $consulta->bindParam(':població', $_POST["població"],PDO::PARAM_INT);
        $consulta->bindParam(':codi postal', $_POST["codi postal"],PDO::PARAM_INT);

        $consulta->execute();

        $resultat = $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOException $exception){
        echo "Error: " . $exception->getMessage();

    }


}


?>


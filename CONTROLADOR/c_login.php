<?php
include("./MODEL/m_connectaBD.php");
$connexio =connectaBD();

        $email= $_POST['email'];
        $password= $_POST['password'];
        $q="SELECT COUNT(*) as contar from usuaris where $email = '$email' and $password = '$password'";
        $consulta= mysqli_query($connexio,$q);
        $array = mysqli_fetch_array($consulta);

        if($array['contar'] > 0){
            $_SESSION['username'] = $email;
            header("location : ../index.html");
        }
        else{
            echo"Correu o contrasenya incorrectes";
        }


?>

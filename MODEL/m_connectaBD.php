<?php
function connectaBD()
{
    $server = "127.0.0.1";
    $user = "root";
    $password = "";
    try {
        $connexio = new PDO("mysql:host=$server;dbname=ersc sneakers;port=3306;charset=utf8mb4", $user, $password);
        $connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $exc) {
        echo "Connection error:" . $exc->getMessage();
    }
    return $connexio;
}
?>



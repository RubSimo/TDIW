<?php
    function getProductes($connexio, $id)
    {
    $sql = 'SELECT * FROM productes WHERE id_categoria =:id_categoria';

    $stmt = $connexio->prepare($sql);

    $id_categoria = $id;

    $stmt->bindValue('id_categoria', $id_categoria);
    $stmt->execute();

    $producte = $stmt->fetchAll(PDO::FETCH_ASSOC );

    return $producte;
    }
?>
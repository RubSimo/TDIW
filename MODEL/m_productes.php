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


function getDetall($connexio, $id){

    try{
        $sql = 'SELECT * FROM productes WHERE id_producte = :id_producte';

        $stmt = $connexio->prepare($sql);

        $idProducte = $id;

        $stmt->bindValue('id_producte', $idProducte);
        $stmt->execute();

        $detalls_resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    return ($detalls_resultat);

}
?>
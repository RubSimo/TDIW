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

    function getDetail($connexio, $id_producte){

        try{
            $idProducte = $id_producte;
            $getDetail = $connexio->prepare('SELECT * FROM productes WHERE id_producte =:id_producte');
            $getDetail->bindValue('id_producte', $idProducte);
            $getDetail->execute();
            $m_detail = $getDetail->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        return ($m_detail);

    }
?>
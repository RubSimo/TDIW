<?php

    function getCategories($connexio){
        $sql = 'SELECT id_categoria,nom,img FROM categories';

        $stmt = $connexio->prepare($sql);
        $stmt->execute();

        $categories = $stmt->fetchall(PDO::FETCH_ASSOC);

        return $categories;
    }

?>
<div class="guia">
    <div class="categories">
        <?php foreach($categories as $categoria): ?>
            <?php $auxID =  $categoria['id_categoria']; ?>

            <div class="list_cat">
                <li>
                   <h2><?php //$categoria['nom'] = htmlspecialchars($categoria['nom']);
                        //echo $categoria['nom']; ?>
                    </h2>
                    <img class="foto_categoria" src="<?php echo $categoria['img']; ?>" onclick="v_productes(<?php echo $auxID; ?>)"/>

                </li>
            </div>
        <?php endforeach;?>
    </div>

    <script>
        function v_productes(id){
            $('.categories').load('index.php?accio=getProductes&id_categoria='+id);
        }
    </script>

</div>

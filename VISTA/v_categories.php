<div class="guia">
    <div class="categories">
        <?php foreach($categories as $categoria): ?>
            <?php $auxID =  $categoria['id_categoria']; ?>

            <div class="list_cat">
                <li>
                    <h2><?php $categoria['nom'] = htmlspecialchars($categoria['nom']);
                        echo $categoria['nom']; ?>
                    </h2>
                    <img src="<?php echo $categoria['img']; ?>" onclick="productes(<?php echo $auxID; ?>)"/>

                </li>
            </div>
        <?php endforeach;?>
    </div>

    <script>
        function productes(id){
            $('.categoria').load('index.php?accio=getProductes&id_categoria='+id);
        }
    </script>
</div>

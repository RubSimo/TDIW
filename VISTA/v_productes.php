<div class= "guia">
    <div class="productes">
        <ul>
            <?php foreach ($Productes as $productes): ?>

                <div class="list_prod">
                    <li>
                        <img class="fotos" src="<?php echo $productes['img']; ?>">

                        <div class="text">
                            <h2> <?php echo $productes['nom']; ?> </h2>
                            <h2> <?php echo $productes['preu']; ?> </h2>
                            <button class="button" onclick="veureDetail(<?php $productes['id_producte'] ?>)">Descripció</button>
                        </div>
                    </li>
                </div>
            <?php endforeach;?>
        </ul>
    </div>
<script>
    function veureDetail(id){
    $('.productes').load('index.php?accio=veureProducte&id_producte='+id)
}
    </script>
</div>

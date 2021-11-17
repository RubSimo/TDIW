<div class= "guia">
    <div class="products">
        <ul>
           <?php foreach ($Productes as $p){ ?>
            <?php $auxID = $p['id_producte']; ?>
                <div class="list_prod">
                    <li>
                        <img class="fotos" src="<?php echo $p['img']; ?>">
                        <h2> <?php echo $p['nom']; ?> </h2>
                        <h2> <?php echo $p['preu']; ?> </h2>
                        <button class="button" onclick="$('.Pproductes').load('index.php?accio=veureProducte&id_producte='+(<?php echo $auxID ?>));"> Descripció </button>
                    </li>
                </div>
            <?php }?>
        </ul>
    </div>
<script>
    //function veureDetall(id){
     // $('.Pproductes').load('index.php?accio=veureProducte&id_producte='+id);}
</script>
</div>

<div class="productes">
    <ul>
        <?php foreach ($Productes as $productes): ?>
            <?php $auxID = $productes['id']; ?>

            <div class="list_prod">
                <li>
                    <div class="text">
                        <h2> <?php echo $productes['nom']; ?> </h2>
                    </div>

                    <img class="fotos" src="<?php echo $productes['img']; ?>">

                    <div class="text">
                        <h2> <?php echo $productes['nombre']; ?> </h2>
                        <h2> <?php echo $productes['price']; ?> € </h2>

                    </div>
                </li>
            </div>
        <?php endforeach;?>
    </ul>
</div>

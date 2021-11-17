<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Productes</title>
    <link rel="stylesheet" type ="text/css" href="css/css.css">
    <script type="text/javascript" src="js/funcions.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
<div class = "Pproductes">

<header>
    <?php require __DIR__ . '/CONTROLADOR/c_header.php';?>
</header>

<div class = "inici">
    <?php require __DIR__ . '/CONTROLADOR/c_productes.php';?>
</div>

<footer class="peu">
    <?php require __DIR__ . '/CONTROLADOR/c_footer.php';?>
</footer>

</div>
</body>
</html>


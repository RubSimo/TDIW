<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inici</title>
    <link rel="stylesheet" type ="text/css" href="css/css.css">
    <script type="text/javascript" src="js/funcions.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body class="c_inici">
<header>
    <?php require __DIR__ . '/CONTROLADOR/c_header.php';?>
</header>

<div class = "inici">
    <?php require __DIR__ . '/CONTROLADOR/c_iniciar.php';?>
</div>

<footer class="peu">
    <?php require __DIR__ . '/CONTROLADOR/c_footer.php';?>
</footer>

</body>
</html>

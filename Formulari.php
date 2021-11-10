<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ERSC sneakers</title>
    <link rel="stylesheet" type ="text/css" href="css/formulari.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src ="formulari.js"></script>

</head>
<body>

<header>
    <nav class="menu"><ul>
        <li><a href="index.html">Inici</a></li>
        <li><a href="Formulari.php">Registrar-se</a></li>
        <li><a href="iniciarSessio.html">Iniciar sessió</a></li>
        <li><a href="index.html">Marques</a>
            <ul><li><a href="index.html">Nike</a></li>
                <li><a href="index.html">Adidas</a></li>
                <li><a href="index.html">Vans</a></li>
                <li><a href="index.html">Jordan</a></li></ul>
        </li>
        <li><a href="talles.html">Talles</a></li>
        <li><a href="index.html">Ajuda</a></li>
        <li><a href="index.html">Carrito</a></li>
    </ul></nav>

</header>

<div id="d1">


    <section>
        <form method="POST" /*action="registrar.php" onsubmit="return confirmaRegistre();" class="formulario"*/>

            <h1>Registra't</h1>
            <div id ="contenidor">

                <div class="input-contenedor">
                    <i class="fas fa-user-alt"></i>
                    <input type="text" name="nom" placeholder="Nom" required>
                </div>
                <div class="input-contenedor">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Correu electronic" required>
                </div>
                <div class="input-contenedor">
                    <i class="fas fa-key"></i>
                    <input type="password" name="password"placeholder="Contrasenya" required>
                </div>
                <div class="input-contenedor">
                    <i class="fas fa-map-marker-alt"></i>
                    <input type="text"  name="adreça" maxlength="30" minlength="1" placeholder="Adreça" required>
                </div>
                <div class="input-contenedor">
                    <i class="fas fa-location-arrow"></i>
                    <input type="text" name="població" maxlength="30" minlength="1" placeholder="Població" required>
                </div>
                <div class="input-contenedor">
                    <i class="fas fa-mail-bulk"></i>
                    <input type="text" name="codi postal" maxlenght="5" minleght="5" pattern="^[0-9]+$" placeholder="Codi postal">
                </div>

                <input type="submit" name="register" value="Registrar-me" class="button"/>

            </div>
        </form>
        <?php
            require_once__DIR__ . "/../MODEL/m_registrar.php";
        ?>
    </section>

</div>

</body>
</html>
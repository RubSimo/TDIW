<div id="d1">


    <section>
        <form onsubmit="return confirmaRegistre();" action="index.php?accio=crearUsuari" target="_self" method="post" class = "formulario" >

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
                    <input type="text"  name="adreca" maxlength="30" minlength="1" placeholder="Adreça" required>
                </div>
                <div class="input-contenedor">
                    <i class="fas fa-location-arrow"></i>
                    <input type="text" name="poblacio" maxlength="30" minlength="1" placeholder="Població" required>
                </div>
                <div class="input-contenedor">
                    <i class="fas fa-mail-bulk"></i>
                    <input type="text" name="codi_postal" maxlenght="5" minleght="5" pattern="^[0-9]+$" placeholder="Codi postal">
                </div>

                <input type="submit" name="register" value="Registrar-me" class="button"/>
            </div>
        </form>

    </section>
</div>


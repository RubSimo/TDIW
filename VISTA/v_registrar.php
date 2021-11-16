<div id="d1">


    <section>
        <form  action="index.php?accio=crearUsuari" method="post" target="_self"  class = "formulario" >

            <h1>Registra't</h1>
            <div id ="contenidor">

                <div class="input-contenedor">
                    <i class="fas fa-user-alt"></i>
                    <input type="text" placeholder="Nom" name="v_nom" required>
                </div>
                <div class="input-contenedor">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Correu electronic" name="v_email" required>
                </div>
                <div class="input-contenedor">
                    <i class="fas fa-key"></i>
                    <input type="password" placeholder="Contrasenya" name="v_password" required>
                </div>
                <div class="input-contenedor">
                    <i class="fas fa-map-marker-alt"></i>
                    <input type="text"  maxlength="30" minlength="1" placeholder="Adreça" name="v_adreca" required>
                </div>
                <div class="input-contenedor">
                    <i class="fas fa-location-arrow"></i>
                    <input type="text" maxlength="30" minlength="1" placeholder="Població" name="v_poblacio" required>
                </div>
                <div class="input-contenedor">
                    <i class="fas fa-mail-bulk"></i>
                    <input type="text" maxlenght="5" minleght="5" pattern="^[0-9]+$" name="v_codi_postal" placeholder="Codi postal">
                </div>

                <input type="submit" name="register" value="Registrar-me" class="button"/>
            </div>
        </form>

    </section>
</div>


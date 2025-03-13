<div class="login-container">
        <h2>Iniciar Sesion</h2>
        <form action="/login/init" method="post">
            <?php if(isset($error)): ?>
                <div class="error">
                    <?php echo $error; ?>
                </div>
                <?php endif; ?>

            <div class="input-group">
                <label for="txtEmail">Email</label>
                <input type="text" name="txtEmail" id="txtEmail" required>
            </div>
            <div class="input-group">
                <label for="txtPassword">Contraseña</label>
                <input type="password" name="txtPassword" id="txtPassword" required>
            </div>
            <div>
                <button type="submit">Crear</button>
            </div>
        </form>
    </div>
    <h2>Inicio de sesión</h2>

        <form action="<?php echo APP_URL; ?>users/login" method="POST">
            <p>
               <label for="username">Username: </label>
                <input type="text" name="username">
            </p>
            <p>
               <label for="password">Password: </label>
                <input type="password" name="password">
            </p>
            <p>
                <input type="submit" value="login">
            </p>
        </form>
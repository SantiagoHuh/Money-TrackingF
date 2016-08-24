    <form action="<?php echo APP_URL; ?>users/edit" method="post">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>" >
        <p>
           <label for="username">Username: </label>
           <input type="text" name="username" value="<?php echo $user['username']; ?>">
        </p>
        <p>
           <label for="password">Password: </label>
           <input type="password" name="new_password">
        </p>
        <p>
           <label for="rol">Rol: </label>
            <input type="text" name="rol" value="<?php echo $user["rol"]; ?>">
        </p>
        <p>
            <input type="submit" value="Update">
        </p>
    </form>
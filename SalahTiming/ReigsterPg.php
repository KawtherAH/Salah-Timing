<?php
include('server.php');
$title = "Reigster";
include 'Header.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" media="all" href="css/style.css">
    </head>
    <body>

        <div class="header">
            <h2 style="text-align:center" >Registration</h2>
        </div>

        <form method="POST" action="ReigsterPg.php">
            <?php include('errors.php'); ?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password_1">
            </div>
            <div class="input-group">
                <label>Confirm password</label>
                <input type="password" name="password_2">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="reg_user">Register</button>
            </div>
            <p>
                Already a member? <a href="index.php">Sign in</a>
            </p>
        </form>
        
    </body>
</html>

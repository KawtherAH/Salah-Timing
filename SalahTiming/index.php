<?php
include('server.php');
$title = "Login";
include 'Header.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
      
        <link rel="stylesheet" type="text/css" media="all" href="css/style.css">

    </head>
    <body  >
        <div class="header">
            <h2 style="text-align:center" >Login</h2>
        </div>
        
        <form class="form2" method="POST" action="index.php" >
            <?php include('errors.php'); ?>
            
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="yourname">
            </div>
            
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>   </div>
            
            <p>Not yet a member? <a href="ReigsterPg.php">Sign up</a></p>                         
        </form> 
        
        <form class="form3"><?php
            echo "Today is: ", date("y-m-d");
            echo "<br>";
            echo "Time is:  ", date("h:i:s:a");
            ?></form>


    </body>
</html>

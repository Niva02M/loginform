<?php

    if(isset($_GET['lgn'])){
        echo "Registration Successful! Please Login";
    }
    if(isset($_GET['lgt'])){
        echo "You have been logged out! Please Login";
    }

?>
<form method="post" action="index.php">
    Username<input type="text" name="uname"><br>
    Password<input type="password" name="pwd"><br>
    <input type="submit" value="submit"><br>
</form>     


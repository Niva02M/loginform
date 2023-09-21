<?php

    if(isset($_GET['lgn'])){
        echo "Registration Successful! Please Login";
    }

?>
<form method="post" action="checkUser.php">
    Username<input type="text" name="uname"><br>
    Password<input type="password" name="pwd"><br>
    <input type="submit" value="submit"><br>
</form>     


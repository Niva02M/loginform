

<?php

    if(isset($_GET['success'])){
        echo "value inserted";
    }

?>
<form method="post" action="saveUser.php">
    Username<input type="text" name="uname"><br>
    Password<input type="password" name="pwd"><br>
    email<input type="text" name="email"><br>
    Date of Birth<input type="text" name="dob"><br>
    Upload Photo<input type="file" name="photo"><br>

    <input type="submit" value="submit"><br>
</form>     


<?php
include "db.php";
    $uname = $_POST["uname"];
    $pwd = sha1($_POST["pwd"]);
    $email = $_POST["email"];
    $dob = $_POST["dob"];

    $sql="insert into login(uname, pwd, email, dob) values ('$uname', '$pwd', '$email', '$dob')";
    
    $res = mysqli_query($conn, $sql);
    if($res){
        
        header("location:login.php?lgn=true");
    }
    else{
        die("operation Failed".mysqli_error($conn));
    }
    
?>
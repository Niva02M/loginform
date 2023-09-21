<?php 
session_start();
$name = $_POST["uname"];
$pwd = sha1($_POST["pwd"]);
include "db.php";
$sql = "select * from login where uname='$name' and pwd='$pwd'";
$res = mysqli_query($conn, $sql);
if(mysqli_num_rows($res)>0){
$_SESSION['uname']=$name;
    header('location:home.php?lgn=true');
}
else{
    echo "Login Failed";
}

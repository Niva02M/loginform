<?php session_start();
include 'checkUser.php';
include 'saveClass.php';
$classObj = new saveClass();
if($classObj->dbConnect()){
    
}
 $obj = new checkLogin();
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <?php 
    if($obj->check()){
        ?>
    
<h1>Welcome to Home Page <?php echo $_SESSION['uname'];?> </h1>
<a href="logout.php">Log Out</a>
<?php } else{
    header('location:login.php?lgt=true');
} ?>

</body>
</html>
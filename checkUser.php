<?php 
class checkLogin{
    public $name;
    public $pwd;
    public function __construct(){
        $this->name = $_POST['uname'];
        $this->pwd = $_POST['pwd'];
    }
    public function check(){
        include "db.php";
        $sql = "select * from login where uname='$this->name' and pwd='$this->pwd'";
        $res = mysqli_query($conn, $sql);
        if(mysqli_num_rows($res)>0){
            $_SESSION['uname']=$this->name;
            return true;
        }
        else{
            return false;
        }
    }               
}
// if(isset($_POST['submit'])){
//     $name = $_POST['uname'];
//     $pwd = $_POST['pwd'];
//     $obj = new checkLogin($name,$pwd);
//     $obj->check();
// }
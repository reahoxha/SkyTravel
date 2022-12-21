<?php 

$host="localhost";
$user="root";
$password="";
$db="test1";

mysqli_connect($host,$user,$password);
mysqli_select_db("mysql","test1");

if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from loginform where user='".$uname."' AND Pass='".$password."' limit 1";

    $result=mysqli_query($db,"select * from loginform where user='".$uname."' AND Pass='".$password."' limit 1");

    if(mysqli_num_rows($result)==1){
        echo "You Have Sucessfully Logged in";
        exit();
    }
    else{
        echo "You have Entered Incorrect Password";
        exit();
    }
}

?>
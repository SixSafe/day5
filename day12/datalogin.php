<?php
session_start();
$user=$_POST['username'];
$psw=$_POST['password']; 

if ($user =='safe' and $psw =='6969'){
    $_SESSION['username']=$user;
    $_SESSION['name']="ศุภกร นทีธารทอง";
    header("location:data.php");
}else{
    header("location:index.php");
}
?>
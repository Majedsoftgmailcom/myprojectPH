<?php
session_start();
require ('con_string.php');

if(isset($_POST['login'])){
    if(!empty($_POST['user']) && !empty($_POST['pass']))
   {$user =$_POST['user'];
    $pass =md5($_POST['pass']);
    $query= "SELECT * FROM USERS WHERE USER_NAME ='$user' AND PASSWORD='$pass'";
    $result = $con->query($query);
    $a = $result->fetch_array();
    if($result->num_rows == 1){
        $_SESSION['user']= $user;
        $_SESSION['grant'] = $a['garnty'];
        header("location:index.php");      
    }
    else
    $_SESSION['error'] ="<script> alert('wrong password or user name')</script>";
     header("location:index.php");      
}

}

if(isset($_POST['signUp'])){
    if(!empty($_POST['user']) && !empty($_POST['pass']))
   {
    $_SESSION['user']=$user =$_POST['user'];
    $pass =md5($_POST['pass']);
    $query= "INSERT INTO USERS (USER_NAME,PASSWORD,GRANT) VALUES('$user','$pass','user')";
    $result =$con->query($query);
    if($result)
    {
        header("location:index.php");}
}
}
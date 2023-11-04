<?php
if($_POST['send']){
    if (!empty($_POST['c_name']) &&!empty($_POST['email'])&&!empty($_POST['comment'])) {
    $c_name = $_POST['c_name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
}
header("location\index.php");

}
else
header("location\index.php");

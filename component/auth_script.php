<?php
require_once('../boot.php');
if(isset($_POST['login']) && isset($_POST['pass']))
{
    $login = $_POST['login'];
    $password =$_POST['pass'];
    $sql  = "SELECT * FROM `users` WHERE  login = '$login' and password = '$password'";
    $stmt  =  get_mysqli()->query($sql);
    if($row = $stmt->fetch_assoc())
    {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['login'] = $login;
        header("Location: ../registration.php");
    }
    else{
        header("Location: ../registration.php");
    }
    
    exit();
}
?>
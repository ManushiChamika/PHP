<?php
//because this is going to have pure php code , there wont be any closing php tags here
if(isset($_POST['signup-submit'])){
    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    
}

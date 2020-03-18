<?php
//NEW SESSION
session_start();
$email_session = $_SESSION["email_login"];
$password_session = $_SESSION["password_login"];
if(!isset($email_session) || !isset($password_session)){
    header("Location: index.php");
    exit;
    session_destroy();
}
?>

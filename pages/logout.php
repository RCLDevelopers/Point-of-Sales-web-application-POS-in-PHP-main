<?php
session_start();
//unset($_SESSION['user_ID']);
//unset($_SESSION['user_ID']);
if(session_destroy()) // Destroying All Sessions
{
header("Location: ../index.php"); // Redirecting To Home Page
}
?>
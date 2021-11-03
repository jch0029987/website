<?php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<a href="gaming.html"> Game page </a>
<a href="logout.php">  logout</a>

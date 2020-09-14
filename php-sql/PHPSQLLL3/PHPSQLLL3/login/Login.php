<!DOCTYPE html>
<html lang="en">
<head>
<title>Gelor | Search for Albums</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<?php
require '../Config.php';

if(isset($_SESSION['login_user'])){
  include('Session.php');
}
?>
</head>
<body>
<div class="Header2">
     <h2><a href="../WebPage.php">Lissen</a></h2>      
</div>
 
 <form action="LoginConfirm.php" method="POST" autocomplete="off">
    <label for="uname">
    <input type="text" placeholder="Enter Username" name="uname" required>
    </label>

    <label for="psw">
    <input type="password" placeholder="Enter Password" name="psw" required>
    </label>
    <br>
    <button type="submit" value = "Login">Login</button>
</form> 
</body>
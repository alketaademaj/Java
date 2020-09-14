<!DOCTYPE html>
<html lang="en">
<head>
<title>Lissen | Search for Albums</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<?php
require '../Config.php';
?>
</head>
<body>
<h2><a href="../WebPage.php">Lissen</a></h2>
<div id="reg">
<form action="RegistrationConfirm.php" method="POST" autocomplete="off">  
    <label for="Username">
    <input type="text" placeholder="Username" name="Username" required>
    </label>

    <label for="email">
    <input type="text" placeholder="Email" name="email" required>
    </label>

    <label for="psw">
    <input type="password" placeholder="Password" name="psw" required>
    </label>

    <label for="psw-repeat">
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    </label>
    <br>
    
    <button type="submit" class="registerbtn">Register</button>
 
    <p>Already have an account? <a href="../login/login.php">Sign in</a>.</p>
    <p>Have you made a terrible mistake? <a href="../Webpage.php">Go Back</a>.</p>
</form>
</div>
</body> 
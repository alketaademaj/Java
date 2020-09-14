<!DOCTYPE html>
<html lang="en">
<head>
<title>Lissen | Search for Albums</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<div class="nope">
<?php   
require 'Config.php';
session_start();

if (isset($_SESSION['userid'])) {
        echo "Welcome " .$_SESSION['uname'];
        Echo "<a href=login/Logout.php> Logout</a>";
}
else {
        echo "Please Sign up!";
}
?>
</div>
</head>
        <body>

                 <!-- NAVIGATION BAR -->
        <nav class="navbar">
                <div class="container">
                        <ul class="nav">
                         <li class="active"><a href="delete/Delete.php">Delete album</a></li>
                         <li><a href="add/AddAlbum.php">Add an album</a></li>
                         <li><a href="edit/Edit.php">Edit Album Info</a></li>
                        </ul>
                        <ul class="nav">
                         <li><a href="registration/Registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                         <li><a href="login/Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                </div>
        </nav> 

                <div class="Header">
                        <h1><b>LISSEN</b></h1>       
                </div>

                
                        <form action ="result.php" method="POST" autocomplete="off">
                                <label>
                                        <input type="text" placeholder="Search for upcoming albums" name="query">
                                </label>
                                <label>
                                        <input type="submit" value="Search">
                                </label>
                        </form>
                
        </body>
</html>
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
<?php
require 'Config.php';
?>
</head>
<body>
<div class="Header2">
     <h2><a href="WebPage.php">Lissen</a></h2>      
</div>    
<div id ="serc">
<?php
if (isset($_POST["query"])) {
        $query = $_POST['query']; 
        // gets value sent over search form
            
            
            $raw_results = mysqli_query($conn,"SELECT * FROM album_artist WHERE (`albumName` LIKE '%".$query."%') OR (`artistName` LIKE '%".$query."%')") or die(mysqli_connect_error());
            // Checks if the unser input is found in any of the columns within the table
            
           
            
            if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
                
                while($results = mysqli_fetch_array($raw_results)){
                // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
                
                    echo "<p><h3>".$results['releaseDate']."</h3>"."Is the release date of ".$results['albumName']." by ".$results['artistName']."</p>";
                    echo "<p>".$results['info']."</p>";
                    echo "<br><br>";
                    // posts results gotten from database(title and text) you can also show id ($results['id'])
                }
                
            }
            else{ // if there is no matching rows do following
                echo "no results with the search \" $query \"";
            }       
}
else {
    echo "Virhe bois";
}
?>
</div>
</body>
</html>
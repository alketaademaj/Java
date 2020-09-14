<html>
<head>
<title>Lissen | Search for Albums</title>
<meta charset="utf-8">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="-1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>
<body>
<div class="Header2">
     <h2><a href="../WebPage.php">Lissen</a></h2>      
</div>
<form action="albumconfirm.php" method="get" autocomplete = "off">
    <label for = "Artist">
         <input type="text" placeholder="Artist" name="Artist">
    </label>    
   <label for = "Album Name">
         <input type="text" placeholder="Album Name" name="Album">
    </label>
    <label for = "Release Date">
         <input type="date" name="Date">
    </label>
    <label for = "Additional Information">
         <input type="text" placeholder="Additional Info" name="Info">
    </label>
    <label>   
    <input type="submit" value="Add An Album">
    </label>
</form>



</body>
</html> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="searchpage1.php" method="GET">
<input id="search" name="keywords" type="text" placeholder="Type here">
<input id="submit" type="submit" value="Search">
</form>
</body>
</html>

<?php 

$connection = mysql_connect("localhost","root","");

mysql_select_db("blog1")or die(mysql_error());

$keywords = isset($_GET['keywords']) ? '%'.$_GET['keywords'].'%' : '';

$result = mysql_query("SELECT username FROM member where username like '$keywords'");
while ($row = mysql_fetch_assoc($result)) {
    echo "<div id='link' onClick='addText(\"".$row['username']."\");'>" . $row['username'] . "</div>";  
}

?>
</body>
</html>
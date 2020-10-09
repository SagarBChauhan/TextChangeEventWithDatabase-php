<!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">-->
<?php
$host="localhost";
$user="root";
$password="root";
$database="tt";
$con=mysqli_connect($host, $user, $password, $database);
if ($con)
{
    //echo "<p style='color:green;'><i class='fab fa-connectdevelop'></i> Server Online <i class='far fa-check-circle'></i></p>";
    $connction_satus="<p style='color:green;'><i class='fab fa-connectdevelop'></i> Server Online <i class='far fa-check-circle'></i></p>";
}
else
{
    //echo "<p style='color:red;'><i class='fab fa-connectdevelop'></i> Server Offline<i class='far fa-times-circle'></i></p>";
    $connction_satus="<p style='color:red;'><i class='fab fa-connectdevelop'></i> Server Offline<i class='far fa-times-circle'></i></p>";
}

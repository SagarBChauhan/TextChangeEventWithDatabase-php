<?php
$host="localhost";
$user="root";
$password="root";
$database="tt";
$mysqli = new mysqli($host, $user,$password, $database);
if($mysqli->connect_error) {
  exit('Could not connect');
}

//$sql = "SELECT customerid, companyname, contactname, address, city, postalcode, country FROM customers WHERE customerid = ?";
$sql = "SELECT COUNT(*) as count FROM `tbl_login` WHERE `User_Name`= ? ";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count==0)
{
    echo "Username Available";
}
else {
    echo "Username Not Available";
}
?>
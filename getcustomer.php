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
$sql = "SELECT `User_Id`, `User_Name`, `Password`, `Status`, `Last_Update_Time` FROM `tbl_login` WHERE `User_Name`=?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($User_Id, $User_Name, $Password, $Status, $Last_Update_Time);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>CustomerID</th>";
echo "<td>" . $User_Id . "</td>";
echo "<th>CompanyName</th>";
echo "<td>" . $User_Name . "</td>";
echo "<th>ContactName</th>";
echo "<td>" . $Password . "</td>";
echo "<th>Address</th>";
echo "<td>" . $Status . "</td>";
echo "<th>City</th>";
echo "<td>" . $Last_Update_Time . "</td>";
echo "</tr>";
echo "</table>";
?>
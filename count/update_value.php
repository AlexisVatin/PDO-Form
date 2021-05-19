<?php 

$host = "localhost";
$dbname = "count_url";
$username = "root";
$password = "g";



$conn = new PDO("mysql:host=$host;dbname=$dbname","$username","$password");

$rowID = $_POST["my_id"]; 
// var_dump($_POST);
$sql = "UPDATE count_click SET nb_click = nb_click + 1 WHERE ID = '1'";
$res = $conn->prepare($sql);
$exec = $res->execute($res);
$conn->query($sql);


echo "User $rowID clicked \n";
echo "Valeur augmentée de 1"; 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully <br />"; 
     }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
 
$query=$conn->prepare("INSERT INTO survey (Transport Preferance,Gender, Transport Type) VALUES (?,?,?)");

$query->bindParam(1, $Transport_Preferance);
$query->bindParam(2, $Gender);
$query->bindParam(3, $Transport_type);

 
$Transport_Preferance=$_POST['Transport_Preferance']??'';
$Gender=$_POST['Gender']??'';
$Transport_type=$_POST['Transport_type']; 


$query->execute();

$conn = null;
 
echo 'Hi '.$_POST['Transport_Preferance'].' ' .$_POST['gender'] .' thanks for your interest.</br>';
echo 'We will contact you at '. $_POST['Transport_type'].' soon.</br>';
?>
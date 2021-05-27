<?php define("DB_USER", "root"); 
define("DB_PASS", ""); 
$servername = "localhost";
$dbname = "test"; 
 try {  $conn = new PDO("mysql:host=$servername;dbname=$dbname", DB_USER, DB_PASS);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo "Connected successfully <br />"; 
 } catch(PDOException $e)  {  echo "Connection failed: " . $e->getMessage();  } 
 
 
$query=$conn->prepare("SELECT * FROM survey"); 
$query->execute(); $results=$query->fetchAll(PDO::FETCH_ASSOC); 
 
 
foreach ($results as $row) {  
 echo $row['Transport_Preferance'] . "<br />";  
 echo $row['Gender'] . "<br />"; 
 echo $row['Transort_Type'] . "<br />";

 echo "<hr />";
 } $conn = null; ?> 
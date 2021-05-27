<?php 
 $servername = "localhost"; $username = "root"; $password=""; $dbname="test"; 
   try {     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password); 
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
   echo "Connected successfully <br />";      
   } catch(PDOException $e)     {     echo "Connection failed: " . $e->getMessage(); 
   } 
 $query=$conn->prepare("CREATE TABLE Survey information (id int(6) NOT NULL auto_increment,Car int(15) NOT NULL, bus int(15) NOT NULL,train type int(30)NOT NULL,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))"); $query->execute(); 

 $conn = null; ?> 
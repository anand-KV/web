<?php
//creating connection
$con=new mysqli("localhost","root","","MCA01");
//chcking conn
if($con->connect_error)
   echo"connection failed";
else
   echo"connection created";
//create table
$prdct="CREATE TABLE product(id INT(2) PRIMARY KEY AUTO_INCREMENT,name varchar(30) NOT NULL,qty INT(2) NOT NULL,unitp INT(2) NOT NULL,manu date NOT NULL,exp date NOT NULL)";
//chcking table
if($con->query($prdct)==TRUE)
   echo"table created";
else 
   echo"table failed";
$con->close();
?>
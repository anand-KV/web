<?php
//creating connection
$con=new mysqli("localhost","root","");
//checking the connection
if($con->connect_error)
	echo "connection failed";
else
	echo "successfull";
//create database
$s="CREATE DATABASE MCA01";
//checking database
if($con->query($s)==TRUE)
   echo "\ndatabase created succesfully";
else
   echo "\ndatabase creation failed";
   $con->close();
   ?>	


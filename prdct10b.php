<?php
//alter table product with manufacturer name
$man=$_POST['man'];
$id=$_POST['id'];
$con=new mysqli("localhost","root","","MCA01");
$update="update product set manufacturer='$man' where id=$id";
if($con->query($update)==TRUE)
{
	echo "updated successfully:";
}
?>

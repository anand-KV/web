<html>
    <!--displaying product details!-->
<body>
<center>
<?php
//creating connection
$con=new mysqli("localhost","root","","MCA01");
$q="select * from product";
$r=$con->query($q);
if($r->num_rows>0)
{
	?>
	<table border="5" cellpadding="5" cellspacing="5">
	<tr>
	<td align="center" colspan="6"> PRODUCT DETAILS </td>
	</tr>
	<tr>
	<td>ID</td>
	<td>NAME</td>
	<td>QUANTITY</td>
	<td>UNIT PRICE</td>
	<td>MANUFACTORING DATE</td>
	<td>EXPIRY DATE</td>
	</tr>
	<?php
	while($row=$r->fetch_assoc())
	{
		$id=$row['id'];
		$name=$row['name'];
		$qty=$row['qty'];
		$unitp=$row['unitp'];
		$manu=$row['manu'];
		$exp=$row['exp'];
		?>
		<tr>
		<td><?php echo $id;?></td>
		<td><?php echo $name;?></td>
		<td><?php echo $qty;?></td>
		<td><?php echo $unitp;?></td>
		<td><?php echo $manu;?></td>
		<td><?php echo $exp;?></td>		
		</tr>
		<?php
	}
}
else
	echo "please enter some details";
  
$con->close();
?>
  <form action="prdctpg8.php" method="post">
    <center><input type="submit" value="back to previous page"></center>
</table>
<h3>if u want to include manufacturer name</h3>
<a href="prdct10a.php">click here</a>
</center>
</body>
</html>

	
	

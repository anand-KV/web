

<?php
//adding manufacturer name into the table:
$con=new mysqli("localhost","root","","MCA01");
$alt1="alter table product add manufacturer varchar(30)";
$con->query($alt1);
echo"success";
$con->close();
?>
<html>
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
	<td>MANUFACTURER NAME</td>
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
		$man=$row['manufacturer'];
		?>
		<tr>
		<td><?php echo $id;?></td>
		<td><?php echo $name;?></td>
		<td><?php echo $qty;?></td>
		<td><?php echo $unitp;?></td>
		<td><?php echo $manu;?></td>
		<td><?php echo $exp;?></td>
		<td><?php
		if($man==NULL)
		{
			?>
			<form method="POST" action="prdct10b.php">
			<input type="text" placeholder="enter the manufacturer name" name="man">
			<input type="submit" name="submit" value="UPDATE">
			<input type="hidden" name="id" value="<?php echo $row['id']?>">
			</form>
		<?php
		}
		else
		{
			echo $man;
		}
		?>
		</td>		
		</tr>
		<?php
	}
}
else
	echo "please enter some details";
$con->close();
?>
</table>
</center>
</body>
</html>

	
	

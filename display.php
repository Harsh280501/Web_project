
<?php


$server='localhost';
$username = 'root';
$password = '';
$dbname = 'product_manage';


$mysqli = new mysqli($server, $username,
				$password, $dbname);


if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM product_db";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Product Details</title>

	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>Product Details</h1>

		<table>
			<tr>
				<th>Product ID</th>
				<th>Product Name</th>
				<th>Product Price</th>
				<th>Product Category</th>
        <th>Product Description</th>

			</tr>
			<?php 
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>

				<td><?php echo $rows['productID'];?></td>
				<td><?php echo $rows['productName'];?></td>
				<td><?php echo $rows['productPrice'];?></td>
				<td><?php echo $rows['productCategory'];?></td>
        <td><?php echo $rows['productDescription'];?></td>

			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>

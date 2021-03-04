<html lang = "en-US">
 <head>
<link rel = "stylesheet" type = "text/css" href = "skeleton.css" />

 <div class="row">
<ul class = "nav">
<H1>  Device Stock Levels </H1>
<table class = 'u-pull-left'>
<th><a href = "Dashboard.php" > Home </a></th>
<th><a href = "Devices.php" > Devices </a></th>
<th><a href = "index.php" > Stock </a></th>
</table>
</div>

</head>


<title>Dashboard.html</title>


<body bgcolor="#c2c2a3">

<?php

#services mysql start

    $conn = new mysqli("127.0.0.1", "", 
	"", "");
	
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM Product_Stock";
$result = $conn->query($sql);

	{
echo "<table class = 'table'>
				<tr>
					<th>Product ID</th>
					<th>Product Name</th>
					<th>Product Description</th>
					<th>Stock Amount</th>
					<th>Function</th>
				</tr>";
	
		while($row = mysqli_fetch_array($result))
		{ 
			echo "</tr>";
				echo "<td>" . $row["Product_ID"] . "</td>";
				echo "<td>" . $row["Product_Name"]."</td>";
				echo "<td>" . $row["Product_Description"]."</td>";
				echo "<td>" . $row["Product_Stock"]."</td>";
				echo "<td><form method=get>
                    <input name=id type=hidden value='".$row['Product_ID']."';>
                    <input type=submit name=submit value=Adjust Stock>
                    </form>";
			    echo "</tr>";
		
		} 
	echo "</table>";
	}
	
$conn->close();

?>

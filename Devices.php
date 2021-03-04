<html lang = "en-US">
 <head>
<link rel = "stylesheet" type = "text/css" href = "skeleton.css" />

 <div class="row">
<ul class = "nav">
<H1>  Devices </H1>
<table class = 'u-pull-left'>
<th><a href = "Dashboard.php" > Home </a></th>
<th><a href = "Devices.php" > Devices </a></th>
<th><a href = "Index.php" > Stock </a></th>
<th><a href = "AddDevice.php" > Add New Device </a></th>
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

if(isset($_POST['submit']) && isset($_POST['id']) && !empty($_POST['id'])) {
  $id = $_POST['id'];
  $sql = mysqli_query($conn, "DELETE FROM Product_Table WHERE Product_ID =$id;");

  if(!$sql) {
    echo ("Could not delete rows" .mysql_error());
  }
}

$sql = "SELECT * FROM Product_Table";
$result = $conn->query($sql);

	{
echo "<table class = 'u-full-width'>
				<tr>
					<th>Product ID</th>
					<th>Product Name</th>
					<th>Storage Amount</th>
					<th>Service Provider</th>
					<th>Phone Colour</th>
					<th>Camera</th>
					<th>Product Description</th>
					<th>Functions</th>
				</tr>";
	
		while($row = mysqli_fetch_array($result))
		{ 
			echo "</tr>";
				echo "<td>" . $row["Product_ID"] . "</td>";
				echo "<td>" . $row["Product_Name"]."</td>";
				echo "<td>" . $row["Stroage_Amount"]."</td>";
				echo "<td>" . $row["Service_Provider"]."</td>";
				echo "<td>" . $row["Phone_Colour"]."</td>";
				echo "<td>" . $row["Camera"]."</td>";
				echo "<td>" . $row["Product_Description"]."</td>";
				echo "<td><form method=post>
                    <input name=id type=hidden value='".$row['Product_ID']."';>
                    <input type=submit name=submit value= Delete>
                    </form>";
					
					echo "<form method=get>
                    <input name=id type=hidden value='".$row['Product_ID']."';>
                    <input type=submit name=get value=Edit>
                    </form></td>";
			    echo "</tr>";
		
		} 
	echo "</table>";
	}
	
$conn->close();

?>

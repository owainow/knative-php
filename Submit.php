<header>
<meta http-equiv="refresh" content="0; url=http://student30391.bucomputing.uk/AddDevice=.php" />
</header>

<?php
//Connecting to sql db.
$conn = new mysqli("127.0.0.1", "", 
	"", "");
//Sending form data to sql db.
mysqli_query($conn, "INSERT INTO Product_Table(Product_Name,Stroage_Amount,Service_Provider,Phone_Colour, Camera,Product_Description)
	VALUES('$_POST[ProuctName]', '$_POST[StorageAmount]', '$_POST[ServiceProvider]', '$_POST[PhoneColour]', '$_POST[Camera]', '$_POST[EnterDescription]')");
Console.php

?>
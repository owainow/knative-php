<header>
<meta http-equiv="refresh" content="60; url=http://knative-php-index-knative-demo.apps.cluster-b41e.b41e.example.opentlc.com/" />
</header>

<?php
//Connecting to sql db.
$conn = new mysqli($_ENV["MYSQL_IP_ADDRESS"], $_ENV["MYSQL_USER"], 
$_ENV["MYSQL_PASSWORD"],$_ENV["MYSQL_DATABASE"]);
//Sending form data to sql db.
mysqli_query($conn, "INSERT INTO products(Product_Name,Stroage_Amount,Service_Provider,Phone_Colour, Camera,Product_Description)
	VALUES('$_POST[ProuctName]', '$_POST[StorageAmount]', '$_POST[ServiceProvider]', '$_POST[PhoneColour]', '$_POST[Camera]', '$_POST[EnterDescription]')");
?>
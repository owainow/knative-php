<html lang = "en-US">
 <head>
<link rel = "stylesheet" type = "text/css" href = "skeleton.css" />

 <div class="row">
<ul class = "nav">
<H2>  Edit Device</H2>
<table class = 'u-pull-left'>
<th><a href = "Dashboard.php" > Home </a></th>
<th><a href = "Devices.php" > Devices </a></th>
<th><a href = "index.php" > Stock </a></th>
</table>
</div>

</head>

<title>AddProduct.html</title>

<body bgcolor="#c2c2a3">

<?php

 $conn = new mysqli("127.0.0.1", "", 
	"", "");
	
  $id = $_POST['id'];
  $sql = "SELECT * FROM products WHERE Product_ID =$id;";
  $result = $conn->query($sql);

	
?>
<form action="Submit.php" method = "post">
 <div class="row">
    <div class="three columns">
 <label for="ProductName">Enter Product Name:</label>
      <input class="u-full-width" type="text" name="ProuctName" id="ProductNameInput"> 
    </div>
	<div class="two columns">
      <label for="StorageAmount">Amount for storage:</label>
      <select class="u-full-width" name = "StorageAmount" id="StorageAmount">
        <option value="16G">16G</option>
        <option value="32G">32G</option>
        <option value="64G">64G</option>
      </select> 
	</div>
    <div class="two columns">
      <label for="ServiceProvider">Service Provider:</label>
      <select class="u-full-width" name = "ServiceProvider" id="ServiceProvider">
        <option value="Three">Three</option>
        <option value="Vodafone">Vodafone</option>
        <option value="EE">EE</option>
		<option value="O2">O2</option>
		<option value="Sim Free">Sim Free</option>
      </select>
	</div>
 </div>
 
  <div class="row">
  <div class="three columns">
  <label for="PhoneColour">Phone Colour:</label>
  <input type="radio" name="PhoneColour" value="Black" checked> Black
  <input type="radio" name="PhoneColour" value="Gold"> Gold
  <input type="radio" name="PhoneColour" value="Silver"> Silver
  </div>
  
  <div class="four columns">
  <label for="Camera">Camera:</label>
  <input type="radio" name="Camera" value="Yes" checked> Yes
  <input type="radio" name="Camera" value="No"> No 
   </div>
  </div>
  
 <div class="row">
	<div class="six columns">
	  <label for="ProductDescription">Product Description:</label>
	  <textarea class="u-full-width" name="EnterDescription" 
id="ProductDescription"></textarea>
    </div>
 </div>
  <input type="Submit Change">
	
</form>

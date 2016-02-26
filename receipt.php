<?php
date_default_timezone_set('America/Phoenix'); 
$date = date("d-F-Y");
$prices = [
	"small" => 2.00,
	"medium" => 2.65,
	"large" => 2.99,
];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$quantity = $_POST["quantity"];
$size = $_POST["size"];
$zip = $_POST["zip"];
$city = $_POST["city"];
$state= $_POST["state"];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Purchase Receipt</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="receiptid">
<h2> Receipt </h2>
<?php
echo "Purchase Date: ".$date."<br>";
echo "Purchased ".$quantity." item(s) of size '".$size."' at $".$prices[$size]." each <br>";
$total = $quantity*$prices[$_POST["size"]];
echo "Total Cost: $".$total."<br>";
?>
<br>
<fieldset id="ship">
	<legend>Ship To:</legend>
	<?php echo $firstName . ' ' . $lastName ?><br>
	<?php echo $city . ', ' . $state ?><br>
	<?php echo $zip ?>
</fieldset>
<div>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
	<style>
	
		.productBlock	{
			
			width:300px;
			background-color: aquamarine;
			border:thin solid black;
		}
		
		.productImage img {
			display:block;
			margin-left:auto;
			margin-right:auto;
			width:280px;
			height:280px;				
		}
	
		.productName {
			text-align:center;
			font-size: large;
		}	
		
		.productDesc {
			margin-left:10px;
			margin-right:10px;
			text-align:justify;
		}
		
		.productPrice {
			text-align: center;
			font-size:larger;
			color:blue;
		}
		
		.productStatus {
			text-align:center;
			font-weight:bolder;
			color:darkslategray;
		}
		
		.productInventory {
			text-align:center;
		}
		
		.productLowInventory {
			color:red;
		}
		
	</style>
</head>

<body>
	
	<h1>DMACC Electronics Store!</h1>
	<h2>Products for your Home and School Office</h2>
	
<?php

$dbname = "wdv341";
$servername = "localhost";
$username = "username";
$password = "";

require'../dbConnect.php';



try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT * FROM wdv341_products ORDER BY product_name DESC");
	$stmt->execute();


	// set the resulting array to associative
	$stmt-> setFetchMode(PDO::FETCH_ASSOC);
	
	

} catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
	$message = "There has been a problem. The system administrator has been contacted. Please try again later.";

	error_log($e->getMessage());			
	error_log($e->getLine());
	error_log(var_dump(debug_backtrace()));
}


?>

/*out put*/
<?php 
		while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
?>

	<div class="productBlock">
		<div class="productImage">
			<image src="<?php echo $row['product_image']; ?>">
		</div>
		
		<p class="productName"><?php echo $row['product_name']; ?></p>	
		<p class="productDesc"><?php echo $row['product_description']; ?></p>
		<p class="productPrice"><?php echo $row['product_price']; ?></p>
		<p class="productStatus"><?php echo $row['product_status']; ?></p>
		<p class="productInventory
		<?php if ($row['product_inStock']< 10){
						echo 'productLowInventory';
						} ?>">
			<?php echo $row['product_inStock']; ?> In Stock!</p>
	</div>

<?php 
		}
?>	
</body>
</html>
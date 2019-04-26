<?php 
//phpinfo();
	  include 'dcon.php'; 
	$Pr_name = $_POST['pr_name'];
	$Pr_quantity = $_POST['pr_quantity'];
	$Pur_price = $_POST['pur_price'];
	$Pur_inv = $_POST['pr_invoice'];
	$Pur_date = $_POST['pur_date'];
	$closing_stock = $_POST['closing_stock'];
	//print_r($_POST);

	
	$sql = "INSERT INTO product_info (pr_name, pr_quantity,pr_purchase_price,pr_purchase_invoice,purchase_date,closing_stock)
values ('".$Pr_name."', '".$Pr_quantity."', '".$Pur_price."', '".$Pur_inv."', '".$Pur_date."',' ".$closing_stock." ' )";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

 
?>
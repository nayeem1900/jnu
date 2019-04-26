<?php 
//phpinfo();
	  include 'dcon.php'; 
	$office_id = $_POST['office_id'];
	$name = $_POST['name'];
	$f_name = $_POST['f_name'];
	
	//print_r($_POST);

	
	$sql = "INSERT INTO employee_info (emp_office_id,emp_name,emp_father_name)
values ('".$office_id."', '".$name."', '".$f_name."' )";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

 
?>
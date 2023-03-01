<?php
	$Name = $_POST['Name'];
    $email = $_POST['email'];
	$gender = $_POST['gender'];
    $bloodgroup=$_POST['bloodgroup'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('sql310.epizy.com','epiz_31351490','J6i7Vi5s8zg1Q','epiz_31351490_test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ".$conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Name, email,gender,bloodgroup,number) values(?,?,?,?,?)");
		$stmt->bind_param("ssssi", $Name, $email, $gender, $bloodgroup, $number);
		$execval = $stmt->execute();
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
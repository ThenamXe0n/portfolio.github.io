<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$massage = $_POST['massage'];
}

$conn = new mysqli('localhost','root','', 'test');
if($conn){
	echo "connection successful<br>";
	$sql = "INSERT INTO `info`(name,email,number,massage) values('$name','$email','$number','$massage')";
	$result = mysqli_query($conn, $sql);
	if($result){
		echo "<br>Data inserted successfully";
	}
	else{
		echo "data failed to insert";
	}
}else{
	die(mysqli_error($conn));
}


?>
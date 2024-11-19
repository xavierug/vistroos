<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email']
$Gender = $_POST['Gender'];
$phone = $_POST['phone'];
$pwd = $_POST['pwd'];
//database connection
$conn = newmysqli('localhost','root','','vistroosonlinemall');
if($conn->connect_error){
	die('connection Failed' .$conn->connect_error);
}else{
	$stmt= $conn->prepare("insert into registration (firstName, lastName, Gender, email, pwd, phone)
values(?,?,?,?,?,?)");
	$stmt->bind_param("sssssi",$firstName,$lastName, $email, $Gender, $phone, $pwd );
	$stmt->execute();
	echo "registration successful";
	$stmt->close();
	$conn->close();
}






?>
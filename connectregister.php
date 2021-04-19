<?php  
 require('db_connect.php');

if (isset($_POST['first_name']) and isset($_POST['last_name']) and isset($_POST['user_name']) and isset($_POST['phone']) and isset($_POST['pass']) and isset($_POST['gender'])
){
	
// Assigning POST values to variables.
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$username = $_POST['user_name'];
$phone = $_POST['phone'];
$password = $_POST['pass'];
$gender = $_POST['gender'];
$sql = "INSERT INTO user_info (Firstname, Lastname, Username,Phone,Password,Gender)
values ('$firstname','$lastname','$username','$phone','$password', '$gender')";
if ($connection->query($sql)){
header('location:Homepage.html');
}
else{
echo "Error: ". $sql ."
". $connection->error;
}
$connection->close();
}
?>
<?php  
 require('db_connect.php');

if (isset($_POST['user_name']) and isset($_POST['user_pass'])){
	
$username = $_POST['user_name'];
$password = $_POST['user_pass'];

$query = "SELECT * FROM `user_info` WHERE username='$username' and userpass='$password'";
$result = mysql_query($connection, $query) or die(mysql_error($connection));
$count = mysql_num_rows($result);

if ($count == 1){
echo "Login Credentials verified";
header('Location:Homepage.html');
}
else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
}
}
?>
<?php
$host = "localhost";
$userName = "root";
$password = "";
$dbName = "form";
 
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
if($conn -> connection_error)
{
	die("connection fail");
}

if((isset($_POST['username'])&& $_POST['email']&& $_POST['website'] !=''))
{
 
$yourName = $conn->real_escape_string($_POST['username']);
$yourEmail = $conn->real_escape_string($_POST['email']);
$yourPhone = $conn->real_escape_string($_POST['website']);
 
 
//$sql="INSERT INTO user (username, email, website) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."')";
$sql = "INSERT INTO `user`(`username`, `email`, `website`) VALUES ('adfss','afdsdf','afsdf')";
 
$conn->query($sql);

// //if(!$result = $conn->query($sql)){
// die('There was an error running the query [' . $conn->error . ']');
// }
// else
// {
// echo "Thank you! We will contact you soon";
// }
}

?>
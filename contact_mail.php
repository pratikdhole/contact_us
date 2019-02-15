<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydba";

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$content = $_POST['content'];
$mobile = $_POST['mobile'];

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql ="Insert into username(name,lastname,email, dob, mobile,content) values ('$name','$lastname','$email','$dob','$mobile' ,'$content')"; //Insert Query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$toEmail = "admin@hotstar.com";
$mailHeaders = "From: " . $_POST["name"] . "<". $_POST["email"] .">\r\n";
if(mail($toEmail, $_POST["subject"], $_POST["content"], $mailHeaders)) {
	print "<p class='success'>Contact Mail Sent.</p>";
} else {
	print "<p class='Error'>Problem in Sending Mail.</p>";
}

?>
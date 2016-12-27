<?php
$servername = "localhost";
$username = "root";
$password = "mindfire";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	echo "Connected successfully";
}

if(!mysqli_select_db($conn,'db')){
	echo "Database not selected";
}
else{
	echo "Database selected";
}
$name=$_POST['my_name'];
$email=$_POST['my_email'];
$phone_no=$_POST['my_phone_number'];

$sql="insert into MyTable values ('$name','$email','$phone_no')";

if (!mysqli_query($conn,$sql)) {
	echo "Not inserted";
}
else{
	echo "Inserted";
}

?> 
<?php
$profile_id=filter_input(INPUT_POST,'profile_id');
$name=filter_input(INPUT_POST,'name');
$address=filter_input(INPUT_POST,'address');
$details=filter_input(INPUT_POST,'details');
$current_working=filter_input(INPUT_POST,'current_working');
$payment_way=filter_input(INPUT_POST,'payment_way');

$dbname ="main_project";
$host="localhost";
$username="root";
$password="";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO freelancer (profile_id,name,address,details,current_working,payment_way)
VALUES ('$profile_id','$name','$address','$details','$current_working','$payment_way')";

if ($conn->query($sql) === TRUE) {
    echo "Freelancer ADDED";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('location:profile.php')
?>

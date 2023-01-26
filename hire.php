<?php
$company_name=filter_input(INPUT_POST,'company_name');
$project_title=filter_input(INPUT_POST,'project_title');
$profile_id=filter_input(INPUT_POST,'profile_id');
$contact=filter_input(INPUT_POST,'contact');

$dbname ="main_project";
$host="localhost";
$username="root";
$password="";
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sll = "INSERT INTO hire (company_name, project_title, profile_id, contact)
VALUES ('$company_name','$project_title','$profile_id','$contact')";

if ($conn->query($sll) === TRUE) {
    echo "Project Added Successfully";
} else {
    echo "Error: " . $sll . "<br>" . $conn->error;
}
$conn->close();
header('location:profile.php')
?>
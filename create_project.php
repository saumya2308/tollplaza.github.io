<?php
$project_id=filter_input(INPUT_POST,'project_id');
$project_title=filter_input(INPUT_POST,'project_title');
$project_description=filter_input(INPUT_POST,'project_description');
$contact_details=filter_input(INPUT_POST,'contact_details');

$dbname ="main_project";
$host="localhost";
$username="root";
$password="";
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sdd = "INSERT INTO projects (project_id,project_title,project_description,contact_details)
VALUES ('$project_id','$project_title','$project_description','$contact_details')";

if ($conn->query($sdd) === TRUE) {
    echo "Project Added Successfully";
} else {
    echo "Error: " . $sdd . "<br>" . $conn->error;
}
$conn->close();
header('location:project.php')
?>
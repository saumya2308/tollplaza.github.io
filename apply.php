<?php
$project_id1=filter_input(INPUT_POST,'project_id1');
$project_title=filter_input(INPUT_POST,'project_title');
$name=filter_input(INPUT_POST,'name');
$contact=filter_input(INPUT_POST,'contact');

$dbname ="main_project";
$host="localhost";
$username="root";
$password="";
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$spp = "INSERT INTO applied_for (project_id1, project_title, name, contact)
VALUES ('$project_id1','$project_title','$name','$contact')";

if ($conn->query($spp) === TRUE) {
    echo "Project Added Successfully";
} else {
    echo "Error: " . $spp . "<br>" . $conn->error;
}
$conn->close();
header('location:project.php')
?>
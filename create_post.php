 <?php
$id=filter_input(INPUT_POST,'id');
$title=filter_input(INPUT_POST,'title');
$description=filter_input(INPUT_POST,'description');
$author=filter_input(INPUT_POST,'author');
$date=filter_input(INPUT_POST,'date');

$dbname ="main_project";
$host="localhost";
$username="root";
$password="";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$shh = "INSERT INTO post (id,title,description,author,date)
VALUES ('$id','$title','$description','$author','$date')";

if ($conn->query($shh) === TRUE)
{
 echo "Project Added Successfully";
} else {
    echo "Error: " . $shh . "<br>" . $conn->error;
}
$conn->close();
header('location:post.php')
?>
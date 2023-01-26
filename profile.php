<!doctype html>
<html lang="en">
  <head>
   
    <link rel="icon" href="bootstrap/bootstrap-4.0.0/favicon.ico">

    <title>ONLINE FREELANCING SYSTEM</title>
    <meta charset="utf8">
 
    <link href="bootstrap/bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="main.css" rel="stylesheet">
  
  </head>
  <body>

<div class="fii">
  <li><a href="create_project.html">Post Projects</a></li>
  <li><a href="create_profile.html">Create Profile</a></li>
  <li><a href="create_post.html">Create Posts</a></li>
</div>


  <div class="sii">
    <div class="logo">
            <img src="images/logo1.webp">
        </div>

  <div class="nav">
  <ul>
  <li ><a href="index.html"class="active">HOME</a></li>
    <li><a href="about.php">ABOUT US</a></li>
    <li><a href="project.php">PROJECTS</a></li>
    <li><a href="profile.php">FREELANCER</a></li>
    <li><a href="post.php">BLOGS</a></li>
 </ul></div></div>
    

<div class="login">
	<h1>LIST  of all freelancer</h1>
</div>



<?php  
 $dbname ="main_project";
$host="localhost";
$username="root";
$password="";
// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

<?php        
$sql = "SELECT * from freelancer";    
$result = mysqli_query($conn,$sql);    
?>    
<html>
<head><link rel="stylesheet" type="text/css" href="hh.css"></head>    
    <body>
    <h1>Profile Information</h1>    
        <table >    
            <tr>    
                <td>PROFILE ID</td>    
                <td>NAME</td>    
                <td>ADDRESS</td>  
                <td>DETAILS</td>
                <td>CURRENT WORKING</td>
                <td>PAYMENT WAY</td>
                <td>HIRE FOR</td>
                </tr>     
<?php       
while($row = mysqli_fetch_object($result)){    
?> 
    <tr>  
        <td>  
            <?php echo $row->profile_id;?>  
        </td>  
        <td>  
            <?php echo $row->name;?>  
        </td>  
        <td>  
            <?php echo $row->address;?>  
        </td> 
         <td>  
            <?php echo $row->details;?>  
        </td>  
        <td>  
            <?php echo $row->current_working;?>  
        </td>  
        <td>  
            <?php echo $row->payment_way;?>  
        </td>  
        <td>  
            <a href="hire.html" style="padding:10px 10px 10px 10px; border:1px solid grey;">Hire</a>  
        </td>  
     </tr>
 <?php 
} 
?>
</table>
</body>
</html>
<footer>
  <div class="row">
    <div class="column" >
      <h2>Services</h2>
      <a href="index.html">Home</a><br>
      <a href="about.php">About Us</a><br>
      <a href="profile.php">Freelancer</a><br>
      <a href="project.php">Projects</a><br>
      <a href="post.php">Blogs</a><br>
    </div>
    <div class="column">
      <h2>Create</h2>
      <a href="create_profile.html">Create Portfolio</a><br>
      <a href="create_project.html">Post Projects</a><br>
      <a href="create_post.html">Create Post</a><br>
    </div>
    <div class="column">
      <h2>Contact Us</h2>
      <input type="text" placeholder="Name">
      <input type="text" placeholder="Email ID">
      <input type="text" placeholder="Message"><br>
      <input type="button" value="Submit">
    </div>
  </div>
  <hr>
  2019 ONLINE FREELANCING SYSTEM. ALL RIGHTS RESERVED.
  </footer>

</body>
</html>
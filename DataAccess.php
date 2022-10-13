 

<?php
#require_once "EntityLayer.php";

class DataAccess{
    
public function user_add($name,$email,$tel){
        
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "backend";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (name,email,tel) VALUES ('$name', '$email', '$tel')";

if ( mysqli_query($conn,$sql)) {
  return "SuccessFully";
} else {
  return  "Error";
}

 
        
    }
    
    
}

?>
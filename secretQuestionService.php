<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "useraccess";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
# Get JSON as a string
$json_str = file_get_contents('php://input');
//var_dump(json_decode($json));
$results = json_decode($json_str, true);


$answer = ($results['Answer']);
$question = ($results['Question']);
$userid = ($results['Userid']);

 $sql="SELECT * FROM  questions WHERE  Userid = '" . $results['Userid'] . "' AND  Question ='" . $results['Question'] . "' AND  Answer ='" . $results['Answer'] . "'";
 $result = $conn->query($sql);

if ($result->num_rows > 0) {
   echo "Match found";
} else {
   echo "Match not found";
}
$conn->close();


?>
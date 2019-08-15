<?php
# Get JSON as a string
$json_str = file_get_contents('php://input');
//var_dump(json_decode($json));
$results = json_decode($json_str, true);

$email = ($results['Email']);
$pwd = ($results['pwd']);

if ($email =='User@gmail.com' AND $pwd=='Admin') {
    echo "200";
}else {
    echo "401";
} 
?>
<?php

# Get JSON as a string
$json_str = file_get_contents('php://input');
//var_dump(json_decode($json));
$results = json_decode($json_str, true);

$email = ($results['Email']);
$newpwd = ($results['Newpwd']);
$confirmpwd = ($results['Confirmpwd']);

if ($newpwd ==$confirmpwd) {
    echo "200";
}else {
    echo "401";
} 
?>
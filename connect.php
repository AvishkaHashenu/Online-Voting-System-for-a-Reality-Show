<?php 

$con = new mysqli("localhost","root","","votingsystem");

if ($con->connect_error){
 die ("connection failed:" .$con->connect_error);

}

echo "connected"

?>

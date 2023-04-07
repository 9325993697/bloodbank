<?php 

$con=new mysqli("localhost","root","","blood_bank");

if(mysqli_connect_error()){
	echo "Connection Failed";
	exit();
}
echo "Datacase Connection Successfully!....";
?>
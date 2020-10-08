<?php 
ob_start();
session_start();
$timezone=date_default_timezone_set("Europe/London");
$com=mysqli_connect("localhost","goosefil_pal","Sitesking@12","goosefil_goosefile");
if(mysqli_connect_errno()){
	echo "failed to connect:".mysqli_connect_errno();
}




 ?>
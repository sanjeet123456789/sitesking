<?php 
$value_views=$_POST["val_views"];
	echo $value_views;

	
	$comet=mysqli_connect('localhost','goosefil_pal','Sitesking@12','goosefil_goosefile');
		
	
		$query_view="update software_list set views=views+1 where id=".$value_views."";
		$result_view=mysqli_query($comet,$query_view);
	




 ?>
<?php 
$connection=mysqli_connect('localhost','siteskin_pal','Sanjeet@12345','siteskin_sitesking');


if(isset($_GET['offset'])&&isset($_GET['limit'])&&isset($_GET['id'])&&isset($_GET['cat'])&&isset($_GET['cat3'])){
	$limit=$_GET['limit'];
	$offset=$_GET['offset'];
	$id=$_GET['id'];
	$cat=$_GET['cat'];
	$cat3=$_GET['cat3'];
	
$query=	"SELECT * from community_group where category = $id   ";
	if($cat3==""){
		$query .="and source_platform = $cat";
	}else{
		$query .= "and source_platform = $cat and country= $cat3";

	}


$query .=" order by current_date_   LIMIT {$limit} OFFSET {$offset}";
// echo $query;

$data=mysqli_query($connection,$query);


// echo ' 

// <ul>

//    ';


// echo $id;
	$i=1;
	
	while($row=mysqli_fetch_array($data)){

		
		



	 echo '<li>'.$i.' <a class="web_link" target="_blank" href="'.$row['group_link'].'" ><img   src="'.$row['logo_link'].'"  class="web_icon" >f/'.$row['group_name'].'  </a><span class="follower">'.$row['country'].'</span></li>';$i++;
		
		
	}
}





 ?>
<!-- </ul> -->
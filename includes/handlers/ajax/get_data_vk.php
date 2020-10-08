<?php 
$connection=mysqli_connect('localhost','siteskin_pal','Sanjeet@12345','siteskin_sitesking');


if(isset($_GET['offset'])&&isset($_GET['limit'])&&isset($_GET['id'])){
	$limit=$_GET['limit'];
	$offset=$_GET['offset'];
	$id=$_GET['id'];
	
	$data=mysqli_query($connection,"SELECT * from community where parent_id = $id and follower !=0 order by follower desc LIMIT {$limit} OFFSET {$offset}");

// echo ' 

// <ul>

//    ';


// echo $id;
	$i=++$offset;
	
	while($row=mysqli_fetch_array($data)){

		$follow;
		$num=$row['follower'];
 		if($num>1000) {

        $x = round($num);
        $x_number_format = number_format($x);
        $x_array = explode(',', $x_number_format);
        $x_parts = array('k', 'm', 'b', 't');
        $x_count_parts = count($x_array) - 1;
        $x_display = $x;
        $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
        $x_display .= $x_parts[$x_count_parts - 1];

        $follow = $x_display;
		}else{

			$follow=$row['follower'];

		}
		$pic=$row['pic_link'];
		
		$pic_link_vk="assets/images/icons/vk.png";



		echo '<li>'.$i.' <a class="web_link" target="_blank" href="'.$row['link'].'" ><img   src="'.$pic_link_vk.'"  class="web_icon" >v/'.$row['name'].'  </a><span class="follower">'.$follow.'</span></li>';$i++;
		
		
	}
}





 ?>
<!-- </ul> -->
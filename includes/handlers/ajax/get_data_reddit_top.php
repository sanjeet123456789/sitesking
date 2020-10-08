<?php 
$connection=mysqli_connect('localhost','siteskin_pal','Sanjeet@12345','siteskin_sitesking');




	// $count_part=mysqli_query($connection,"SELECT COUNT(*) as follower_count FROM community  WHERE parent_id between 100 and 198 and follower !=0  ");
	// $list=mysqli_fetch_assoc($count_part);
	// $total_list=$list['follower_count'];
	// $total_index=$total_list-$total_list+1;

if(isset($_GET['offset'])&&isset($_GET['limit'])){
	$limit=$_GET['limit'];
	$offset=$_GET['offset'];
	
	$data=mysqli_query($connection,"













		SELECT * from community where parent_id between 100 and 198 and follower !=0 group by name order by follower desc LIMIT {$limit} OFFSET {$offset}");

// echo ' 

// <ul>

//    ';



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
		// if($pic=="blue"){
		// 	$pic_link_reddit="assets/images/icons/blue.png";
		// }
		// else if($pic=="black"){
		// 	$pic_link_reddit="assets/images/icons/black.png";
		// }else if($pic=="orange"){
		// 	$pic_link_reddit="assets/images/icons/orange.png";
		// }
		// else if($pic=="red"){
		// 	$pic_link_reddit="assets/images/icons/red.png";
		// }
		// else if($pic=="gray"){
		// 	$pic_link_reddit="assets/images/icons/gray.png";
		// }
		// else if($pic=="green"){
		// 	$pic_link_reddit="assets/images/icons/green.png";
		// }
		// else if($pic=="brown"){
		// 	$pic_link_reddit="assets/images/icons/brown.png";
		// }
		// else if($pic=="pink"){
		// 	$pic_link_reddit="assets/images/icons/pink.png";
		// }
		// else if($pic=="yellow"){
		// 	$pic_link_reddit="assets/images/icons/yellow.png";
		// }








		// else{
		// 	  if($id==110){
		// 	  	$pic_link_reddit="assets/images/icons/blue.png";
		// 	  }else{
		// 	  	$pic_link_reddit=$pic;
		// 	  }
		// 	$pic_link_reddit=$pic;
		// 	$pic_link_reddit="assets/images/icons/blue.png";
			
		// }
		

		
			$pic_link_reddit="assets/images/icons/reddit.png";


		echo '<li>'.$i.' <a class="web_link" target="_blank" href="'.$row['link'].'" ><img   src="'.$pic_link_reddit.'"  class="web_icon" >r/'.$row['name'].'  </a><span class="follower">'.$follow.'</span></li>';$i++;
		
		
	}
}





 ?>
<!-- </ul> -->
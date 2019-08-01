<?php 

if(isset($_GET['flag'])&&isset($_GET['id'])){
	$flag=$_GET['flag'];
	$id=$_GET['id'];
	$connection=mysqli_connect('localhost','siteskin_pal','Sanjeet@12345','siteskin_sitesking');
	$data=mysqli_query($connection,"SELECT * from community where parent_id='$flag'");




	$i=1;
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

			
		// }
		$pic_link_reddit="assets/images/icons/reddit.png";



		echo '<li>'.$i.' <a class="web_link" target="_blank" href="'.$row['link'].'" ><img   src="'.$pic_link_reddit.'"  class="web_icon">r/'.$row['name'].'  </a><span class="follower">'.$follow.'</span></li>';
		$i++;
	}
}




 ?>

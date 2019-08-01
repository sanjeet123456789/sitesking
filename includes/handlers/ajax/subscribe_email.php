<?php
//fetch.php
// $connect = mysqli_connect("localhost", "pal", "viwekkumarpal", "test");
// $request = mysqli_real_escape_string($connect, $_POST["value"]);
// $query = "
//  SELECT * FROM search WHERE name LIKE '%".$request."%'
// ";

// $result = mysqli_query($connect, $query);

// $data = array();

// if(mysqli_num_rows($result) > 0)
// {
//  while($row = mysqli_fetch_assoc($result))
//  {
//   $data[] = $row["name"];
//  }
//  echo json_encode($data);
// }
if(isset($_POST["value"]))

{	$value=$_POST["value"];
	
		$conne=mysqli_connect('localhost','goosefil_pal','Sitesking@12','goosefil_goosefile');
		
	
		$query="select * from subscribe_mail where name like'%".$value."%'";
		$result=mysqli_query($conne,$query);
		if(mysqli_num_rows($result) > 0){
			echo "<div class='subscribe_email'>Already Subscribed</div>";


		}else{

			$query_insert="insert into subscribe_mail values('','.$value.',0)";
			$result_insert=mysqli_query($conne,$query_insert);
				
			echo "<div class='subscribe_email'>Thanks for Subscribing</div>";


		
			
		 }

}
?>

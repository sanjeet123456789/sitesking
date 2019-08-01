<?php 
include("includes/header.php");  

if(isset($_GET['term'])){
	$term=urldecode($_GET['term']);
	
}else{
	$term="";
}
?>




<?php 
	
function get_row_count(){
				$term=urldecode($_GET['term']);
				$cos=mysqli_connect('localhost','pal','viwekkumarpal','goosefile');
					if(!$cos){
						die('Failed to connect');
					}
				$sql="SELECT COUNT(*) as rows from software_list where name like'%$term%' or category like '%$term%'";
				$result=mysqli_query($cos,$sql);
				if(mysqli_num_rows($result)>0){
					$row=mysqli_fetch_assoc($result);
					$list= $row['rows'];
					return $list;
				}
				return 0;
			}
			function display_content($offset,$total){
				$term=urldecode($_GET['term']);
				$cos=mysqli_connect('localhost','pal','viwekkumarpal','goosefile');
					if(!$cos){
						die('Failed to connect');
					}
					$sql="SELECT * from software_list where name like '%$term%' or category like '%$term%' LIMIT $offset,$total";
					$result=mysqli_query($cos,$sql);

					if(mysqli_num_rows($result)){
			echo '<div id="main-content-container">

				    <div id="main-content">

				        <div id="main-content-Left"></div>

				        <div id="main-content-Center">
				              
				            <div class="main-content-center-container">

				                <div class="main-content-center-left">
					                <div class="main-content-center-content main-tab">
						                  <div class="main-content-result">
						                  	<div class="result_found">'


						                  	.mysqli_num_rows($result).' Result found</div>
						                  	'.$html="<div class='content'>".'
						                  	';
						                  	while($row=mysqli_fetch_assoc($result)){
							
							echo $html2 ='<div class="search_result_tab"><p>'.$row['name'].'</p>';

						}

										echo '
						                  </div>
						                  	
											

						                  </div>
					                </div>

						            <div class="main-tab related_post "> 
						            <h3 style="margin:0 0 1% 0;">Related software</h3>
						            <div class="realted_post"></div>
									</div>
								</div>
								<div class="main-content-sidebar main-tab"></div>
				            </div>
						</div>

				        <div id="main-content-Right"></div>
				    </div>

				</div>';







							
						$html='<div class="content"></div>';
						while($row=mysqli_fetch_assoc($result)){
							
							$html .='<p>'.$row['name'].'</p>';

						}
						$html .='</div>';
						echo $html;
					}else{
						echo '<p>NO DATA EXIT';
					}



			}



			
			function pagination(){
				$term=urldecode($_GET['term']);

				$pagination_button=11;
				$page_number=(isset($_GET['page']) And !empty($_GET['page']))? $_GET['page']:1;
				$per_page_records=10;
				$rows=get_row_count();
				$last_page =ceil($rows/$per_page_records);
				$pagination='';
				$pagination .='<div class="area-label"><ul class="pagination">';
				
				if($page_number < 1){
					$page_number=1;
				}
				else if($page_number>$last_page){
					$page_number=$last_page;

				}
				echo '<h3>Showing page:'.$page_number.'/'.$last_page.'</h3>';
				display_content(($page_number-1),$per_page_records);
				$half=floor($pagination_button/2);
				if($page_number<$pagination_button and ($last_page==$pagination_button or $last_page > $pagination_button)){
					for($i=1;$i<=$pagination_button;$i++){
						if($i==$page_number){
							$pagination .='<li class="active"><a href="search.php?term='.$term.'&page='.$i.'">'.$i.'</a></li>';
						}else{
							$pagination .='<li><a href="search.php?term='.$term.'&page='.$i.'">'.$i.'</a></li>';
						}
					}
					if($last_page>$pagination_button){
					$pagination .='<li><a href="search.php?term='.$term.'&page='.($pagination_button+1).'">&raquo;</a></li>';
				}



				}
				else if($page_number>=$pagination_button and $last_page>$pagination_button){

					if(($page_number+$half)>=$last_page){
						$pagination .='<li><a href="search.php?term='.$term.'&page='.($last_page-$pagination_button).'">&laquo;</a></li>';
						for($i=($last_page-$pagination_button)+1;$i<=$last_page;$i++){
							if($i==$page_number){
								$pagination .='<li class="active"><a href="search.php?term='.$term.'&page='.$i.'">'.$i.'</a></li>';
							}else{
								$pagination .='<li><a href="search.php?term='.$term.'&page='.$i.'">'.$i.'</a></li>';
							}
						}
						
					}else if(($page_number+$half)<$last_page){
						$pagination .='<li><a href="search.php?term='.$term.'&page='.(($page_number-$half)-1).'">&laquo;</a></li>';
						for($i=$page_number-$half;$i<=($page_number+$half);$i++){
							if($i==$page_number){
								$pagination .='<li class="active"><a href="search.php?term='.$term.'&page='.$i.'">'.$i.'</a></li>';
							}else{
								$pagination .='<li><a href="search.php?term='.$term.'&page='.$i.'">'.$i.'</a></li>';
							}
						}$pagination .='<li><a href="search.php?term='.$term.'&page='.(($page_number+$half)+1).'">&raquo;</a></li>';

					}



					
				}
					else if($page_number<$pagination_button){

						for($i=1;$i<=$last_page;$i++){
								if($i==$page_number){
									$pagination .='<li class="active"><a href="search.php?term='.$term.'&page='.$i.'">'.$i.'</a></li>';
								}else{
									$pagination .='<li><a href="search.php?term='.$term.'&page='.$i.'">'.$i.'</a></li>';
								}

						}
					}

				$pagination .='</div></ul>';
				echo $pagination;
			}




 ?>
<?php pagination();  ?>





















































































<?php include("includes/footer.php"); ?>
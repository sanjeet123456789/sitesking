<?php 
include("includes/header.php");  
if(isset($_GET['id'])){
	$id=urldecode($_GET['id']);	
}else{
	$id="";
}
?>




<?php 
	
function get_row_count(){
				$id=urldecode($_GET['id']);
				$cos=mysqli_connect('localhost','goosefil_pal','Sitesking@12','goosefil_goosefile');
					if(!$cos){
						die('Failed to connect');
					}
				$sql="SELECT COUNT(*) as rows from software_list where itemcategories_id='$id'";
				$result=mysqli_query($cos,$sql);
				if(mysqli_num_rows($result)>0){
					$row=mysqli_fetch_assoc($result);
					$list= $row['rows'];
					return $list;
				}
				return 0;
			}
			function display_content($offset,$total){

$per_page_records= $total;
 	$setoffset=$offset;
 	$setoffset2=$setoffset*$per_page_records;
 	$per_page_records2=$setoffset*$per_page_records+10;




				$id=urldecode($_GET['id']);
				$cos=mysqli_connect('localhost','goosefil_pal','Sitesking@12','goosefil_goosefile');
					if(!$cos){
						die('Failed to connect');
					}
					$sql="SELECT *  from software_list where itemcategories_id='$id' LIMIT $setoffset2,$per_page_records2";
					$result=mysqli_query($cos,$sql);

					$category_post=new software_categories($cos,$id);
			echo '<div id="main-content-container">
					
				    <div id="main-content">

				        <div id="main-content-Left"></div>

				        <div id="main-content-Center">
				        <div class="breadcrumb" style="padding: 13px 0;"><a href="index.php" role="link">Home</a> &raquo; 
                
               <a role="link" href=" '.$category_post->getparent_file_location().'">' .$category_post->getparent_file_title() .'</a> &raquo;
                <a role="link" style="color:#0397d6;" href="'.$category_post->getpage_id().'">'.$category_post->getTitle().'</a> 



             </div>
				              
				            <div class="main-content-center-container">

				                <div class="main-content-center-left">
					                <div class="main-content-center-content main-tab">
						                  <div class="main-content-result">
						                  	<div class="result_found_section">';

						                  	
						              if(!$result || mysqli_num_rows($result) == 0) {
														echo "<span class='noResults'>0 Result found </span>";

													}else{

														echo '<div class="result_found">'.get_row_count().' Result Found</div>';

													$songIdArray = array();

													function get_licence_name($rum){
						
												$licence = $rum;
												

												switch ($licence) {
												    case 1:
												        return "Proprietary";
												        break;
												    case 2:
												        return  "freeware";
												        break;
												    case 3:
												        return "open-source";
												        break;
												    case 4:
												        return "GNU General Public Licence";
												        break;
												    case 5:
												    	return "MIT";
												    	break;
												    case 6:
												    	return "Microsoft Public Licence";
												    	break;
												    case 7:
												    	return "Mozilla Public Licence";
												    	break;
												    case 8:
												    	return "PostgreSQL License";
												    	break;
												    case 9:
												    	return "Apache license";
												    	break;
												    case 10:
												    	return "Creative Commons Attribution";
												    	break;
												    case 11:
												    	return "Eclipse Public License";
												    	break;
												    case 12:
												    	return "The Unlicense";
												    	break;
												    case 13:
												    	return "University of Illinois/NCSA Open Source License";
												    	break;
												    case 14:
								                        return "Freemium";
								                        break;
								                    case 15:
								                        return "Adware";
								                        break;
												    default:
												    	return "other licence";
												}

						                  	}
													while($row = mysqli_fetch_array($result)) {
												

										$rum=	$row['licence'];
										$licence_name=get_licence_name($rum);
										



									echo '<div class="post_detail_header">
                          <div class="post_detail_header_image"><a href="software.php?id='.$row['id'].'&name='.$row['name'].'">
                            <img  src='.$row['thumbnail_link'].' alt="Pineapple">
                            </a>
                          </div>
                          <div class="post_detail_header_right">
                            <div class="post_detail_header_right_left"> 

                            <div class="post_detail_top_button">
                            <div class="button_side_gap">

                            
                            <div class="post_detail_header_title"><a role="link"href="software.php?id='.$row['id'].'&name='.$row['name'].'">
                              '.$row['name'].'</a>
                              <span class="post_detail_header_version">
                              ('. $row['version'].')
                            </span>
                            </div>
                            
                            <div class="post_detail_header_company_name">By
                              <a class="link"> '.$row['company_name'].'</a>
                              <span class="post_detail_header_company_licence">
                              ('.$licence_name.')
                              
                            </span>
                            </div>
                            </div>
                          <div class="button_gap blue-button" >
                            <button >Download</button>
                          </div>
                        </div>
                            
                                  <div class="post_detail_heade_company_description"><span class="software_bits">Rating '.$row['users_rating'].'  </span>
                                  '.$row['short_description'].'
                                  </div>
                            </div>
                          </div>
                         </div>
	                     <div class="download-button-mobi blue-button">
                          <button >
                            download
                          </button>
                           
                         </div>';

						}								
			}
                         

                          
                          
                        
						               echo   '</div>
						                  	
										 </div>
					                </div>

						            <div class="main-tab related_post "> 
						            <h3 style="margin:0 0 1% 0;">Related Category</h3>
						            <div class="realted_post option">';
						            	

												   $connect = new PDO("mysql:host=localhost;dbname=goosefil_goosefile", "goosefil_pal", "Sitesking@12");

                    $query2 = "SELECT * FROM software_categories where sort_order=1";
                    $statement2 = $connect->prepare($query2);
                    $statement2->execute();
                    $result2 = $statement2->fetchAll();


                 
                    foreach($result2 as $row)
                    {
                    
                    
                        
                     echo '  
                     <a href="'.$row['page_id'].'" hr> <li><label><div  class="related_category_suggest"  value="'. $row['title'] .'"> ' .$row['title'] .'</div></label>
												    </li></a>';
                    
                    
                   
                    }
                    echo '</ul>';

                   





						         echo '   </div>
									</div>
									<div class="main-tab pagination-tab " style="display: none;"> 
									<div class="realted_post"></div>
									</div>
								</div>
								<div class="main-content-sidebar main-tab">'; include("includes/sidebar.php"); 

							echo '</div>
				            </div>
						</div>

				        <div id="main-content-Right"></div>
				    </div>

				</div>';






			
}


			
			function pagination(){
				$term=urldecode($_GET['id']);

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
				/*echo '<h3>Showing page:'.$page_number.'/'.$last_page.'</h3>';*/
				display_content(($page_number-1),$per_page_records);
				$half=floor($pagination_button/2);
				if($page_number<$pagination_button and ($last_page==$pagination_button or $last_page > $pagination_button)){
					for($i=1;$i<=$pagination_button;$i++){
						if($i==$page_number){
							$pagination .='<li class="active"><a href="category.php?id='.$term.'&page='.$i.'">'.$i.'</a></li>';
						}else{
							$pagination .='<li><a href="category.php?id='.$term.'&page='.$i.'">'.$i.'</a></li>';
						}
					}
					if($last_page>$pagination_button){
					$pagination .='<li><a href="category.php?id='.$term.'&page='.($pagination_button+1).'">&raquo;</a></li>';
				}



				}
				else if($page_number>=$pagination_button and $last_page>$pagination_button){

					if(($page_number+$half)>=$last_page){
						$pagination .='<li><a href="category.php?id='.$term.'&page='.($last_page-$pagination_button).'">&laquo;</a></li>';
						for($i=($last_page-$pagination_button)+1;$i<=$last_page;$i++){
							if($i==$page_number){
								$pagination .='<li class="active"><a href="category.php?id='.$term.'&page='.$i.'">'.$i.'</a></li>';
							}else{
								$pagination .='<li><a href="category.php?id='.$term.'&page='.$i.'">'.$i.'</a></li>';
							}
						}
						
					}else if(($page_number+$half)<$last_page){
						$pagination .='<li><a href="category.php?id='.$term.'&page='.(($page_number-$half)-1).'">&laquo;</a></li>';
						for($i=$page_number-$half;$i<=($page_number+$half);$i++){
							if($i==$page_number){
								$pagination .='<li class="active"><a href="category.php?id='.$term.'&page='.$i.'">'.$i.'</a></li>';
							}else{
								$pagination .='<li><a href="category.php?id='.$term.'&page='.$i.'">'.$i.'</a></li>';
							}
						}$pagination .='<li><a href="category.php?id='.$term.'&page='.(($page_number+$half)+1).'">&raquo;</a></li>';

					}



					
				}
					else if($page_number<$pagination_button){

						for($i=1;$i<=$last_page;$i++){
								if($i==$page_number){
									$pagination .='<li class="active"><a href="category.php?id='.$term.'&page='.$i.'">'.$i.'</a></li>';
								}else{
									$pagination .='<li><a href="category.php?id='.$term.'&page='.$i.'">'.$i.'</a></li>';
								}

						}
					}
				
				$pagination .='</div></ul>';
				echo $pagination;
			}



 ?>
<?php pagination();  ?>




<style type="text/css">
	


</style>

















































































<?php include("includes/footer.php"); ?>
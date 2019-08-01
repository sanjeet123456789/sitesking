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
				$term=$_GET['term'];
				$term = explode(" ", $_GET['term']);
				$cos=mysqli_connect('localhost','siteskin_pal','Sanjeet@12345','siteskin_sitesking');
					if(!$cos){
						die('Failed to connect');
					}
				$sql="SELECT count(*) as rows FROM community WHERE name like '%$term[0]%' ";
					for($i = 1; $i < count($term); $i++) {
        if(!empty($term[$i])) {
            $sql .= " or  name like '%" . $term[$i] . "%' ";
        }
      }

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
				$cos=mysqli_connect('localhost','goosefil_pal','Sitesking@12','goosefil_goosefile');
					if(!$cos){
						die('Failed to connect');
					}

						/*	if(isset($_POST["action"]))
							{
							 $query = "
							 SELECT * from software_list where name like '%$term%' or category like '%$term%' or company_name like '%$term%' LIMIT $offset,$total
							 ";

							 if(isset($_POST["video"]))
							 {
							  $video_filter = implode("','", $_POST["video"]);
							  $query .= "
							   AND category IN('".$video_filter."') 
							  ";
							 }
							 if(isset($_POST["antivirus"]))
							 {
							  $antivirus_filter = implode("','", $_POST["antivirus"]);
							  $query .= "
							   AND category IN('".$antivirus_filter."') 
							  ";
							 }
							
							 $statement = $cos->prepare($query);
							 $statement->execute();
							 $result = $statement->fetchAll();
							 $total_row = $statement->rowCount();
							 $output = '';
			


*/

}?>

	<div id="main-content-container">

		<div id="main-content">

		<div id="main-content-Left"></div>



			<div id="main-content-Center">
				              







                             <div class="sanjeet_post_layout night-mode-pic" ><img  src="assets/images/logo-body.png" /></div>
                                 <div class="sanjeet_post_layout day-mode-pic" ><img  src="assets/images/logo-body-black.png" /></div>

          <form action="search.php" method="get"><input class="search-textbox"  tabindex="1" alt="" height="40px" name="term" required="" type="text" width="40px" placeholder="Search..." /></form>
          <style type="text/css">
            .search-textbox{
              width: 100%;   border: 1px solid #B2AEA3;
              padding: 6px;
              box-shadow: 0 2px 8px rgba(0,0,0,0.30), 0 2px 2px rgba(0,0,0,0.22);
              border-radius: 3px;
            }

          .sanjeet_post_layout img{
          	height:auto;
          	width:100%;
           
          }
          @media only screen and (min-width: 768px) {
            .sanjeet_post_layout{
              /*padding-left: 66%;*/
            }
            .search-textbox{
              width:80%;
              margin-left:10%;
            }
          .sanjeet_post_layout img{
            height: 260px;
              width: 85%;
              margin-left:10%;
            
          }

          }
          @media only screen and (min-width: 1020px) {
            .sanjeet_post_layout{
              /*padding-left: 66%;*/
            }
            .search-textbox{
              width:80%;
              margin-left:10%;
            }
          .sanjeet_post_layout img{
            height: 260px;
              width: 80%;
              margin-left:10%;
            
          }

          }
          @media only screen and (max-width: 768px) {
            .sanjeet_post_layout{
            /*padding-left:74%;*/

          }
          .sanjeet_post_layout img{
            /*width:142p*/x;
          }
          }

          @media only screen and (max-width: 564px){
              .sanjeet_post_layout{
            /*padding-left:60%;*/

          }
          .sanjeet_post_layout img{
            /*width:150px;*/
          }

          }
          @media only screen and (max-width: 400px){
              .sanjeet_post_layout{
           /* padding-left:55%;*/

          }


          }



          </style>



<!-- sitesking search box -->












				<div class="main-content-center-container">

				    <div class="main-content-center-left">
					    <div class="main-content-center-content main-tab">
						    <div class="main-content-result">










































						        <div class="result_found_section">

                         				<div class="result_found_section">
                         					<div id="checkbox-container">
												<div class="result_filter_right">

												</div>










						                  		
						                  		
						                  		


						                  	</div>
						                  		<div class="col-md-9">
											             
											           <div class="row filter_data"  >

											                </div>
											    </div>

						                  </div>

                          
                          
                        
						        </div>          	
							</div>
					    </div>


								<div class="main-tab pagination-tab " style="display: none;"> 
								<div class="realted_post"></div>
								</div>
					</div>
					<div class="main-content-sidebar main-tab"><?php include("includes/sidebar.php"); ?></div>
				</div>
			</div>

			<div id="main-content-Right"></div>
		</div>

	</div>
<script>
    var checkboxValue = JSON.parse(localStorage.getItem('checkboxValue')) || {}
    var $checkbox = $("#checkbox-container :checkbox");

    $checkbox.on("change", function() {
      $checkbox.each(function() {
        checkboxValue[this.id] = this.checked;
      });
      localStorage.setItem("checkboxValue", JSON.stringify(checkboxValue));
    });

    //on page load
    $.each(checkboxValue, function(key, value) {
      $("#" + key).prop('checked', value);
    });
  </script>


					

			
					

						              



			

			
<?php

			
			function pagination(){
				$term=urldecode($_GET['term']);

				$pagination_button=11;
				$page_number=(isset($_GET['page']) And !empty($_GET['page']))? $_GET['page']:1;
				$per_page_records=50;
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
				$getoffset=$page_number-1;
				$gettotal=$per_page_records;
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


<style>

.dropdown_sort {
  display: inline-block;
  position: relative;
  
}

.dropdown_button {
  display: inline-block;
  border: 1px solid gray;
  border-radius: 4px;
  padding: 10px 30px 10px 20px;
  background-color: #fafafa;
  color:#1b1a23;
  cursor: pointer;
  font-weight: 550;
    font-size: 16px;
  white-space: nowrap;
}
.night-mode .dropdown_button{
	background-color:#1b1a23;
  color:#fff;
}
.dropdown_button:hover{
	background: #e6e6e6;
	color:black;

}
.night-mode .dropdown_button:hover{
	background: #16151d;
	color:white;
	

}
.night-mode .dropdown_button:after{
	border-top: 5px solid #fff;
}
.dropdown_button:after {
  content: '';
  position: absolute;
  top: 50%;
  right: 15px;
  transform: translateY(-50%);
  width: 0; 
  height: 0; 
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid #1b1a23;
}



	


.dropdown_button_input {
  display: none;
}

.dropdown_button_menu {
  position: absolute;
  top: 100%;
  border: 1px solid #ccc;
  border-radius: 4px;
  padding: 0;
  margin: 2px 0 0 0;
  box-shadow: 0 0 6px 0 rgba(0,0,0,0.1);
  background-color: #ffffff;
  list-style-type: none;
}

.dropdown_button_input + .dropdown_button_menu ,.dropdown_button_input + .dropdown_button_menu li:checked {
  display: none;
} 

.dropdown_button_input:checked + .dropdown_button_menu {
  display: block;
  max-height: 300px;
    overflow: auto;
    

}     

.dropdown_button_menu li {
  padding: 10px 10px;
  cursor: pointer;
  font-size:13px;
  white-space: nowrap;
  color:#1b1a23;
}

.dropdown_button_menu li:hover {
  background-color: #0093de;
  color:white;
}


.dropdown_button_menu li.divider{
  padding: 0;
  border-bottom: 1px solid #cccccc;
}




</style>

<?php 
if(isset($_GET['term'])){
	$term=urldecode($_GET['term']);
}
$per_page_records=50;
$setoffset=((isset($_GET['page']) And !empty($_GET['page']))? $_GET['page']:1)-1;
 ?>




<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loader" style="" ></div>');
        var action = 'fetch_data';
        
        
        var term ='<?php echo $term ?>';
        
        var per_page_records ='<?php echo $per_page_records ?>';
        var setoffset ='<?php echo $setoffset ?>';

        
        

        
        

       
        $.ajax({

            url:"includes/handlers/ajax/fetch_search_data_community.php",
            method:"POST",
            data:{action:action, term:term,per_page_records:per_page_records,setoffset:setoffset},
            success:function(data){
                $('.filter_data').html(data);
               


             }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());console.log(filter);
        });
        return filter;

    }
   

    $('.common_selector').click(function(){
        filter_data();
    });

});
</script>

<style>

	.dropdown_button_menu::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #F5F5F5;
}

.dropdown_button_menu::-webkit-scrollbar
{
	width: 6px;
	background-color: #F5F5F5;
}

.dropdown_button_menu::-webkit-scrollbar-thumb
{
	background-color: #000000;border-radius: 5px;
}


</style>






















































































<?php include("includes/footer.php"); ?>
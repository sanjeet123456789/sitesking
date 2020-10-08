
<?php

$connect = new PDO("mysql:host=localhost;dbname=siteskin_sitesking", "siteskin_pal", "Sanjeet@12345");
if(isset($_POST["action"]) and isset($_POST["term"]))
{ 


  $term=$_POST['term'];
if (!empty($term)) {
$term = explode(" ", $_POST['term']);
 $query = "
  SELECT * FROM community WHERE name like '%$term[0]%'
 ";

 for($i = 1; $i < count($term); $i++) {
        if(!empty($term[$i])) {
            $query .= " or  name like '%" . $term[$i] . "%' ";
        }
      }

    







 
 $statement_filter_count = $connect->prepare($query);
 $statement_filter_count->execute();

 $total_row_filter_count = $statement_filter_count->rowCount();


 
 if(isset($_POST['per_page_records']) and isset($_POST['setoffset'])){
  $per_page_records= $_POST['per_page_records'];
  $setoffset= $_POST['setoffset'];
  $setoffset2=$setoffset*$per_page_records;
  $per_page_records2=$setoffset*$per_page_records+50;

  $query.=" and filter is null limit $setoffset2,$per_page_records2";
  /*echo "page is set";
  echo $setoffset2;
  echo "zzzzz";
  echo $per_page_records2;*/
  
 }




 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';



 if($term=='' || $total_row== 0) {
    echo "<div class='result_found'>0 Result found </div>";

}else{

  
        $output .='<div class="result_found">'.$total_row_filter_count.' Result Found</div><style>
        .follower{
            background: #d8d8d8;
    border-radius: 12px;
    padding: 2px 7px;
    color: #333;
    margin-left:5px;
  }
  .post_detail_header_title_search{
    display:inline-flex;
  }

        </style>';







    foreach($result as $row) {
        

        /* start of search result content*/
        

                          
$pic=$row['pic_link'];
    if($pic=="blue"){
      $pic_link_reddit="assets/images/icons/blue.png";
    }
    else if($pic=="black"){
      $pic_link_reddit="assets/images/icons/black.png";
    }else if($pic=="orange"){
      $pic_link_reddit="assets/images/icons/orange.png";
    }
    else if($pic=="red"){
      $pic_link_reddit="assets/images/icons/red.png";
    }
    else if($pic=="gray"){
      $pic_link_reddit="assets/images/icons/gray.png";
    }
    else if($pic=="green"){
      $pic_link_reddit="assets/images/icons/green.png";
    }
    else if($pic=="brown"){
      $pic_link_reddit="assets/images/icons/brown.png";
    }
    else if($pic=="pink"){
      $pic_link_reddit="assets/images/icons/pink.png";
    }
    else if($pic=="yellow"){
      $pic_link_reddit="assets/images/icons/yellow.png";
    }








    else{
        // if($id==110){
        //  $pic_link_reddit="assets/images/icons/blue.png";
        // }else{
        //  $pic_link_reddit=$pic;
        // }
      $pic_link_reddit=$pic;
      
    }
                      
                          
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

                   
                     $parent_id_name=$row['parent_id'];  
                  if($parent_id_name>=200 and $parent_id_name<299){
                    $parent_id_name="q/";
                  }else if($parent_id_name>=300 and $parent_id_name<399){
                      $parent_id_name="f/";
                  }else if($parent_id_name>=400 and $parent_id_name<499){
                      $parent_id_name="t/";
                  }else if($parent_id_name>=500 and $parent_id_name<599){
                      $parent_id_name="g/";
                  }else if($parent_id_name>=600 and $parent_id_name<699){
                      $parent_id_name="top/";
                  }else if($parent_id_name>=700 and $parent_id_name<799){
                      $parent_id_name="v/";
                  }else if($parent_id_name>=800 and $parent_id_name<899){
                      $parent_id_name="y/";
                  }else if($parent_id_name>=100 and $parent_id_name<199){
                      $parent_id_name="r/";
                  }else {
                      $parent_id_name="";
                  }  
                    



                $output .= '<script> var totaljump= '.$total_row_filter_count.';
                

                </script>



                <div class="post_detail_header">
                          <div class="post_detail_header_image"><a href="'.$row['link'].'">
                            <img  src='.$pic_link_reddit.'>
                            </a>
                          </div>
                          <div class="post_detail_header_right">
                            <div class="post_detail_header_right_left"> 

              <div class="post_detail_top_button">
                            <div class="button_side_gap">
                            
                            <div class="post_detail_header_title post_detail_header_title_search"><a role="link" href="'.$row['link'].'">'.$parent_id_name.'
                              '.$row['name'].'   </a><div class="follower">  '.$follow.'</div>
                              
                            </div>
                            
                            
                            </div>
                          
                        </div>
                            
                                  
                            </div>
                          </div>
                       </div>
                      ';



                        

            


        /* end of search result content */
    }


}








 

 echo $output;
 

 
 
}
$output="NO RESULT FOUND";

}
?>
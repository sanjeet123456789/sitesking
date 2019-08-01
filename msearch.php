<link rel="stylesheet" type="text/css" href="assets/css/search_mobi.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>


 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
<script type="text/javascript">
            var timerStart = Date.now();
</script>

<?php 
if(isset($_COOKIE['night_mode']) ){
 echo '<script> 
 window.onload = function(){
    $("#daynightimagebutton").hide();
    $("#daynightimagebutton2").show();
    $(".night-mode-pic").show();
    $(".day-mode-pic").hide();
    nightmode_activate();
}
  </script>';  
}else if(isset($_COOKIE['day_mode'])){
  echo '<script> 
 window.onload = function(){
    $("#daynightimagebutton").show();
    $("#daynightimagebutton2").hide();
    $(".night-mode-pic").hide();
    $(".day-mode-pic").show();
  }
  </script>';  
}







 ?>
<script>

function fill(Value) {

   //Assigning value to "search" div in "search.php" file.

   $('#search').val(Value);

   //Hiding "display" div in "search.php" file.

   $('#display').hide();

}

$(document).ready(function() {

   //On pressing a key on "Search box" in "search.php" file. This function will be called.

   $("#search-text").keyup(function() {

       //Assigning search box value to javascript variable named as "name".

       var name = $('#search-text').val();

       //Validating, if "name" is empty.

       if (name == "") {

           //Assigning empty value to "display" div in "search.php" file.

           $("#display").html("");

       }

       //If name is not empty.

       else {

           //AJAX is called.

           $.ajax({

               //AJAX type is "Post".

               type: "POST",

               //Data will be sent to "ajax.php".

               url: "includes/handlers/ajax/search_ajax.php",

               //Data, that will be sent to "ajax.php".

               data: {

                   //Assigning value of "name" into "search" variable.

                   search: name

               },

               //If result found, this funtion will be called.

               success: function(html) {

                   //Assigning result to "display" div in "search.php" file.

                   $("#display").html(html).show();

               }

           });

       }

   });

});
var userLoggedIn;
</script>

<script>
function showOptionMenu(button){
  var songId=$(button).prevAll(".SongsId").val();
  var menu=$(".optionMenu");
  var menuwidth=menu.width();
  menu.find(".SongsId").val(songId);
  var scrollTop=$(window).scrollTop();//distance from top of window to top of document
  var elementOffset=$(button).offset().top;//distance from top of document

  var top=elementOffset-scrollTop;
  var left=$(button).position().left;
  menu.css({"top":top+"px","left":left +36/* - menuwidth*/ +"px","display":"inline"});
}
 function nightmode_activate(){

var nightModeToggleButton=document.querySelector(".daynightbutton");
var nightModeToggleimageButton=document.querySelector(".daynightbutton");

var everything=document.querySelector("*");
var everything_body=document.querySelector("body");

var footer_night=document.querySelector(".footer");

var search_overlay_mobile_night=document.querySelector("#search-overlay");
var main_content_container_night=document.querySelector("#main-content-container");
var main_content_result_night=document.querySelector(".main-content-result");

main_content_result_night.classList.toggle("night-mode");
everything_body.classList.toggle("night-mode");
main_content_container_night.classList.toggle("night-mode");
footer_night.classList.toggle("night-mode");


everything.classList.toggle("night-mode");

}




/* start loading */
var myVar
function loading_gif() {
  myVar = setTimeout(showPage, 10);
}
function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("mybody").style.display = "block";
}
/* end loading */

/* start night button */
function activate_nightmode_ajax(){
$.post("/night_mode_ajax.php",function(){
 
});
  
}
function desctivate_nightmode_ajax(){
$.post("/day_mode_ajax.php",function(){
 
});
}
  function night_mode_button(){
    activate_nightmode_ajax();
    $("#daynightimagebutton").hide();
    $("#daynightimagebutton2").show();
    $(".night-mode-pic").show();
    $(".day-mode-pic").hide();
    nightmode_activate();

  }
  function day_mode_button(){
    desctivate_nightmode_ajax();
    $("#daynightimagebutton").show();
    $("#daynightimagebutton2").hide();
    $(".day-mode-pic").show();
    $(".night-mode-pic").hide();
    nightmode_activate();
  }
/* night button */
</script>





<style>
/* snake bar*/
#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
 /* snake bar */
form,body{
  margin:0;
}
.night-mode #search-box{background: #1b1a23;border-bottom: 1px solid #312f40;}
.night-mode #display ul{background: #1b1a23;}
#search-box{
  padding:1%;
  width:100%;
 height:46px;
  box-sizing: border-box;
  border-bottom: 1px solid lightgray;
}
@media screen and (max-width:500px){
  #search-button{display:none;}
  form #search-text{width:90%;}
 .centered #search-box #close-btn {width:10%;margin-top:1%;}

}
@media screen and (max-width:350px){
  
  form #search-text{width:85%;}
  .centered  #search-box #close-btn {width:14%;margin:2% 0 0 1%;height:33px;}


}
#search-overlay .centered .#searchbox{
  width:100%;
  height:100%;
  padding:1%;
  box-sizing:border-box;
  display:inline-block;
  border-bottom:1px solid lightgray;

}

 #search-box #close-btn{
  width:8%;
  float:left;
  margin-top:0.5%;
  height:100%;
}
#search-text{
padding:6px;
width:80%;
height:100%;
border:none;
background-color: #e6e6e6;
border-radius:5px;
}
#search-button{
      padding: 6px;
    width: 11%;
    color: white;
    height: 100%;
   
    border-radius: 2px;
   
    border: none;
    background: #0397d6;
}

/* start loading */

#loader {
 position: absolute;
    left: 50%;
    top: 50%;
    z-index: 1;
    width: 150px;
    height: 150px;
    margin: -50px 0 0 -32px;
    border: 5px solid #f3f3f3;
    border-radius: 50%;
    border-top: 5px solid #3498db;
    width: 50px;
    height: 50px;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-10px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-10px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
 
}



/* end loading */
</style>

 
 <div id="loader"></div>

<div style="display:none;" id="mybody" class="animate-bottom">




<div id="search-overlay" class="block">
  <div class="centered">
    <div id='search-box'>

      <form action='msearch.php?term=' id='search-form' method='get' target='_top'>
              <i id="close-btn" ><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="26" 
viewBox="0 0 224 224"
style=" fill:#000000;" class="day-mode-pic"><g transform="translate(9.184,9.184) scale(0.918,0.918)"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="none" stroke-linecap="butt" stroke-linejoin="none" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g fill="#666666" stroke="#666666" stroke-width="20" stroke-linejoin="round"><path d="M59.21788,71.68088c1.2003,2.83619 0.5363,6.11835 -1.67204,8.26495l-24.5875,24.5875h176.10833c2.69275,-0.03808 5.19741,1.37667 6.55489,3.70252c1.35749,2.32585 1.35749,5.20245 0,7.5283c-1.35749,2.32585 -3.86215,3.7406 -6.55489,3.70252h-176.10833l24.5875,24.5875c1.95058,1.87277 2.73631,4.65372 2.05418,7.27034c-0.68213,2.61662 -2.72555,4.66003 -5.34217,5.34217c-2.61662,0.68213 -5.39757,-0.1036 -7.27034,-2.05418l-36.6625,-36.6625c-0.01462,-0.00967 -0.0292,-0.01939 -0.04375,-0.02916c-1.84128,-1.41759 -2.91768,-3.61157 -2.91197,-5.93533c0.00572,-2.32376 1.0929,-4.51241 2.94113,-5.92093l36.67708,-36.67708c1.35237,-1.39189 3.1935,-2.20262 5.13333,-2.26042c3.07838,-0.09078 5.89674,1.71761 7.09704,4.5538z"></path></g><path d="M0,224v-224h224v224z" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><g fill="#666666" stroke="none" stroke-width="1" stroke-linejoin="miter"><path d="M52.12083,67.12708c-1.93983,0.0578 -3.78096,0.86852 -5.13333,2.26042l-36.67708,36.67708c-1.84823,1.40851 -2.93542,3.59717 -2.94113,5.92093c-0.00572,2.32376 1.07068,4.51774 2.91197,5.93533c0.01455,0.00977 0.02913,0.01949 0.04375,0.02916l36.6625,36.6625c1.87277,1.95058 4.65372,2.73631 7.27034,2.05418c2.61662,-0.68213 4.66003,-2.72555 5.34217,-5.34217c0.68213,-2.61662 -0.1036,-5.39757 -2.05418,-7.27034l-24.5875,-24.5875h176.10833c2.69275,0.03808 5.19741,-1.37667 6.55489,-3.70252c1.35749,-2.32585 1.35749,-5.20245 0,-7.5283c-1.35749,-2.32585 -3.86215,-3.7406 -6.55489,-3.70252h-176.10833l24.5875,-24.5875c2.20834,-2.1466 2.87234,-5.42876 1.67204,-8.26495c-1.2003,-2.83619 -4.01866,-4.64458 -7.09704,-4.5538z"></path></g><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path></g></g></svg>

<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="26" height="26"
viewBox="0 0 224 224"
style=" fill:#000000; display:none;" class="night-mode-pic"><g transform="translate(9.072,9.072) scale(0.919,0.919)"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="none" stroke-linecap="butt" stroke-linejoin="none" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g fill="#ffffff" stroke="#ffffff" stroke-width="20" stroke-linejoin="round"><path d="M59.21788,71.68088c1.2003,2.83619 0.5363,6.11835 -1.67204,8.26495l-24.5875,24.5875h176.10833c2.69275,-0.03808 5.19741,1.37667 6.55489,3.70252c1.35749,2.32585 1.35749,5.20245 0,7.5283c-1.35749,2.32585 -3.86215,3.7406 -6.55489,3.70252h-176.10833l24.5875,24.5875c1.95058,1.87277 2.73631,4.65372 2.05418,7.27034c-0.68213,2.61662 -2.72555,4.66003 -5.34217,5.34217c-2.61662,0.68213 -5.39757,-0.1036 -7.27034,-2.05418l-36.6625,-36.6625c-0.01462,-0.00967 -0.0292,-0.01939 -0.04375,-0.02916c-1.84128,-1.41759 -2.91768,-3.61157 -2.91197,-5.93533c0.00572,-2.32376 1.0929,-4.51241 2.94113,-5.92093l36.67708,-36.67708c1.35237,-1.39189 3.1935,-2.20262 5.13333,-2.26042c3.07838,-0.09078 5.89674,1.71761 7.09704,4.5538z"></path></g><path d="M0,224v-224h224v224z" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><g fill="#ffffff" stroke="none" stroke-width="1" stroke-linejoin="miter"><path d="M52.12083,67.12708c-1.93983,0.0578 -3.78096,0.86852 -5.13333,2.26042l-36.67708,36.67708c-1.84823,1.40851 -2.93542,3.59717 -2.94113,5.92093c-0.00572,2.32376 1.07068,4.51774 2.91197,5.93533c0.01455,0.00977 0.02913,0.01949 0.04375,0.02916l36.6625,36.6625c1.87277,1.95058 4.65372,2.73631 7.27034,2.05418c2.61662,-0.68213 4.66003,-2.72555 5.34217,-5.34217c0.68213,-2.61662 -0.1036,-5.39757 -2.05418,-7.27034l-24.5875,-24.5875h176.10833c2.69275,0.03808 5.19741,-1.37667 6.55489,-3.70252c1.35749,-2.32585 1.35749,-5.20245 0,-7.5283c-1.35749,-2.32585 -3.86215,-3.7406 -6.55489,-3.70252h-176.10833l24.5875,-24.5875c2.20834,-2.1466 2.87234,-5.42876 1.67204,-8.26495c-1.2003,-2.83619 -4.01866,-4.64458 -7.09704,-4.5538z"></path></g><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path></g></g></svg><a>


</i>
        <input id='search-text' name='term' placeholder='Search' type='text'  autocomplete="off"/>

        <button id='search-button' type='submit'>                     
          <span>Search</span>
          </button><div id="display"></div>
      </form>
</div></a></a></i></form></div>

<?php 





  
function get_row_count(){
        $term=$_GET['term'];
        $term = explode(" ", $_GET['term']);
        $cos=mysqli_connect('localhost','goosefil_pal','Sitesking@12','goosefil_goosefile');
          if(!$cos){
            die('Failed to connect');
          }
        $sql="SELECT count(*) as rows FROM software_list WHERE (name like '%$term[0]%' or Tags like '%$term[0]%' ) and id IN (
              SELECT MAX(id)
              FROM software_list
              GROUP BY version_control
          )";
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

            /*  if(isset($_POST["action"]))
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
                      
        <div class="main-content-center-container">

            <div class="main-content-center-left">
              <div class="main-content-center-content main-tab">
                <div class="main-content-result">
                    <div class="result_found_section">

                                <div class="result_found_section">
                                  <div id="checkbox-container">
                        <div class="result_filter_right">
                        <div class="result_sort_button" style="float: right;">
                        
                        <label class="dropdown_sort">
                        <div class="dropdown_button" >license</div>

                           <?php
                           $connect = new PDO("mysql:host=localhost;dbname=goosefil_goosefile", "goosefil_pal", "Sitesking@12");

                    $query = "SELECT name FROM licence ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();


                  echo  ' <input type="checkbox" class="dropdown_button_input"><ul class="dropdown_button_menu">';$i=1;
                    foreach($result as $row)
                    {
                    ?><?php $i++; ?>
                    
                        
                        <li><label ><input type="checkbox" class="common_selector licence" id="licence<?php echo $i; ?>" value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></label>
                            </li>
                    
                    
                    <?php
                    }
                    echo '</ul>';

                    ?>


                        </label>
                        <label class="dropdown_sort">

                          <div class="dropdown_button">category</div>

                           <?php
                           $connect = new PDO("mysql:host=localhost;dbname=goosefil_goosefile", "goosefil_pal", "Sitesking@12");

                    $query2 = "SELECT title FROM software_categories where sort_order=1 ";
                    $statement2 = $connect->prepare($query2);
                    $statement2->execute();
                    $result2 = $statement2->fetchAll();


                  echo  ' <input type="checkbox" class="dropdown_button_input"><ul class="dropdown_button_menu">';$i=123; 
                    foreach($result2 as $row)
                    {
                    ?><?php $i++; ?>
                    
                        
                        <li><label><input type="checkbox" class="common_selector category" id="category<?php echo $i; ?>" value="<?php echo $row['title'] ?>"><?php echo $row['title'] ?></label>
                            </li>
                    
                    
                    <?php
                    }
                    echo '</ul>';

                    ?>










                           
                          
                        </label>
                        <label class="dropdown_sort">
                        <div class="dropdown_button">sort</div>
                          <input type="checkbox" class="dropdown_button_input">

                          <ul class="dropdown_button_menu">
                            <li><label ><input type="checkbox" class="common_selector popular" id="popular" value="popular">popular</label></li>
                            <li><label ><input type="checkbox" class="common_selector recent" id="recent" value="recent">recent</label></li>
                            <li><label ><input type="checkbox" class="common_selector size" id="size" value="size">size</label></li>
                            <li class="divider"></li>
                             <li><label ><input type="checkbox" class="common_selector ascending" id="ascending" value="ascending">ascending</label></li>
                             <li><label ><input type="checkbox" class="common_selector descending" id="descending" value="descending">descending</label></li>
                            <li class="divider"></li>

                           
                          </ul>
                          
                        </label>


                        </div>
                        </div>










                                  
                                  
                                  


                                </div>
                                  <div class="col-md-9">
                                   
                                 <div class="row filter_data" style="min-height: 1000px;">

                                      </div>
                          </div>

                              </div>

                          
                          
                        
                    </div>            
              </div>
              </div>

                    <div class="main-tab related_post "> 
                    <h3 style="margin:0 0 1% 0;">Related Search</h3>
                    <div class="realted_post">
                      <?php   
                   $term=$_GET['term'];
                   if (!empty($term)) {
                $term = explode(" ", $_GET['term']);
                   $cos=mysqli_connect('localhost','goosefil_pal','Sitesking@12','goosefil_goosefile');
                   $sql="SELECT name   FROM search_suggestion WHERE name like '%$term[0]%' ";
                for($i = 1; $i < count($term); $i++) {
                      if(!empty($term[$i])) {
                          $sql .= " or  name like '%" . $term[$i] . "%' ";
                      }
                    }
                    $sql .="order by instr(name, '$term[0]') DESC";

                      $result_suggestion=mysqli_query($cos,$sql);

                      if(mysqli_num_rows($result_suggestion)>0){
                        $row_suggestion=mysqli_fetch_assoc($result_suggestion);

                      
                      
                      foreach($result_suggestion as $row_suggestion) {
                              echo '  
                                 <a href="search.php?term='.$row_suggestion['name'].'" hr> <li><label><div  class="related_category_suggest"  value="'. $row_suggestion['name'] .'"> ' .$row_suggestion['name'] .'</div></label>
                                        </li></a>';
                                
                                
                               
                                }
                                echo '</ul>';
                            }else{echo '<a hr> <li><label><div  class="related_category_suggest"> no result found</div></label>
                                        </li></a>';}
                              }   
                                else{
                        echo '<a hr> <li><label><div  class="related_category_suggest"> no result found</div></label>
                                        </li></a>';
                      }









                        ?>







                    </div>
                </div>
                <div class="main-tab pagination-tab "> 
                <div class="realted_post"></div>
                </div>
          </div>
          <div class="main-content-sidebar main-tab"></div>
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

        $pagination_button=5;
        $page_number=(isset($_GET['page']) And !empty($_GET['page']))? $_GET['page']:1;
        $per_page_records=10;
        $rows=get_row_count();
        

        $last_page =ceil($rows/$per_page_records);
        $pagination='';
        $pagination .='<div class="area-label" id="hide_pagination"><ul class="pagination">';
        
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
              $pagination .='<li class="active"><a href="msearch.php?term='.$term.'&page='.$i.'">'.$i.'</a></li>';
            }else{
              $pagination .='<li><a href="msearch.php?term='.$term.'&page='.$i.'">'.$i.'</a></li>';
            }
          }
          if($last_page>$pagination_button){
          $pagination .='<li><a href="msearch.php?term='.$term.'&page='.($pagination_button+1).'">&raquo;</a></li>';
        }



        }
        else if($page_number>=$pagination_button and $last_page>$pagination_button){

          if(($page_number+$half)>=$last_page){
            $pagination .='<li><a href="msearch.php?term='.$term.'&page='.($last_page-$pagination_button).'">&laquo;</a></li>';
            for($i=($last_page-$pagination_button)+1;$i<=$last_page;$i++){
              if($i==$page_number){
                $pagination .='<li class="active"><a href="search.php?term='.$term.'&page='.$i.'">'.$i.'</a></li>';
              }else{
                $pagination .='<li><a href="msearch.php?term='.$term.'&page='.$i.'">'.$i.'</a></li>';
              }
            }
            
          }else if(($page_number+$half)<$last_page){
            $pagination .='<li><a href="msearch.php?term='.$term.'&page='.(($page_number-$half)-1).'">&laquo;</a></li>';
            for($i=$page_number-$half;$i<=($page_number+$half);$i++){
              if($i==$page_number){
                $pagination .='<li class="active"><a href="msearch.php?term='.$term.'&page='.$i.'">'.$i.'</a></li>';
              }else{
                $pagination .='<li><a href="msearch.php?term='.$term.'&page='.$i.'">'.$i.'</a></li>';
              }
            }$pagination .='<li><a href="msearch.php?term='.$term.'&page='.(($page_number+$half)+1).'">&raquo;</a></li>';

          }



          
        }
          else if($page_number<$pagination_button){

            for($i=1;$i<=$last_page;$i++){
                if($i==$page_number){
                  $pagination .='<li class="active"><a href="msearch.php?term='.$term.'&page='.$i.'">'.$i.'</a></li>';
                }else{
                  $pagination .='<li><a href="msearch.php?term='.$term.'&page='.$i.'">'.$i.'</a></li>';
                }

            }
          }
        
        $pagination .='</div></ul>';
        echo $pagination;
      }



 ?>
<?php pagination();  ?>
    
<?php 
if(isset($_GET['term'])){
  $term=urldecode($_GET['term']);
}
$per_page_records=10;
$setoffset=((isset($_GET['page']) And !empty($_GET['page']))? $_GET['page']:1)-1;
 ?>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        
        
        var term ='<?php echo $term ?>';
        
        var per_page_records ='<?php echo $per_page_records ?>';
        var setoffset ='<?php echo $setoffset ?>';

        
        var category = get_filter('category');
        var licence = get_filter('licence');
        var popular=get_filter('popular');
        var recent=get_filter('recent');
        var size=get_filter('size');
        var ascending=get_filter('ascending');
        var descending=get_filter('descending');

        
        

       
        $.ajax({
            url:"includes/handlers/ajax/fetch_search_data.php",
            method:"POST",
            data:{action:action,  category:category,licence:licence,term:term,per_page_records:per_page_records,setoffset:setoffset, popular:popular,recent:recent,size:size,ascending:ascending,descending:descending},
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
/* search suggestion*/

.realted_post li{list-style: none;display: inline-flex;
    padding: 7px;
    margin: 7px;
    background: #0093de;
    color: white;
    border-radius: 20px; 

  }
.related_post a{text-decoration: none;}
.related_category_suggest,.related_search_suggest{cursor: pointer;}


/* end search suggestion*/










.post_detail_top_button .button_gap {display: none;
}





  /* drop down scrollbar*/ 
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
/* end dropdown scrollbar */

</style>

<style>
/* start dropdown */

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










/* end dropdown */






/* start body section */
@media (max-width: 420px) {
  .tech_head,.feat_head,.change_head{
  width:100%;
  color:#0093de;
  margin-top:10px;
  font-weight:200;
}
.tech_desc,.feat_desc,.change_desc{
  margin-top:3px;
  width:100%; 
  font-size: 14px;
  font-weight: 600;
}
.desc_content{
  margin:0 7px;
}

}
@media (min-width: 420px) {
.feat_head,.change_head{
  font-size:14px;
  font-weight: 600;
  margin:12px 0 5px 0;
}
.feat_desc,.change_desc{
  font-size:15px;
}
  .tech_head{
  width:30%;
  float:left;
  font-size: 14px;
  font-weight: 600;

}
.tech_desc{
  width:70%;
  float:right;
}
}
.desc_content{
  width: 98%;
    margin: 7px;
    display:inline-block;
}









.post_detail_header_company_name .link{color:#0093de;}
.post_detail_heade_company_description{
  display: block;
  display: -webkit-box;
  margin-top:11px;
  max-width:80%;
  height: 28px;
  font-size: 14px;
  line-height: 1;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}
.post_detail_header{
  display:inline-flex;
  width:98%;
  height:100px;
  padding:1%;
  box-sizing: border-box;

      
}
.post_detail_header_image img{
  width:80px;
  height:80px;

  border-radius: 5px;
}



.post_detail_header_right_left{
      float: left;
    width: 100%;
    padding:0 0 0 15px;
}
.post_detail_header_title{
  font-size: 20px;
  font-weight: 500;
}
.post_detail_header_company_name{
  font-size:16px;
  font-weight: 200;

}
.post_detail_header_title span,.post_detail_header_company_licence {
  font-size:13px;
  font-weight: 10;
}
 .post_detail_header_image{
    width:15%;
  }
   .post_detail_header_right{
    width:85%;
  }
  @media (max-width: 600px){
    .result_sort_button{
      display: contents;
    }
  }
@media (max-width: 768px) {
  .post_detail_header_image{
    width:25%;
  }
   .post_detail_header_right{
    width:75%;
  }
}
@media (max-width: 400px) {
  .dropdown_sort{margin:0;}
  .dropdown_button{padding: 10px 29px 10px 13px;}
}
@media (max-width: 500px) {
  .post_detail_header_image{
    width:20%;
  }
  .post_detail_header_right{
    width:80%;
  }
  .post_detail_header{
    height:120px;
  }
}
@media (max-width: 365px) {
  .post_detail_header_image{
    width:43%;
  }
  .post_detail_header{
    height:140px;
  }
}

/* start of  pagination */
.area-label{
  text-align:center;
  background: #fafafa;
}
.night-mode .area-label{
  background: #16151d;
} 
.area-label ul{
  display:inline-flex;
  
  padding:0;
  
}
.pagination li{
  list-style: none;
  

}
.pagination li a{
  padding:12px;
  text-decoration: none;
  margin:0 7px;
  border-radius: 5px;
  color:#555;
  box-shadow: 0 2px 8px rgba(0,0,0,0.30), 0 2px 2px rgba(0,0,0,0.22);

}
.pagination li a:hover,.pagination li.active a{
  background-color: #0093de;
  color:white;
}

.main-content-result .result_found_section .result_found{
  font-size:20px;
  font-weight:600;
  box-sizing: border-box;
    padding: 5px;
        margin: 10px 5;
 

}

.main-content-result .result_found_section li.tracklistrow{
      width: 100%;
      list-style: none;
    height: 130px;
    padding: 5px;
    box-sizing: border-box;
        background:white;
    margin-top: 13px;
    border-radius: 5px;
    box-shadow: 0 0px 3px rgba(0,0,0,0.30), 0 0px 0px rgba(0,0,0,38.22);
    

}


/* end of pagination */
</style>


























  
<?php include("includes/footer.php"); ?>
</div></div>
</div>
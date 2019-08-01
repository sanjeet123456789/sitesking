

          <?php include("includes/header.php");


           ?>
          <!--<php echo $tab_index_post->getdesc(); ?>
          <php echo $description_tab_post->getpara3_heading(); ?>
          <php echo $description_tab_post->getpara2_description(); ?>-->

          <!-- end header-->
          <!--  blog post -->


          <div id="main-content-container">

                  <div id="main-content">

                      <div id="main-content-Left">
                         
                      </div>

                      <div id="main-content-Center">
                        <div class="breadcrumb" style="padding: 13px 0;display: none;" >
          <!-- 
                          <a href="index.php" role="link">Home</a> &raquo;
                          
                         <a role="link" href='<php echo $categories_post->getparent_file_location(); ?>'><php echo $categories_post->getparent_file_title();  ?></a> &raquo;
                          <a role="link" href='<php echo $categories_post->getpage_id(); ?>'><php echo $categories_post->getTitle(); ?></a>&raquo;
                          <a role="link" style="color:#0397d6;" href="<php echo 'artist.php?id='.$postId.''; ?>" ><php echo $software_post->getName(); ?></a>
           -->


                       </div>

                        <div class="main-content-center-container">

                          <div class="main-content-center-left" style="width:100%;">
                          <div class="main-content-center-content main-tab">
                            <div class="main-content-result">
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
                           <h1 style="display: none;">Columns Responsive Layout</h1>






<?Php
/////// Update your database login details here /////
$dbhost_name = "localhost"; // Your host name 
$database = "siteskin_sitesking";       // Your database name
// $database = "plus2net";
$username = "siteskin_pal";            // Your login userid 
$password = "Sanjeet@12345";            // Your password 
//////// End of database details of your server //////

//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host='.$dbhost_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
?> 
<SCRIPT language=JavaScript>
function reload(form)
{
var val=form.cat.options[form.cat.options.selectedIndex].value; 
self.location='group_invite.php?cat=' + val ;
}
function reload3(form)
{
var val=form.cat.options[form.cat.options.selectedIndex].value; 
var val2=form.subcat.options[form.subcat.options.selectedIndex].value; 

self.location='group_invite.php?cat=' + val + '&cat3=' + val2 ;
}

</script>
</head>

<body>
  

<?Php

error_reporting(E_ALL ^ E_NOTICE);
///////// Getting the data from Mysql table for first list box//////////
$quer2="SELECT DISTINCT id,plateform_name FROM source_platform_name where  filter is null"; 
///////////// End of query for first list box////////////

/////// for second drop down list we will check if category is selected else we will display all the subcategory///// 



$cat=$_GET['cat']; // This line is added to take care if your global variable is off
if(isset($cat) and strlen($cat) > 0){


$quer="SELECT DISTINCT id,name FROM country_name where filter LIKE '%$cat%' "; 
}else{$quer="SELECT DISTINCT id,name FROM country_name where filter LIKE '%$cat%' "; } 
////////// end of query for second subcategory drop down list box ///////////////////////////


/////// for Third drop down list we will check if sub category is selected else we will display all the subcategory3///// 
$cat3=$_GET['cat3']; // This line is added to take care if your global variable is off
if(isset($cat3) and strlen($cat3) > 0){

$quer3="SELECT DISTINCT id,category FROM category_name where  filter LIKE '%$cat3%' "; 
}else{$quer3="SELECT DISTINCT id,category FROM category_name where  filter LIKE '%$cat3%'"; } 
////////// end of query for third subcategory drop down list box ///////////////////////////





?>
<!-- end of coombo box selection -->

 <!--   <form  enctype="multipart/form-data" method="post" action="includes/handlers/community_link_submit.php" > -->
  <form>

  <header>
























<!--     <h2>Example Responsive Form2</h2>
    
  </header>
  <div class="filter">
<div>
    <label class="desc" id="title1" for="Field1">Source Name:</label>
    <div>
<-- drop 1 paste 

    </div>
  </div>
    
  <div>
    <label class="desc" id="title3" for="Field3">
      Country:
    </label>
    <div>
<-- drop 2 paste 
   </div>
  </div>
      <div>
    <label class="desc" id="title3" for="Field4">
      Category:
    </label>
    <div>
<-- drop 3 paste 
   </div>
  </div>

</div>
</form> -->













                                <div class="result_found_section">
                                  <div id="checkbox-container">
                        <div class="result_filter_right">
                        <div class="result_sort_button" style="float: right;">
                        
                        <label class="dropdown_sort">
                        <div class="dropdown_button" >


                          <?php
      //////////        Starting of first drop downlist /////////
echo "<select name='cat' onchange=\"reload(this.form)\">";
foreach ($dbo->query($quer2) as $noticia2) {
if($noticia2['id']==@$cat){echo "<option selected value='$noticia2[id]'>$noticia2[plateform_name]</option>"."<BR>";}
else{echo  "<option value='$noticia2[id]'>$noticia2[plateform_name]</option>";}
}
echo "</select>";
//////////////////  This will end the first drop down list ///////////?>




                        </div>
                      </label>
                        <label class="dropdown_sort">

                          <div class="dropdown_button">


                                <?php
      //////////        Starting of second drop downlist /////////
echo "<select name='subcat' onchange=\"reload3(this.form)\"><option value=''>Select one</option>";
foreach ($dbo->query($quer) as $noticia) {
if($noticia['id']==@$cat3){echo "<option selected value='$noticia[id]'>$noticia[name]</option>"."<BR>";}
else{echo  "<option value='$noticia[id]'>$noticia[name]</option>";}
}
echo "</select>";
//////////////////  This will end the second drop down list ///////////?>




                          </div>
  
                        </label>
                        <label class="dropdown_sort">
                        <div class="dropdown_button">

                                    <?php
     
//////////        Starting of third drop downlist /////////
echo "<select name='subcat3' style='display:none;'><option value=''>Select one</option>";
foreach ($dbo->query($quer3) as $noticia) {
echo  "<option value='$noticia[id]'>$noticia[category]</option>";
}
echo "</select>";
//////////////////  This will end the third drop down list ///////////?>

                        </div>
                          
                          
                        </label>


                        </div>
                        </div>










                                  
                                  
                                  


                                </div>
                                  <div class="col-md-9">
                                   
                                 <div class="heading" style="padding: 1%;font-size: 32px; ">
                                  Group Invitation

                                      </div>
                          </div>

                              </div>





<style>




@media screen and (max-width: 600px){
  .result_sort_button{
    width:100%;
  }
    .heading{
      text-align: center;
    }
}
.dropdown_button select option{
  height:300px;
  overflow: auto;
}





.dropdown_sort {
  display: inline-block;
  position: relative;
  
}

.dropdown_button select{
  display: inline-block;
  border: 1px solid gray;
  border-radius: 4px;
/*  padding: 10px 30px 10px 20px;*/
padding:10px;
  background-color: #fafafa;
  color:#1b1a23;
  cursor: pointer;
  font-weight: 550;
    font-size: 16px;
  white-space: nowrap;
}
.night-mode .dropdown_button select{
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
/*.dropdown_button:after {
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
}*/



  


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





































          <div class="autowide">


 <!-- module 1 start -->
<div class="module">
 
<div class="main_col_head">
<div class="main_col_title">Top Recommended</div>
<div class="main_co2l_title"></div>
</div>
<div class="pal-scroll" >
<div class="list-more-container" >
<input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

<style type="text/css">
  .class_list li span{
    background: #d8d8d8;
    border-radius: 12px;
    padding: 2px 7px;
    color: #333;
  }
  .blog-post li,.class_list li{
        white-space: nowrap;
    /* box-shadow: inset 0px 10px 8px -20px #000000, inset 0px -10px 4px -10px #000; */
    border-top: 1px solid #bfb4b4;
    width: 98%;
    padding: 1%;
    margin: 0px 0px;
    background: #fff;
    color: #333;
    float: left;
    /* border-radius: 2px; */
    text-align: left;
    list-style: none;
    overflow: hidden;
    text-overflow: ellipsis;

  }

  .roller{
    display: none;
  }
  .night-mode .class_list li{
    background: #1b1a23;
    color:white;
  }
  .class_list li{
    background:white;
    color:#333;
  }
</style>
 <script type="text/javascript">
    
// $(document).ready(function(){
// var flag=0;
//     $.ajax({
//     type:"GET",
//     url:"get_data.php",
//     data:{
//       'offset':0,
//       'limit':10
//     },
//     success:function(data){
//       $('.blog-post').append(data);
//       flag+=10;
//     }

//   });


//   $(".pal").scroll(function(){

// if(this.offsetHeight + this.scrollTop == this.scrollHeight){
//      alert("at the bottom");
//           $.ajax({
//         type:"GET",
//         url:"get_data.php",
//         data:{
//           'offset':flag,
//           'limit':5
//         },
//         success:function(data){
//           $('.blog-post').append(data);
//           flag +=4;
//         }

//       });
//     }
//   });
// });

    
// $(document).ready(function(){
// var flag=0;
//   $.ajax({
//     type:"GET",
//     url:"includes/handlers/ajax/get_data_reddit1.php",
//     data:{
//       'offset':0,
//       'limit':15

//     },
//     success:function(data){
//       $('#top-list-quora').append(data);
//       flag+=10;
//     }

//   });

//   $(".pal-scroll").scroll(function(){
//     if(this.offsetHeight + this.scrollTop == this.scrollHeight){
//       // alert("at the bottom");
//           $.ajax({
//         type:"GET",
//         url:"includes/handlers/ajax/get_data_reddit1.php",
//         data:{
//           'offset':flag,
//           'limit':5
//         },
//         success:function(data){
//           $('#top-list-quora').append(data);
//           flag +=5;
//         }

//       });
//     }
//   });
// });





  </script>
  <style type="text/css">
    
.list-more-container li{    white-space: nowrap;
    /* box-shadow: inset 0px 10px 8px -20px #000000, inset 0px -10px 4px -10px #000; */
    border-top: 1px solid #bfb4b4;
    width: 98%;
    padding: 1%;
    margin: 0px 0px;
    background: #fff;
    color: #333;
    float: left;
    /* border-radius: 2px; */
    text-align: left;
    list-style: none;
    overflow: hidden;
    text-overflow: ellipsis;}



  </style>
</head>
<div class="class_list top-list-quora" id="top-list-quora">
  

</div>









</div>
</div>
<div class="main_co2l_title_bottom" style="padding:5px;"> </div>
 
</div>

<!-- start of dependent vombobox -->

<!-- end of combobox -->
<!-- module 2 start -->



                  <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Motivation</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-1" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">
 <script>        
function getUrlParam(parameter, defaultvalue){
    var urlparameter = defaultvalue;
    if(window.location.href.indexOf(parameter) > -1){
        urlparameter = getUrlVars()[parameter];
        }
    return urlparameter;
}
function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}
// var number = getUrlVars()["cat"];
// var mytext = getUrlVars()["cat3"];
// var cat = getUrlParam('cat','');
// var mytext2 = getUrlParam('text','Empty');
var cat=getUrlParam('cat','');
var cat3=getUrlParam('cat3','');



if(cat!=='' && cat3=='' || cat!=='' && cat3!==''){
// document.write("str2 variable is not exists <br/>"+cat+cat3);

$(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:'GET',
                      url:'includes/handlers/ajax/get_data_group_invite.php',
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':1,
                        'cat':cat,
                        'cat3':cat3

                      },
                      success:function(data){
                        $('#1').append(data);
                        flag+=10;
                      }

                    });

                    $('.pal-scroll-1').scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert('at the bottom');
                            $.ajax({
                          type:'GET',
                          url:'includes/handlers/ajax/get_data_group_invite.php',
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':1,
                            'cat':cat,
                            'cat3':cat3
                          },
                          success:function(data){
                            $('#1').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });



}





// document.write("str2 variable is not exists <br/>"+number+mytext+mytext2);

// if(typeof($cat3)!= "undefined"){


// var str1=typeof($cat3);

//          // console.log(str1);
                     



// }



                   </script>
                     <!-- <?php  


                  // echo $cat3;
                    // $quer3="SELECT DISTINCT id,name FROM community Where  parent_id between 100 and 200  ";
                    // $i=1;
                    // foreach ($dbo->query($quer3) as $noticia) {
                    //     // echo  "<option value='$noticia[id]'>$noticia[category]</option>";


                    //     echo '<li>'.$i.' <a class="web_link" target="_blank" href="'.$noticia['id'].'" ><img   src="hello.png"  class="web_icon" >f/'.$noticia['name'].'  </a><span class="follower"></span></li>';$i++;
                    //     }



              

                 
              // if(isset($_GET['cat'])==null and isset($_GET['cat3'])!==null){
              //       $cat3=$_GET['cat3'];
              //       echo $cat3;
              // }





 ?> -->

                  </head>
                  <div class="class_list class-1" id="1">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
   </div>

<!-- module 3 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">jobs & Business</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-2" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
var cat=getUrlParam('cat','');
var cat3=getUrlParam('cat3','');



if(cat!=='' && cat3=='' || cat!=='' && cat3!==''){
// document.write("str2 variable is not exists <br/>"+cat+cat3);

$(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:'GET',
                      url:'includes/handlers/ajax/get_data_group_invite.php',
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':2,
                        'cat':cat,
                        'cat3':cat3

                      },
                      success:function(data){
                        $('#2').append(data);
                        flag+=10;
                      }

                    });

                    $('.pal-scroll-2').scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert('at the bottom');
                            $.ajax({
                          type:'GET',
                          url:'includes/handlers/ajax/get_data_group_invite.php',
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':2,
                            'cat':cat,
                            'cat3':cat3
                          },
                          success:function(data){
                            $('#2').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });



}




                    </script>
                  </head>
                  <div class="class_list class-2" id="2">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start  module 4 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Sports</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-3" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
var cat=getUrlParam('cat','');
var cat3=getUrlParam('cat3','');



if(cat!=='' && cat3=='' || cat!=='' && cat3!==''){
// document.write("str2 variable is not exists <br/>"+cat+cat3);

$(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:'GET',
                      url:'includes/handlers/ajax/get_data_group_invite.php',
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':3,
                        'cat':cat,
                        'cat3':cat3

                      },
                      success:function(data){
                        $('#3').append(data);
                        flag+=10;
                      }

                    });

                    $('.pal-scroll-3').scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert('at the bottom');
                            $.ajax({
                          type:'GET',
                          url:'includes/handlers/ajax/get_data_group_invite.php',
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':3,
                            'cat':cat,
                            'cat3':cat3
                          },
                          success:function(data){
                            $('#3').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });



}




                    </script>
                  </head>
                  <div class="class_list class-3" id="3">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start module 5 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Education</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-4" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
var cat=getUrlParam('cat','');
var cat3=getUrlParam('cat3','');



if(cat!=='' && cat3=='' || cat!=='' && cat3!==''){
// document.write("str2 variable is not exists <br/>"+cat+cat3);

$(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:'GET',
                      url:'includes/handlers/ajax/get_data_group_invite.php',
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':4,
                        'cat':cat,
                        'cat3':cat3

                      },
                      success:function(data){
                        $('#4').append(data);
                        flag+=10;
                      }

                    });

                    $('.pal-scroll-4').scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert('at the bottom');
                            $.ajax({
                          type:'GET',
                          url:'includes/handlers/ajax/get_data_group_invite.php',
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':4,
                            'cat':cat,
                            'cat3':cat3
                          },
                          success:function(data){
                            $('#4').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });



}



                    </script>
                  </head>
                  <div class="class_list class-4" id="4">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>

<!-- start module 6 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Religious</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-5" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                    
var cat=getUrlParam('cat','');
var cat3=getUrlParam('cat3','');



if(cat!=='' && cat3=='' || cat!=='' && cat3!==''){
// document.write("str2 variable is not exists <br/>"+cat+cat3);

$(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:'GET',
                      url:'includes/handlers/ajax/get_data_group_invite.php',
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':5,
                        'cat':cat,
                        'cat3':cat3

                      },
                      success:function(data){
                        $('#5').append(data);
                        flag+=10;
                      }

                    });

                    $('.pal-scroll-5').scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert('at the bottom');
                            $.ajax({
                          type:'GET',
                          url:'includes/handlers/ajax/get_data_group_invite.php',
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':5,
                            'cat':cat,
                            'cat3':cat3
                          },
                          success:function(data){
                            $('#5').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });



}


                    </script>
                  </head>
                  <div class="class_list class-5" id="5">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>



<!-- module 7 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Community</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-6" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
var cat=getUrlParam('cat','');
var cat3=getUrlParam('cat3','');



if(cat!=='' && cat3=='' || cat!=='' && cat3!==''){
// document.write("str2 variable is not exists <br/>"+cat+cat3);

$(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:'GET',
                      url:'includes/handlers/ajax/get_data_group_invite.php',
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':6,
                        'cat':cat,
                        'cat3':cat3

                      },
                      success:function(data){
                        $('#6').append(data);
                        flag+=10;
                      }

                    });

                    $('.pal-scroll-6').scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert('at the bottom');
                            $.ajax({
                          type:'GET',
                          url:'includes/handlers/ajax/get_data_group_invite.php',
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':6,
                            'cat':cat,
                            'cat3':cat3
                          },
                          success:function(data){
                            $('#6').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });



}


                    </script>
                  </head>
                  <div class="class_list class-6" id="6">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>

<!-- start module 8 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Health & Fitness</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-7" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
var cat=getUrlParam('cat','');
var cat3=getUrlParam('cat3','');



if(cat!=='' && cat3=='' || cat!=='' && cat3!==''){
// document.write("str2 variable is not exists <br/>"+cat+cat3);

$(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:'GET',
                      url:'includes/handlers/ajax/get_data_group_invite.php',
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':7,
                        'cat':cat,
                        'cat3':cat3

                      },
                      success:function(data){
                        $('#7').append(data);
                        flag+=10;
                      }

                    });

                    $('.pal-scroll-7').scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert('at the bottom');
                            $.ajax({
                          type:'GET',
                          url:'includes/handlers/ajax/get_data_group_invite.php',
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':7,
                            'cat':cat,
                            'cat3':cat3
                          },
                          success:function(data){
                            $('#7').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });



}



                    </script>
                  </head>
                  <div class="class_list class-7" id="7">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>




 <!-- start module 9 -->
           <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Art and Photography</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-8" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                    
var cat=getUrlParam('cat','');
var cat3=getUrlParam('cat3','');



if(cat!=='' && cat3=='' || cat!=='' && cat3!==''){
// document.write("str2 variable is not exists <br/>"+cat+cat3);

$(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:'GET',
                      url:'includes/handlers/ajax/get_data_group_invite.php',
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':8,
                        'cat':cat,
                        'cat3':cat3

                      },
                      success:function(data){
                        $('#8').append(data);
                        flag+=10;
                      }

                    });

                    $('.pal-scroll-8').scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert('at the bottom');
                            $.ajax({
                          type:'GET',
                          url:'includes/handlers/ajax/get_data_group_invite.php',
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':8,
                            'cat':cat,
                            'cat3':cat3
                          },
                          success:function(data){
                            $('#8').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });



}



                    </script>
                  </head>
                  <div class="class_list class-8" id="8">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>




<!-- start module 10 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">places & Travel</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-9" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
 if(cat!=='' && cat3=='' || cat!=='' && cat3!==''){
// document.write("str2 variable is not exists <br/>"+cat+cat3);

$(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:'GET',
                      url:'includes/handlers/ajax/get_data_group_invite.php',
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':9,
                        'cat':cat,
                        'cat3':cat3

                      },
                      success:function(data){
                        $('#9').append(data);
                        flag+=10;
                      }

                    });

                    $('.pal-scroll-9').scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert('at the bottom');
                            $.ajax({
                          type:'GET',
                          url:'includes/handlers/ajax/get_data_group_invite.php',
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':9,
                            'cat':cat,
                            'cat3':cat3
                          },
                          success:function(data){
                            $('#9').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });



}



                    </script>
                  </head>
                  <div class="class_list class-9" id="9">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start module 11 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">pet & animal</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-10" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
 if(cat!=='' && cat3=='' || cat!=='' && cat3!==''){
// document.write("str2 variable is not exists <br/>"+cat+cat3);

$(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:'GET',
                      url:'includes/handlers/ajax/get_data_group_invite.php',
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':10,
                        'cat':cat,
                        'cat3':cat3

                      },
                      success:function(data){
                        $('#10').append(data);
                        flag+=10;
                      }

                    });

                    $('.pal-scroll-10').scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert('at the bottom');
                            $.ajax({
                          type:'GET',
                          url:'includes/handlers/ajax/get_data_group_invite.php',
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':10,
                            'cat':cat,
                            'cat3':cat3
                          },
                          success:function(data){
                            $('#10').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });



}





                    </script>
                  </head>
                  <div class="class_list class-10" id="10">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>



<!-- start module 12 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Buy & Sale</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-11" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
 if(cat!=='' && cat3=='' || cat!=='' && cat3!==''){
// document.write("str2 variable is not exists <br/>"+cat+cat3);

$(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:'GET',
                      url:'includes/handlers/ajax/get_data_group_invite.php',
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':11,
                        'cat':cat,
                        'cat3':cat3

                      },
                      success:function(data){
                        $('#11').append(data);
                        flag+=10;
                      }

                    });

                    $('.pal-scroll-11').scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert('at the bottom');
                            $.ajax({
                          type:'GET',
                          url:'includes/handlers/ajax/get_data_group_invite.php',
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':11,
                            'cat':cat,
                            'cat3':cat3
                          },
                          success:function(data){
                            $('#11').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });



}

                    </script>
                  </head>
                  <div class="class_list class-11" id="11">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>



<!-- start module 13 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">content promotion</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-12" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                      
 if(cat!=='' && cat3=='' || cat!=='' && cat3!==''){
// document.write("str2 variable is not exists <br/>"+cat+cat3);

$(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:'GET',
                      url:'includes/handlers/ajax/get_data_group_invite.php',
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':12,
                        'cat':cat,
                        'cat3':cat3

                      },
                      success:function(data){
                        $('#12').append(data);
                        flag+=10;
                      }

                    });

                    $('.pal-scroll-12').scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert('at the bottom');
                            $.ajax({
                          type:'GET',
                          url:'includes/handlers/ajax/get_data_group_invite.php',
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':12,
                            'cat':cat,
                            'cat3':cat3
                          },
                          success:function(data){
                            $('#12').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });



}

                    </script>
                  </head>
                  <div class="class_list class-12" id="12">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start module 14 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Fan Club</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-13" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                      
 if(cat!=='' && cat3=='' || cat!=='' && cat3!==''){
// document.write("str2 variable is not exists <br/>"+cat+cat3);

$(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:'GET',
                      url:'includes/handlers/ajax/get_data_group_invite.php',
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':13,
                        'cat':cat,
                        'cat3':cat3

                      },
                      success:function(data){
                        $('#13').append(data);
                        flag+=10;
                      }

                    });

                    $('.pal-scroll-13').scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert('at the bottom');
                            $.ajax({
                          type:'GET',
                          url:'includes/handlers/ajax/get_data_group_invite.php',
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':13,
                            'cat':cat,
                            'cat3':cat3
                          },
                          success:function(data){
                            $('#13').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });



}





                    </script>
                  </head>
                  <div class="class_list class-13" id="13">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start module 15 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">account and link sharing</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-14" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
 if(cat!=='' && cat3=='' || cat!=='' && cat3!==''){
// document.write("str2 variable is not exists <br/>"+cat+cat3);

$(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:'GET',
                      url:'includes/handlers/ajax/get_data_group_invite.php',
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':14,
                        'cat':cat,
                        'cat3':cat3

                      },
                      success:function(data){
                        $('#14').append(data);
                        flag+=10;
                      }

                    });

                    $('.pal-scroll-14').scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert('at the bottom');
                            $.ajax({
                          type:'GET',
                          url:'includes/handlers/ajax/get_data_group_invite.php',
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':14,
                            'cat':cat,
                            'cat3':cat3
                          },
                          success:function(data){
                            $('#14').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });



}




                    </script>
                  </head>
                  <div class="class_list class-14" id="14">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>



<!-- start module 16 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">coupon code sharing</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-15" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                    
 if(cat!=='' && cat3=='' || cat!=='' && cat3!==''){
// document.write("str2 variable is not exists <br/>"+cat+cat3);

$(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:'GET',
                      url:'includes/handlers/ajax/get_data_group_invite.php',
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':15,
                        'cat':cat,
                        'cat3':cat3

                      },
                      success:function(data){
                        $('#15').append(data);
                        flag+=10;
                      }

                    });

                    $('.pal-scroll-15').scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert('at the bottom');
                            $.ajax({
                          type:'GET',
                          url:'includes/handlers/ajax/get_data_group_invite.php',
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':15,
                            'cat':cat,
                            'cat3':cat3
                          },
                          success:function(data){
                            $('#15').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });



}




                    </script>
                  </head>
                  <div class="class_list class-15" id="15">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start module 17 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Cracks and Reg.. key  sharing</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-16" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
 if(cat!=='' && cat3=='' || cat!=='' && cat3!==''){
// document.write("str2 variable is not exists <br/>"+cat+cat3);

$(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:'GET',
                      url:'includes/handlers/ajax/get_data_group_invite.php',
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':16,
                        'cat':cat,
                        'cat3':cat3

                      },
                      success:function(data){
                        $('#16').append(data);
                        flag+=10;
                      }

                    });

                    $('.pal-scroll-16').scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert('at the bottom');
                            $.ajax({
                          type:'GET',
                          url:'includes/handlers/ajax/get_data_group_invite.php',
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':16,
                            'cat':cat,
                            'cat3':cat3
                          },
                          success:function(data){
                            $('#16').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });



}




                    </script>
                  </head>
                  <div class="class_list class-16" id="16">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>





<!-- start module 18 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">pronography</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-17" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
 if(cat!=='' && cat3=='' || cat!=='' && cat3!==''){
// document.write("str2 variable is not exists <br/>"+cat+cat3);

$(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:'GET',
                      url:'includes/handlers/ajax/get_data_group_invite.php',
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':17,
                        'cat':cat,
                        'cat3':cat3

                      },
                      success:function(data){
                        $('#17').append(data);
                        flag+=10;
                      }

                    });

                    $('.pal-scroll-17').scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert('at the bottom');
                            $.ajax({
                          type:'GET',
                          url:'includes/handlers/ajax/get_data_group_invite.php',
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':17,
                            'cat':cat,
                            'cat3':cat3
                          },
                          success:function(data){
                            $('#17').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });



}




                    </script>
                  </head>
                  <div class="class_list class-17" id="17">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>
<!-- start module 19 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Illegal</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-18" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
 if(cat!=='' && cat3=='' || cat!=='' && cat3!==''){
// document.write("str2 variable is not exists <br/>"+cat+cat3);

$(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:'GET',
                      url:'includes/handlers/ajax/get_data_group_invite.php',
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':18,
                        'cat':cat,
                        'cat3':cat3

                      },
                      success:function(data){
                        $('#18').append(data);
                        flag+=10;
                      }

                    });

                    $('.pal-scroll-18').scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert('at the bottom');
                            $.ajax({
                          type:'GET',
                          url:'includes/handlers/ajax/get_data_group_invite.php',
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':18,
                            'cat':cat,
                            'cat3':cat3
                          },
                          success:function(data){
                            $('#18').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });



}

                    </script>
                  </head>
                  <div class="class_list class-18" id="18">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>



<!-- start module 20 -->

          

<!-- start module 21 -->


<!-- start module 22 -->



<!-- end module -->



                              
                                  
                            </div>
                          
                            

                    </div>

 





















                  </div><div class="main-content-sidebar main-tab" style="display: none;">
                             
          <!-- <?php include("includes/sidebar.php"); ?> -->

                        </div>
                          



                        </div>

                                
                      </div>

                  <div id="main-content-Right" style="display: none;">
                      
                       
                  </div>
               </div>

          </div>






          <!-- end blog post -->

          <!-- start column edit -->

          <style>
          .pal::-webkit-scrollbar ,.pal-scroll::-webkit-scrollbar{
              width: 0.4em;
              background-color: transparent;
              /*-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);*/
              -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
              border-radius: 20px;
          }

          .pal::-webkit-scrollbar-thumb,.pal-scroll::-webkit-scrollbar-thumb {
              background-color: gray;
              border-radius: 20px;
          }
          .pal::-webkit-scrollbar-track,.pal-scroll::-webkit-scrollbar-track {
              background-color: transparent;
          }
          body::-webkit-scrollbar {
              width: 0.7em;
              background-color: transparent;
              -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
              border-radius: 20px;
          }

          body::-webkit-scrollbar-thumb {
              background-color: gray;
              border-radius: 20px;
          }
          body::-webkit-scrollbar-track {
              background-color: transparent;
          }
          .list-more-container ul {
            
            padding:0;
            margin:0;
          }
          .night-mode .list-more-container ul li{
          background: #16151d;
              color: #fffefe;
              border-top: 1px solid #fffcfc;


          }

          .list-more-container ul li {
          white-space: nowrap;
          /*box-shadow: inset 0px 10px 8px -20px #000000, inset 0px -10px 4px -10px #000;*/
              border-top: 1px solid #bfb4b4;
            width:98%;
          padding: 1%;    margin: 0px 0px;
           background:#fff;
            color: #333;
            float: left;
          /*border-radius:2px;*/
          overflow: hidden;
          text-overflow: ellipsis;
          }
          .night-mode .list-more-container ul li:hover{
            background: #333;
          }
          .list-more-container ul li:hover{
          background:#efefef;
          }
          .night-mode .web_link{
            color:white;

          }

          .web_link{
            cursor:pointer;
            color:#333;
          text-decoration: none;
          }
          .web_link:hover{
            text-decoration: underline;
          }
          .web_icon{
          border-radius: 50%;
          background-color: #fff;
          width:25px;
          height:25px;
          margin:-10px 10px 0px 10px;
          }
          .main_col_title{
          text-align: center;
          font-size: 32px; 
          color:white;
          height:40px;
             width: 100%;
              overflow: hidden;
              text-overflow: ellipsis

          }
          .main_co2l_title{

          font-size: 13px; 
           color:#e6e6e6;
          }
          .main_co2l_title_bottom{
            background-color: inherit;
              border-bottom-left-radius: 5px;
              border-bottom-right-radius: 5px;
          }
          .pal,.pal-scroll{
          background-color: white;
          overflow: auto; 
          height:344px;
          }
          .night-mode .pal,.night-mode .pal-scroll{
            background: #1b1a23;
          }
          .main_col{
          margin: 6px;
          border-radius:5px;
          box-shadow: 0 2px 8px rgba(0,0,0,0.30), 0 2px 2px rgba(0,0,0,0.22);
          }
          .night-mode .main_col_head{
            border-bottom: 1px solid lightgrey;
          }
          .main_col_head{
          text-align: center;
           background-color: inherit;
          border-top-left-radius: 8px;
          border-top-right-radius: 8px;
          border-bottom:1px solid lightgrey;

          }
          .list-more-container ul li:nth-child(1n + 2) {
            max-height: 0;
            opacity: 0;
            display:none;
           
          }
          .list-more-container ul li:nth-child(1n + 2) {
            max-height: 0;
            opacity: 0;
            display:none;
           
          }
          .list-more-container .loadmore-btn{
            float:right;
            padding-right:5px;
           text-align:center;
              height: 35px;
              cursor: pointer;

          }
          .list-more-container .loadmore-btn:hover {
            
          }
          .list-more-container .loadmore-btn .loaded_content {
            display: none;
          }
          </style>
          <!-- end column content edit -->

          <style type="text/css">
            
          body {
            font-family: sans-serif;
            font-size: .9rem;
          }
          .main-content-result h1 {
            text-align: center;
            margin:5px 0;
          }

          /* 1 column: 320px */
          .autowide {
            margin: 0 auto;
            width: 100%;
            display: inline-block;
          }
          .autowide img {
            float: left;
            margin: 0 .75rem 0 0;
          }
          .autowide .module {
           /* background-color: lightgrey;*/
          background: black;
          border:1px solid lightgrey;
            border-radius:0.50rem;
            margin-bottom: 1rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.30), 0 2px 2px rgba(0,0,0,0.22);
          }
          .autowide .module p {
            padding: .25rem .75rem;
          }

          /* 2 columns: 600px */
          @media only screen and (min-width: 600px) {
            .autowide .module {
              float: left;
              margin-right: 2.564102564102564%;
              width: 48.317948717948715%;
              
            }
            .autowide .module:nth-child(2n+0) {
              margin-right: 0;
            }
          }

          /* 3 columns: 768px */
          @media only screen and (min-width: 768px) {
            .autowide .module {
              width: 31.323931623931625%;
              
            }
            .autowide .module:nth-child(2n+0) {
              margin-right: 2.564102564102564%;
            }
            .autowide .module:nth-child(3n+0) {
              margin-right: 0;
            }
          }

          /* 4 columns: 992px and up */
          @media only screen and (min-width: 992px) {
            .autowide .module {
              width: 22.776923076923077%;
              
            }
            .autowide .module:nth-child(3n+0) {
              margin-right: 2.564102564102564%;
            }
            .autowide .module:nth-child(4n+0) {
              margin-right: 0;
            }
          }

          </style>

            </div>
          <!-- start footer-->

          <?php include("includes/footer.php"); ?>
          <!-- end footer-->
          </body>
          </html>







<!-- end of  body getyoutube.com -->








<!DOCTYPE html>
<html lang="en-US">
<head>
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>
<style>

</style>


<style>

body {
    transition: background-color .5s;
}

.offcanvas {
    height: 100%;
    width: 0;
    top: 0;
    left: 0;
    background-color: #111;
    position: fixed;
    z-index: 3;
    overflow-x: hidden;
    transition: .5s;
    padding-top: 60px;
}
.offcanvas a,.offcanvas2 a {
    padding: 8px 8px 8px 32px;
    text-decoration: none !important;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: .3s
}
.offcanvas a:hover, .offcanvas a:focus,.offcanvas2 a:hover{
    color: #f1f1f1;
}
.closeOffcanvas {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px !important;
    margin-left: 50px;
}
//only for full screen
#mainContent {
    transition: margin-left .5s;
}
@media screen and (max-height: 500px) {
  .offcanvas {padding-top:15px;}
  .offcanvas a {font-size: 18px;}
}

.sidenav5 {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 3;
    top: 0;
    left: 0;
    background-color: #1b1a23;
    overflow-x: hidden;
    transition: 0.5s;
    text-align:center;
}

.sidenav5 a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #fff;
    display: block;
   /* transition: 0.3s
*/
}

.sidenav5 a:hover{
    color: #fff;
    text-decoration: none;
}

.sidenav5 .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px !important;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav5 {padding-top: 15px;}
  .sidenav5 a {font-size: 18px;}
}
body{
  background-color: #ffffff00;
}

a:hover{text-decoration:none;}

.form-group,.panel-default{text-align: left;}
</style>

<body >
<div id="mainContent">

  <div id="myCanvasNav" class="overlay3" onclick="closeOffcanvas()"></div>


<!-- 
  //end of without animaation
 <div></div>
  ///only for full layout -->

  <div id="mySidenav" class="sidenav5">
  <a href="javascript:void(0)" class="closebtn" onclick="window.history.go(-1);">&times;</a>
  <div class="floral_image" style="display: none;"><img src="assets/images/floral2.png" alt="Paris" style="width:50%;"></div>
  <a href="#">Frequently ask Question</a>
 <!-- start of commenting system -->

<?php
//index.php

?>

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

 <body>
  <br />

  <br />
  <div class="container">
   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>
 </body>


<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>
 <!-- end of comment system -->
  </div>
  
  
  
 <!--  //enf of full layout -->

 
 <!-- <button class="w3-btn w3-dark-grey w3-padding" onclick="openNav4()">Sidenav full-width</button><br> -->

<script>
window.onload = function() {
  openNav4();
};

function closeOffcanvas() {
    document.getElementById("myOffcanvas").style.width = "0%";
    document.getElementById("mainContent").style.marginLeft= "0%";
    document.body.style.backgroundColor = "white";
    document.getElementById("myCanvasNav").style.width = "0%";
    document.getElementById("myCanvasNav").style.opacity = "0"; 
}
function openNav4() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav4() {
    document.getElementById("mySidenav").style.width = "0";
}

</script>




</body>
</html>
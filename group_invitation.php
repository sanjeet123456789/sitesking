
<!DOCTYPE html>
<html lang="en-US">
<head>
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>
<style>

</style>


<style>

body {
  background: white;
    transition: background-color .5s;
}

.offcanvas {
    height: 100%;
    width: 0;
    top: 0;
    left: 0;
    background-color: #111;
    position: fixed;
    /*z-index: 3;*/
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
    /*transition: .3s;*/
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
    /*position: fixed;*/
    /*z-index: 3;*/
    top: 0;
    left: 0;
    background-color: inherit;
    /*overflow-x: hidden;*/
    /*transition: 0.5s;*/
    text-align:center;
}

.sidenav5 a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
   /* transition: 0.3s
*/
}

.sidenav5 a:hover{
    color: #8190b4;
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

</style>
</head>
<body >
<div id="mainContent">

  <div id="myCanvasNav" class="overlay3" onclick="closeOffcanvas()"></div>


<!-- 
  //end of without animaation
 <div></div>
  ///only for full layout -->

  <div id="mySidenav" class="sidenav5">
  <a href="javascript:void(0)" class="closebtn" onclick="location.href = 'index.php';">&times;</a>
  <div class="floral_image"><img src="assets/images/floral.png" alt="Paris" style="width:50%;"></div>

</div>
<!-- start of form  -->
<!-- start of combobox selection -->

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
  * {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  padding: 20px 15%;
}
form header {
  margin: 0 0 20px 0; 
}
form header div {
  text-align: center;
  font-size: 90%;
  color: #999;
}
form header h2 {
  text-align: center;
  margin: 0 0 5px 0;
}
form > div {
  clear: both;
  overflow: hidden;
  padding: 1px;
  margin: 0 0 10px 0;
}
form > div > fieldset > div > div {
  margin: 0 0 5px 0;
}
form > div > label,
legend {
     width: 25%;
    float: left;
    font-size: 16px;
    padding-right: 10px;
    font-weight: 550;
}
form > div > div,
form > div > fieldset > div {
  width: 75%;
  float: right;
}
form > div > fieldset label {
  font-size: 90%;
}
fieldset {
  border: 0;
  padding: 0;
}

input[type=text],
input[type=email],
input[type=url],
input[type=password],
textarea {
  padding: 3px;
  width: 100%;
  border-top: 1px solid #ccc;
  border-left: 1px solid #ccc;
  border-right: 1px solid #eee;
  border-bottom: 1px solid #eee;
}
input[type=text],
input[type=email],
input[type=url],
input[type=password] {
  width: 50%;
}
input[type=text]:focus,
input[type=email]:focus,
input[type=url]:focus,
input[type=password]:focus,
textarea:focus {
  outline: 0;
  border-color: #4697e4;
}

@media (max-width: 600px) {
  form > div {
    margin: 0 0 15px 0; 
  }
  form > div > label,
  legend {
    width: 100%;
    float: none;
    margin: 0 0 5px 0;
  }
  form > div > div,
  form > div > fieldset > div {
    width: 100%;
    float: none;
  }
  input[type=text],
  input[type=email],
  input[type=url],
  input[type=password],
  textarea,
  select {
    padding:3px;
    width: 100%; 
    box-shadow: 0 2px 8px rgba(0,0,0,0.30), 0 2px 2px rgba(0,0,0,0.22);
  }
}
@media (min-width: 1200px) {
  form > div > label,
  legend {
    text-align: right;
  }
}
</style>
<!-- stylefor new design -->
<style type="text/css">
.form_choice div{
      display: inline-block;
    border: 1px solid gray;
    border-radius: 4px;
    /* padding: 10px 30px 10px 20px; */
    padding: 10px;
    background-color: #fafafa;
    color: #1b1a23;
    cursor: pointer;
    font-weight: 550;
    font-size: 16px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.select_option select, .input_field input{
      display: inline-block;
    border: 1px solid gray;
    border-radius: 4px;
    /* padding: 10px 30px 10px 20px; */
    padding: 10px;
    background-color: #fafafa;
    color: #1b1a23;
    cursor: pointer;
    font-weight: 550;
    font-size: 16px;
    white-space: nowrap;
    max-width: 100%;
}







</style>
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
self.location='group_invitation.php?cat=' + val ;
}
function reload3(form)
{
var val=form.cat.options[form.cat.options.selectedIndex].value; 
var val2=form.subcat.options[form.subcat.options.selectedIndex].value; 

self.location='group_invitation.php?cat=' + val + '&cat3=' + val2 ;
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







































   <form  enctype="multipart/form-data" method="post" action="includes/handlers/group_invitation_submit.php" >

  <header>

    <div class="form_choice"><div class="form1_choice"><a href="submit.php">Community Link</a></div><div class="form2_choice" style="background: lightgrey;"><a href="group_invitation.php">Group Invitations</a></div></div>
    <style type="text/css">
      
.form_choice{width: 100%;
    display: inline-flex;
    padding: 10px;

  }

    .form2_choice{
          color: black;
    width: 50%;
    background: lightgrey;
    padding: 2%;
    font-size: 15px;
    border-left: 2px solid gray;
    box-shadow: 0 0px 1px rgba(0,0,0,0.3), 0 1px 1px rgba(0,0,0,0.2);

    }
    .form1_choice{
    color:black;
    font-size: 15px;
    width: 50%;
   padding: 2%;
    box-shadow: skyblue;
    box-shadow: 0 0px 1px rgba(0,0,0,0.3), 0 1px 1px rgba(0,0,0,0.2);
      
    }






.form1_choice a,.form2_choice a{
  color:inherit;
  text-decoration: none;
  cursor: pointer;
}
.form1_choice:hover a,.form2_choice:hover a{
  text-decoration: underline;
}

    </style>

    <h2>Group Invitation Link Submittion</h2>
    <div>This form is to submit link of Whatsapp,Telegram,hike,discord,wechat,Line</div>
  </header>
  
  <div>
    <label class="desc" id="title1" for="Field1">Source Name:</label>
    <div class="select_option">
<?php
      //////////        Starting of first drop downlist /////////
echo "<select name='cat' onchange=\"reload(this.form)\"><option value=''>Select one</option>";
foreach ($dbo->query($quer2) as $noticia2) {
if($noticia2['id']==@$cat){echo "<option selected value='$noticia2[id]'>$noticia2[plateform_name]</option>"."<BR>";}
else{echo  "<option value='$noticia2[id]'>$noticia2[plateform_name]</option>";}
}
echo "</select>";
//////////////////  This will end the first drop down list ///////////?>

    </div>
  </div>
    
  <div>
    <label class="desc" id="title3" for="Field3">
      Country:
    </label>
    <div class="select_option">
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
  </div>
      <div>
    <label class="desc" id="title3" for="Field4">
      Category:
    </label>
    <div class="select_option">
      <?php
     
//////////        Starting of third drop downlist /////////
echo "<select name='subcat3' ><option value=''>Select one</option>";
foreach ($dbo->query($quer3) as $noticia) {
echo  "<option value='$noticia[id]'>$noticia[category]</option>";
}
echo "</select>";
//////////////////  This will end the third drop down list ///////////?>
   </div>
  </div>

 <div class="input_field">
    <label class="desc" id="title3" for="Field4">
      Group Name:
    </label>
    <div class="input_field">
      <input id="Field4" name="Field4" type="text" spellcheck="false" value="" maxlength="255" tabindex="3"> 
   </div>
  </div>

   <div class="input_field">
    <label class="desc" id="title5" for="Field5">
      Group Link:
    </label>
    <div>
      <input id="Field5" name="Field5" type="text" spellcheck="false" value="" maxlength="255" tabindex="3"> 
   </div>
  </div>










<!--   <div>
    <label class="desc" id="title6" for="Field6">
      Message<sub>(optional*)</sub>
    </label>
  
    <div>
      <textarea id="Field4" name="Field6" spellcheck="true" rows="10" cols="50" tabindex="4"></textarea>
    </div>
  </div> -->
    



   <!--   
  <div>

  <fieldset>
    
      <legend id="title5" class="desc">
        Select a Choice
      </legend>
      
      <div>
        <input id="radioDefault_5" name="Field5" type="hidden" value="">
        <div>
          <input id="Field5_0" name="Field5" type="radio" value="First Choice" tabindex="5" checked="checked">
          <label class="choice" for="Field5_0">First Choice</label>
        </div>
        <div>
          <input id="Field5_1" name="Field5" type="radio" value="Second Choice" tabindex="6">
          <label class="choice" for="Field5_1">Second Choice</label>
        </div>
        <div>
          <input id="Field5_2" name="Field5" type="radio" value="Third Choice" tabindex="7">
          <label class="choice" for="Field5_2">Third Choice</label>
        </div>
      </div>
    </fieldset>
  </div>
  
  <div>
    <fieldset>
      <legend id="title6" class="desc">
        Check All That Apply
      </legend>
      <div>
      <div>
        <input id="Field6" name="Field6" type="checkbox" value="First Choice" tabindex="8">
        <label class="choice" for="Field6">First Choice</label>
      </div>
      <div>
        <input id="Field7" name="Field7" type="checkbox" value="Second Choice" tabindex="9">
        <label class="choice" for="Field7">Second Choice</label>
      </div>
      <div>
        <input id="Field8" name="Field8" type="checkbox" value="Third Choice" tabindex="10">
        <label class="choice" for="Field8">Third Choice</label>
      </span>
      </div>
    </fieldset>
  </div>
  
  <div>
    <label class="desc" id="title106" for="Field106">
      Select a Choice
    </label>
    <div>
    <select id="Field106" name="Field106" class="field select medium" tabindex="11"> 
      <option value="First Choice">First Choice</option>
      <option value="Second Choice">Second Choice</option>
      <option value="Third Choice">Third Choice</option>
    </select>
    </div>
  </div>
   -->



     




       <div class="input_field">
    <label class="desc" id="title7" for="Field7">
      Select icon<sub>(optional*)</sub>
    </label>
  
    <div>
     <!--  your city<input type="text" name="c"/><br/> -->
      <input type="file" name="file"/><br/>
    </div>
  </div>
    
     <!-- your city<input type="text" name="c"/><br/> -->
     
  <!--   <input type="submit" value="Upload" name="upload"/> -->


  <div>
    <div class="input_field">
      <input id="saveForm" name="saveForm" type="submit" value="Submit">
    </div>
  </div>
  
</form>

   
   <!-- end of form content -->
 
  
  
  
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



























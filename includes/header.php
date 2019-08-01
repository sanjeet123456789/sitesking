<?php


//session_destroy(); LOGOUT




?>
<!-- <php 

$to='sanjeetpal007@gmail.com';
$subject='This is our testemaill';
$message='<h1>hi sanjeet</h1><p>Thanks for testing</p>';
$headers="from:The Sender Name<sender@sanjeetpal123456789@gmail.com>\r\n";
$headers .="Replay-To:test/html\r\n";
$headers .="content-type:text/html\r\r";
mail($to,$subject,$message,$headers);



 ?> -->
<?php 

if( !defined('FOO_EXECUTED') ){
    
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

    define('FOO_EXECUTED', TRUE);
}



 ?>

<html >

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="assets/favicon-sitesking.png" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="assets/css/header-footer.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> 
<!-- <script src="includes/ajax.js"></script>  -->
<script src="assets/js/header-footer.js"></script>
<script type="text/javascript">
            var timerStart = Date.now();
</script>
</head>
<body >
  
 <div id="loader"></div>

<div style="display:none;" id="mybody" class="animate-bottom">


    <!-- Modal content -->
<div id="myModal" class="modal">

  
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>
<!-- end model content -->
    <!-- start header-->
<div id="mainContent">

      <div id="myCanvasNav" class="overlay3" onclick="closeOffcanvas()"></div>
      <div id="myOffcanvas" class="offcanvas">

        <a href="javascript:void(0)" class="closeOffcanvas" onclick="closeOffcanvas()">&times;</a>
         <div class="sidemenu-group  sidemenu-last-group" style=" border-bottom:none;">
              <a href="#"><output id="status"><span>Light mode</span></output> <main>
                  <div class="toggle_button">
                    
                    <div class="switch" id="switch">
                      <input id="myswitch" type="checkbox" name="myswitch"  >
                      <label for="myswitch"></label>
                    </div>

                    
                  </div>
                  
                </main> </a>
                
             
      </div>
        <div class="sidemenu-group  sidemenu-first-group">
              <a href="reddit.php"> <img src="assets/images/icons/reddit-icons.png" ><span style="
    padding-top: 15;
    padding-left: 8px;
">Reddit</span></a>
              <a href="quora.php" ><img src="assets/images/icons/quora-icons.png" ><span style="
    padding-top: 15;
    padding-left: 8px;
">Quora</span></a>
              <a href="youtube.php"><img src="assets/images/icons/youtube-icons.png" ><span style="
    padding-top: 15;
    padding-left: 8px;
">youtube</span></a>
              <a href="facebook.php" ><img src="assets/images/icons/facebook-icons.png" ><span style="
    padding-top: 15;
    padding-left: 8px;
">facebook</span></a>
              <a href="tumblr.php" ><img src="assets/images/icons/tumblr-icons.png" ><span style="
    padding-top: 15;
    padding-left: 8px;
">tumblr</span></a>
              <a href="vk.php" ><img src="assets/images/icons/vk-icons.png" ><span style="
    padding-top: 15;
    padding-left: 8px;
">vk</span></a>

              
      </div>
      <div class="sidemenu-group  sidemenu-second-group">
              <div onclick="myFunction()" class="dropbtn">Group Invite Link<span  class="dropdown-down-icon"><img src="assets/images/icons/down-arrow-icons.png" class="day-mode-pic"><img src="assets/images/icons/down-arrow-icons.png" class="night-mode-pic"></span></div>
              <div id="myDropdown" class="dropdown-content">
              <a href="group_invite.php?cat=1"> <img src="assets/images/icons/whatsapp-icons.png" ><span style="
                  padding-top: 15;
                  padding-left: 8px;
              ">whatsapp</span></a>
              <a href="group_invite.php?cat=2"> <img src="assets/images/icons/telegram-icons.png" ><span style="
                  padding-top: 15;
                  padding-left: 8px;
              ">Telegram</span></a>
              <a href="group_invite.php?cat=3"> <img src="assets/images/icons/hike-icons.png" ><span style="
                  padding-top: 15;
                  padding-left: 8px;
              ">hike</span></a>
               <a href="group_invite.php?cat=4"> <img src="assets/images/icons/discord-icons.png" ><span style="
                  padding-top: 15;
                  padding-left: 8px;
              ">Discord</span></a>
               <a href="group_invite.php?cat=5"> <img src="assets/images/icons/wechat-icons.png" ><span style="
                  padding-top: 15;
                  padding-left: 8px;
              ">Wechat</span></a>
              <a href="group_invite.php?cat=6"> <img src="assets/images/icons/line-icons.png" ><span style="
                  padding-top: 15;
                  padding-left: 8px;
              ">Line</span></a>
              
            </div>

              
      </div>
      <a href="submit.php">Submit Link</a>



     
      </div>
</div>

<script type="text/javascript">

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

















  $(function() {
  $(myswitch).click(function() {
    if ($('#myswitch').is(':checked')) {
      night_mode_button();
    } else {
      day_mode_button();
    }
  });
});




    var checkboxValue = JSON.parse(localStorage.getItem('checkboxValue')) || {}
    var $checkbox = $("#switch :checkbox");

    $checkbox.on("change", function() {
      $checkbox.each(function() {
        checkboxValue[this.id] = this.checked;
      });
      localStorage.setItem("checkboxValue", JSON.stringify(checkboxValue));
      
    });
    $.each(checkboxValue, function(key, value) {
      $("#" + key).prop('checked', value);
    });

</script>
<!-- night toggle button -->
<style type="text/css">

.dropdown-content {
  display: none;
  position: inherit;
  background-color: inherit;




}
.show {display: block;}


.sidemenu-second-group .dropbtn{
      background-color: inherit;
    padding: 8px 8px 8px 20px;
    text-decoration: none !important;
    font-size: 20px;
    color: #818181;
    width: 88%;

}
.dropdown-down-icon {
  float:right;

}



















  :root {
  --track_width : 60px;   /* --track_width should be twice the track_height */
  --track_height: 30px;
  --thumb_pad : 4px;      /* --thumb_pad defines the space between the thumb and the track */
  --color_on : #0f0;
  --color_off : #f00;
}

main {
    margin-left: auto;
    margin-right: auto;
    /* width: 33%; */
    /* display: flex; */
    ex: ;
    width: 34%;
    */: f;
    align-items: center;
    flex-direction: column;
    float: right;
  /*border: 1px solid #f00; */
}




/* Ideally, we should contain everything in an inline-block */
.switch {
  display: inline-block;
  position: relative;
  width:  var(--track_width);
  height: var(--track_height);
}

/* The checkbox is NEVER displayed.
 * What is displayed is the label represeting it.
 */
.switch input[type="checkbox"] {display: none;}

/* A label should be used inside the switch.
 * Because of label's for attribute,
 * we can still check our checkbox,
 * provided the checkbox has an id.
 */
/* Label defines our "track" */
.switch label {
  display: block;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background-color: #0cc;
  /* Often the track is rounded */
  border-radius: calc( var(--track_height) / 2 );
  /* A shadow adds depth */
  box-shadow: inset 2px 2px var(--thumb_pad) rgba(0,0,0,0.9);
  /* TODO: Gradient? */
  user-select: none;
  cursor: pointer;
}

/* label:before defines our "thumb" */
.switch label:before {
  display: block;
  position: absolute;
  content: "";
  background-color: #fff;
  left:   var(--thumb_pad);
  top:    var(--thumb_pad);
  bottom: var(--thumb_pad);
  width:  calc(var(--track_height) - 2 * var(--thumb_pad));
  height: calc(var(--track_height) - 2 * var(--thumb_pad));
  border-radius: calc(var(--track_height)/2);
  box-shadow: 2px 2px var(--thumb_pad) rgba(0,0,0,0.9);
  /* TODO: Gradient? */
  transition: .4s;
}

.switch input[type="checkbox"]:checked + label {background-color: #66bb6a;}
.switch input[type="checkbox"]:checked + label:before {
  transform: translateX(calc(var(--track_width)/2));
}


</style>
<script type="text/javascript">
  var myswitch = document.getElementById("myswitch");
var outspan  = document.querySelector("output span");

var switchOut = function(){
  outspan.innerHTML = (myswitch.checked) ? "Dark  mode" : "Light mode";
};

myswitch.addEventListener("change",switchOut);


</script>
<!-- end night toggle button -->












 
<div id="headerContainer">

        <div id="header">

            <div id="headerLeft">
                <div class="header-content">
                    <span style="font-size:30px;cursor:pointer;color:inherit;" onclick="openNav3();openOffcanvas()">
                      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="20" 
viewBox="0 0 224 224"
style=" fill:#000000;padding:0 6px;" class="item day-mode-pic"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,224v-224h224v224z" fill="none"></path><g fill="#666666"><g id="surface1"><path d="M0,33.6v22.4h224v-22.4zM0,100.8v22.4h224v-22.4zM0,168v22.4h224v-22.4z"></path></g></g></g></svg>


<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="20"=
viewBox="0 0 224 224"
style=" fill:#000000;padding:0 6px;" class="item night-mode-pic"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,224v-224h224v224z" fill="none"></path><g fill="#ffffff"><g id="surface1"><path d="M0,34.46154v17.23077h224v-17.23077zM0,103.38462v17.23077h224v-17.23077zM0,172.30769v17.23077h224v-17.23077z"></path></g></g></g></svg>

                
                    </span>
                    <a href="index.php" style="text-decoration:none; color:inherit;"><span class="logo">Sitesking</span></a>
                 </div>
            </div>

            <div id="headerCenter">
 <form action='search.php' id='search-form' method='get' target='_top' style="display: none">
                       <div class="search">
                          <input type="text" class="searchTerm" id="search" name="term" placeholder="What are you looking for?" autocomplete="off">
                          
                        <div id="display"></div>
                          <button type="submit" class="searchButton">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                  width="20" 
                                  viewBox="0 0 224 224"
                                  style=" fill:#000000;padding-top:6px;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,224v-224h224v224z" fill="none"></path><g fill="#000000"><g id="surface1"><path d="M94.08,13.44c-42.105,0 -76.16,34.055 -76.16,76.16c0,42.105 34.055,76.16 76.16,76.16c15.0325,0 28.945,-4.41 40.74,-11.9l55.02,55.02l19.04,-19.04l-54.32,-54.18c9.765,-12.81 15.68,-28.6825 15.68,-46.06c0,-42.105 -34.055,-76.16 -76.16,-76.16zM94.08,31.36c32.2525,0 58.24,25.9875 58.24,58.24c0,32.2525 -25.9875,58.24 -58.24,58.24c-32.2525,0 -58.24,-25.9875 -58.24,-58.24c0,-32.2525 25.9875,-58.24 58.24,-58.24z"></path></g></g></g></svg>
                         </button>
                       </div></form>
            </div>

        <div id="headerRight">
            <div class="navmenu"><li> <a  href="reddit.php" style="visibility: hidden;">Reddit</a></li><li ><a style="padding-left: 6%; visibility: hidden;" href="facebook.php" >facebook</a></li>
              <li><a href="quora.php" style="visibility: hidden;">quora</a></li>
               
                
                
                <li><a href="tumblr.php" style="visibility: hidden;">Tumblr</a></li>
                
            </div>
            <div class="menu-icon">
                  <div id="menu-show">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="20" 
viewBox="0 0 224 224"
style=" fill:#000000; padding-top:6px;" class=" day-mode-pic" onclick="openNav3_nav_mobile(); openOffcanvas_nav_mobile();"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,224v-224h224v224z" fill="none"></path><g fill="#666666"><g id="surface1"><path d="M201.53,31.22c-2.38,0.07 -4.62,1.05 -6.265,2.765l-83.265,83.265l-83.265,-83.265c-1.6975,-1.7325 -4.0075,-2.7125 -6.44,-2.7125c-3.64,0 -6.9125,2.2225 -8.2775,5.6c-1.3825,3.3775 -0.56,7.245 2.0475,9.7825l95.935,95.935l95.935,-95.935c2.66,-2.555 3.5,-6.4925 2.065,-9.905c-1.4175,-3.4125 -4.7775,-5.6 -8.47,-5.53zM201.53,89.46c-2.38,0.07 -4.62,1.05 -6.265,2.765l-83.265,83.265l-83.265,-83.265c-1.6975,-1.7325 -4.0075,-2.7125 -6.44,-2.7125c-3.64,0 -6.9125,2.2225 -8.2775,5.6c-1.3825,3.3775 -0.56,7.245 2.0475,9.7825l95.935,95.935l95.935,-95.935c2.66,-2.555 3.5,-6.4925 2.065,-9.905c-1.4175,-3.4125 -4.7775,-5.6 -8.47,-5.53z"></path></g></g></g></svg>





<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="20" 
viewBox="0 0 224 224"
style=" fill:#000000; padding-top:6px;" class=" night-mode-pic" onclick="openNav3_nav_mobile(); openOffcanvas_nav_mobile();"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,224v-224h224v224z" fill="none"></path><g fill="#ffffff"><g id="surface1"><path d="M201.53,31.22c-2.38,0.07 -4.62,1.05 -6.265,2.765l-83.265,83.265l-83.265,-83.265c-1.6975,-1.7325 -4.0075,-2.7125 -6.44,-2.7125c-3.64,0 -6.9125,2.2225 -8.2775,5.6c-1.3825,3.3775 -0.56,7.245 2.0475,9.7825l95.935,95.935l95.935,-95.935c2.66,-2.555 3.5,-6.4925 2.065,-9.905c-1.4175,-3.4125 -4.7775,-5.6 -8.47,-5.53zM201.53,89.46c-2.38,0.07 -4.62,1.05 -6.265,2.765l-83.265,83.265l-83.265,-83.265c-1.6975,-1.7325 -4.0075,-2.7125 -6.44,-2.7125c-3.64,0 -6.9125,2.2225 -8.2775,5.6c-1.3825,3.3775 -0.56,7.245 2.0475,9.7825l95.935,95.935l95.935,-95.935c2.66,-2.555 3.5,-6.4925 2.065,-9.905c-1.4175,-3.4125 -4.7775,-5.6 -8.47,-5.53z"></path></g></g></g></svg>



              </div>



                </div>
            <div class="search-icon">
              <div id="search-show" style="display: none;"><a href="msearch.php?term=">
               <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="20" 
viewBox="0 0 224 224"
style=" fill:#000000; padding-top:6px;" class="search-btn day-mode-pic"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,224v-224h224v224z" fill="none"></path><g fill="#666666"><g id="surface1"><path d="M94.08,13.44c-42.105,0 -76.16,34.055 -76.16,76.16c0,42.105 34.055,76.16 76.16,76.16c15.0325,0 28.945,-4.41 40.74,-11.9l55.02,55.02l19.04,-19.04l-54.32,-54.18c9.765,-12.81 15.68,-28.6825 15.68,-46.06c0,-42.105 -34.055,-76.16 -76.16,-76.16zM94.08,31.36c32.2525,0 58.24,25.9875 58.24,58.24c0,32.2525 -25.9875,58.24 -58.24,58.24c-32.2525,0 -58.24,-25.9875 -58.24,-58.24c0,-32.2525 25.9875,-58.24 58.24,-58.24z"></path></g></g></g></svg>


<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="20" 
viewBox="0 0 224 224"
style=" fill:#000000;padding-top:6px;" class="search-btn night-mode-pic" ><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,224v-224h224v224z" fill="none"></path><g fill="#ffffff"><g id="surface1"><path d="M94.08,13.44c-42.105,0 -76.16,34.055 -76.16,76.16c0,42.105 34.055,76.16 76.16,76.16c15.0325,0 28.945,-4.41 40.74,-11.9l55.02,55.02l19.04,-19.04l-54.32,-54.18c9.765,-12.81 15.68,-28.6825 15.68,-46.06c0,-42.105 -34.055,-76.16 -76.16,-76.16zM94.08,31.36c32.2525,0 58.24,25.9875 58.24,58.24c0,32.2525 -25.9875,58.24 -58.24,58.24c-32.2525,0 -58.24,-25.9875 -58.24,-58.24c0,-32.2525 25.9875,-58.24 58.24,-58.24z"></path></g></g></g></svg>
                        </a>
                     </div>
                </div>  
        </div>
     </div>

</div>


<div id="mainContent-nav-mobile">

  <div id="myCanvasNav-nav-mobile" class="overlay3-nav-mobile" onclick="closeOffcanvas_nav_mobile()"></div>

  <div id="myOffcanvas-nav-mobile" class="offcanvas-nav-mobile">
    <a href="javascript:void(0)" class="closeOffcanvas-nav-mobile" onclick="closeOffcanvas_nav_mobile()">&times;</a>
	<a href="reddit.php">Reddit</a>
	<a href="facebook.php">facebook</a>
    <a href="quora.php">quora</a>
    <a href="tumblr.php">tumblr</a>
    
  </div>
  <?php require_once 'db (2).php'?>
  <link rel="stylesheet" type="text/css" href="includes/style.css">
  <div class="container-header" >
    <nav class="top-nav"style="display:none;">
      <ul class="main" >
     <!-- <= show_menu() ?>-->
        
      </ul>
    </nav>
  </div>




 
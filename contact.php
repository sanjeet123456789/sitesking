
<!DOCTYPE html>
<html lang="en-US">
<head>

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
    padding-top: 60px;
    text-align:center;
}

.sidenav5 a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s

}

.sidenav5 a:hover{
    color: #f1f1f1;
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
</style>
</head>
<body >
<div id="mainContent">

  <div id="myCanvasNav" class="overlay3" onclick="closeOffcanvas()"></div>


<!-- 
  //end of without animaation
 
  ///only for full layout -->
  <div id="mySidenav" class="sidenav5">
  <a href="javascript:void(0)" class="closebtn" onclick="window.history.go(-1);">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
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




<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    height: 97vh;
    width: 0;
    position: fixed;
    z-index: 3;
    top: 0;
    left: 0;
    background-color: #1b1a23;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 3vh;
    text-align:center;
}

.sidenav5 a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #fff;
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




<div class="container">
  <div class="top-content-image"></div>
  <div class="left-content">


<h2>Hey there!</h2>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>



<p>
I'm saurab, a full-time blogger,web-designer and founder of sitesking.info and goosefile.com.I was born in Bihar and living in Chandigarh .i love listening to music(Cigarettes After Sex), playing football and traveling. I have been blogging since for a little over 2 years now. I love working for community purpose and help people in building their own websites.</p>

<p></p>
<p></p>
<p></p>
<p></p>
<p>
I have made this website to connect and help with each other. I love teaching and discussing technology. If you want to discuss it please contact me. I have a bachelor's degree in computer application and a diploma . I'm not using either of them.
one of my biggest ambitions in life is to develop six-figure money making websites.</p>

</div>
<div class="right-content"></div>


</div>





























  </div>
  
  <style type="text/css">
    .container {
      padding:0 10%;
    }
    
.container .left-content{
  color:white;
  float:left;
  width:60%;
}
.container .left-content p,.container .left-content h2{
  text-align: left;
  margin-top:70px;
  
  font-size: 16px;
}
.container .right-content{
height: 400px;
    width: 250px;
    background-color: #e6e6e6;
    border-radius: 14px;
    float: right;
    margin-top: 7%;

}
.container .top-content-image{
      width: 164px;
    /* align-items: center; */
    background-color: #e6e6e6;
    border-radius: 14px;
    float: center;
    height: 170px;
    /* text-align: center; */
    margin: auto;
    /* margin-top: 7%; */
    /* margin-left: 40%; */
    display: none;
}




 @media only screen and (max-width: 820px) {
      .container .left-content{
        width:100%;
      }
      .container .right-content{
        display: none;
      }
      .container .top-content-image{
        display: block;
      }

    
}



  </style>
  
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
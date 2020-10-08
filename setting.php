
<?php include("includes/header.php"); 



?>


<!-- end header-->

<div id="main-content-container">

        <div id="main-content">

            <div id="main-content-Left">
               
            </div>

            <div id="main-content-Center">
              <div class="main-content-center-container">
                <div class="main-content-center-content">
                  <div class="main-content-result">
                       <div class="entityInfo">
                         <div class="centerSection">
                          <div class="userInfo">
                            <h1><?php $user=new User($con,$userLoggedIn);echo $user->getFirstAndLastName(); ?></h1>
                          </div>
                          <div class="userdetail">

                          <div class="container borderBottom">
                            <h2>Email</h2>
                            <input type="text" class="email"name="email" placeholder="email here.." value="<?php echo $user->getEmail(); ?>">
                            <span class="message"></span>
                            <button class="button" onclick="updateEmail('email')">SAVE</button>
                          </div>
                          <div class="container">
                            <h2>PASSWORD</h2>
                             <input type="text" class="oldpassword" name="oldpassword" placeholder="current password.." >
                             <input type="text" class="newpassword1" name="newpassword1" placeholder="new password.." >
                             <input type="text" class="newpassword2" name="newpassword2" placeholder="confirm password.." >
                            <span class="message"></span>
                            <button class="button" onclick="updatePassword('oldpassword','newpassword1','newpassword2')">SAVE</button>
                            
                          </div>















                            
                          </div>
                          <button class="logout" onclick="logout()">logout</button>
                           

                         </div>





                       </div>
                           

                            </div>                  
                            <div class="main-content-sidebar">
                    
                  </div>
                    
                  </div>
                  
                  

                </div>
                



              </div>

                      
            </div>

        <div id="main-content-Right">
            
             
        </div>
     </div>
     <script>

     

//not hightling
/*$("#nowPlayingBarContainer").on("mousedown touchstart mousemove touchmove",function(){
  e.preventDefault();

});

// changing the button color on click 
function setrepeat(){
  repeat=!repeat;
  var imageName=repeat ? "repeat-active.png":"repeat.png";
  $(".controlButton.repeat").attr("src","assets/images/icons/"+imageName);
  //don't forget to add onclick on button element
}*/
</script>
<!-- start footer-->
<?php include("includes/footer.php") ?>
<!-- end footer-->
</body>
</html>
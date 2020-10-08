

<?php include("includes/header.php");
  include("includes/classes/bookmarklist.php");

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
                    
                         <div class="buttonItem">
                         	<button class="button green" onclick="createList()">new bookmark folder</button>
                         </div>
                         <div class="list_songs">
                         	<?php 

                         	$username = $userLoggedIn;
                         	$ListQuery = mysqli_query($com,"SELECT * FROM playlists WHERE owner ='$username'");
                         	if(mysqli_num_rows($ListQuery) == 0){

                         		echo "<span class='no bookmark found'></span>";
                         	}
                         	while($row=mysqli_fetch_array($ListQuery)){
                         		$playlist = new Playlist($con,$row);


                         		echo "<div class='gridViewItems'>
                         		<div class='playlistImage'>
							<img src='assets/images/icons/playlist.png'>
						</div>
                         		<div class='gridViewInfo' role='link' tabindex='0' href='bookmarklists.php?id=".$playlist->getId()."'><a href='bookmarklists.php?id=".$playlist->getId()."'>

                                ".$playlist->getName()."</a>
                                </div>



                         		</div>";


                         	}



                         	 ?>
                         	

                         </div>
           

                            </div>

                    
                  </div>
                  <div class="main-content-sidebar">
                    
                  </div>
                  

                </div>
                



              </div>

                      
            </div>

        <div id="main-content-Right">
            
             
        </div>
     </div>

</div>






  










<!-- start footer-->

<?php include("includes/footer.php"); ?>
<!-- end footer-->
</body>
</html>
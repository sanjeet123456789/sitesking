 
<?php include("includes/header.php");
  include("includes/classes/Playlist.php");

if(isset($_GET['id'])){
  $playlistId = $_GET['id'];
}else{
  header("Location: index.php");
}
$playlist = new Playlist($con,$playlistId);
$owner =$playlist->getOwner();


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
                              <div class="leftSection">
                                <img src="">
                              </div class="rightSection">
                                <h2><?php echo $playlist->getName(); ?></h2>
                                <span>By <?php echo $playlist->getOwner(); ?></span>
                                <p><?php echo $playlist->getNumberOfSongs(); ?><p>
                                	<button class="button" onclick="deleteplaylist(<?php echo $playlistId; ?>);">delete</button>
                              </div>
                             <div class="tracklistContainer">
                                <ul class="tracklist">
                                  <?php 
                                  $songIdArray=$playlist->getSongIds();
                                  $i=1;

                                  foreach($songIdArray as $songId){

                                    $playlistSong=new Song($con,$songId);
                                    $songArtist=$playlistSong->getArtist();
                                    echo "<li class='tracklistRow'>
                                    <div class='trackCount'>
                                    <span class='trackNumber'>$i</span></div>

                                    <div class='trackinfo'>

                                    <span class='trackName'>".$playlistSong->getTitle()."</span>

                                    <span class='artistName' ><a >".$songArtist->getName()."

                                    
                                    </a></span>




                                    </div>


                                    <div class='trackDuration'>
                                    <span class='duration'>".$playlistSong->getDuration()."</span>



                                    </div>





                                    </li>";

                                      $i++;



                                  }





                                   ?>




                                </ul>
                                





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

     
 window.onload = function(){
   setTimeout(loadAfterTime, 5000);
};
function loadAfterTime() {
  var currentplaying=<?php echo $albumId; ?>;
 console.log(currentplaying);
$.post("includes/handlers/ajax/updatePlaylist.php",{songId:currentplaying }); 
}

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
</div>






  










<!-- start footer-->
<?php include("includes/footer.php") ?>
<!-- end footer-->
</body>
</html>
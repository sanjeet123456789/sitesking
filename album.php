
<?php include("includes/header.php"); 

if(isset($_GET['id'])){
  $albumId = $_GET['id'];
}else{
  header("Location: index.php");
}

$album = new Album($con, $albumId);
$artist = $album->getArtist();


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
                                <img src="<?php echo $album->getArtworkPath(); ?>">
                              </div class="rightSection">
                                <h2><?php echo $album->getTitle(); ?></h2>
                                <span>By <?php echo $artist->getName(); ?></span>
                                <p><?php echo $album->getNumberOfSongs(); ?><p>
                              </div>
                             <div class="tracklistContainer">
                                <ul class="tracklist">
                                  <?php 
                                  $songIdArray=$album->getSongIds();
                                  $i=1;

                                  foreach($songIdArray as $songId){

                                    $albumSong=new Song($con,$songId);
                                    $albumArtist=$albumSong->getArtist();
                                    echo "<li class='tracklistRow'>
                                    <div class='trackCount'>
                                    <span class='trackNumber'>$i</span></div>

                                    <div class='trackinfo'>

                                    <span class='trackName'>".$albumSong->getTitle()."</span>

                                    <span class='artistName' ><a href='artist.php?id=".$album->getartistId()."'>".$albumArtist->getName()."

                                    
                                    </a></span>




                                    </div>
                                    <div class='trackOption'>
                                    <input type='hidden' class='SongsId'value='".$albumSong->getId()."' >
                                    <img class='optionButton' src='assets/images/icons/more.png' onmouseover='showOptionMenu(this)'>
                                    </div>


                                    <div class='trackDuration'>
                                    <span class='duration'>".$albumSong->getDuration()."</span>



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


<nav class="optionMenu">
<input type="hidden" class="SongsId">
<?php 
$dropdown = '<select class="item playlist">
              <option value="">Add to playlist</option>';

      $query = mysqli_query($con, "SELECT id, name FROM playlists WHERE owner='$userLoggedIn'");
      while($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $name = $row['name'];
        $dropdown = $dropdown . "<option value='$id'>$name</option>";
      }


    echo "".$dropdown."</select>";







 ?>


<div class="item">Item 2</div>
<div class="item">Item 3</div>


</nav>  
<style>
.optionMenu{
display:none;
position:fixed;
background-color:#282828;
width:200px;
border:1px solid rgba(0,0,0,0.15);
 border-radius:3px;
 z-index:1000;
}
.optionMenu .item{
width:100%;
padding:12px 20px;
/*takes 100% width within padding*/
box-sizing:border-box;
font-weight:400;
color:rgba(147,147,147,0.8);
cursor:pointer;
}
.optionMenu .item::hover{

  color:#fff;
  background-color: #333;
  border-color:#333;
}
  
</style>



  










<!-- start footer-->
<?php include("includes/footer.php") ?>
<!-- end footer-->
</body>
</html>
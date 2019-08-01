<!-- Begin Mailchimp Signup Form -->
<span style="display: none;">Email Address</span>

<div class="mailing-block" style="display: none;">
	<div class="input-box">

		
		<input type="email" name="email" id="subscribe_email">
    <input type="submit" onClick="subscribe_email()" class="subscribe" value="Subscribe">
     <div class="row filter_data_subscribe"> </div>
	</div>
	
</div>
<script>
function subscribe_email(){
   var value = document.getElementById('subscribe_email').value;

   $.ajax({
            url:"includes/handlers/ajax/subscribe_email.php",
            method:"POST",
            data:{ value:value},
            success:function(data){
                $('.filter_data_subscribe').html(data);
               


             }
        });

}
</script>
<style type="text/css">
  .subscribe_email{
        font-size: 14px;
    margin: 3%;
    color: green;
  }
	.mailing-block .input-box input.subscribe{
		padding:3.5%;
		width:50%;
		background: #0093de;
		color:#fff;
		border:none;
		border-radius: 4px;

	}
	.mailing-block .input-box input{
		width:100%;
		padding:2.5% 0.5%;
		box-sizing: border-box;
		border-radius: 2px;
		margin:4% 0%;
		border:1px solid lightgray;

	}
	.mailing-block .input-box{
		padding:;
	}
</style>
<!--End mc_embed_signup-->


<!-- start of popular/recent tab -->
<div class="sidebar-tabs " style="display: none">
  <ul class="sidebar-tabs-nav" style="
    margin: 0;
    padding: 0;">
    <li><a href="#sidebar-tab-1">Recent</a></li>
    <li><a href="#sidebar-tab-2">Popular</a></li>
  </ul>
  <div class="sidebar-tabs-stage">
    <div id="sidebar-tab-1">
      <ul>

 <?php

 $conne=mysqli_connect('localhost','goosefil_pal','Sitesking@12','goosefil_goosefile');

    $RecentQuery = mysqli_query($conne, "SELECT * FROM software_list  order by current_date_in desc");
    $i=0;

    while($row = mysqli_fetch_array($RecentQuery)) {
      
    if($i==9){
      break;
    }else{
       echo "<li><a href='software.php?name=".$row['name']."&id=".$row['id']."'>".$row['name']."</a></li>";
    }


     $i++;



    }
  ?>

      	
      	
      </ul>
    </div>
    <div id="sidebar-tab-2">
      <ul>



 <?php



    $RecentQuery = mysqli_query($conne, "SELECT * FROM software_list  order by views desc");

 $i=0;

    while($row = mysqli_fetch_array($RecentQuery)) {
      
    if($i==9){
      break;
    }else{
       echo "<li><a href='software.php?name=".$row['name']."&id=".$row['id']."'>".$row['name']."</a></li>";
    }


     $i++;



    }

  ?>

      	
      	
      </ul>
    </div>
  </div>
</div>
<style type="text/css">
#sidebar-tab-1 ul,#sidebar-tab-2 ul{
	padding:8% 2%;
}
#sidebar-tab-1 ul li,#sidebar-tab-2 ul li{
	    padding: 3% 2%;
    list-style: none;
    /* background: red; */
    white-space: nowrap;
    margin-top: 5px;
   overflow: hidden;
    border-radius: 3px;
}
.sidebar-tabs {
  max-width: 538px;
}
.sidebar-tabs-nav li {
  float: left;
  width: 50%;
  list-style: none;
}
.sidebar-tabs-nav li:first-child a {
  border-right: 0;
  border-top-left-radius: 6px;
}
.sideabr-tabs-nav li:last-child a {
  border-top-right-radius: 6px;
}
 .sidebar-tabs-nav li a {
  background: #fafafa;
  border: 0.5px solid #cecfd5;
  color: #555;
  display: block;
  font-weight: 600;
  padding: 10px 0;
  border-radius: 2px;
  text-align: center;
  text-decoration: none;
}
.night-mode .sidebar-tabs-nav li a{
	background: none;
	color:#fff;
}
/* .night-mode #sidebar-tab-1 ul li:hover,.night-mode #sidebar-tab-2 ul li:hover{  
    z-index: 3;
   
    background: #fff;
    color: #555;
}*/
#sidebar-tab-1 ul li:hover , #sidebar-tab-2 ul li:hover {
	background-color:#0093de;
	color: #fff;
}
*.night-mode #sidebar-tab-1 ul li a, *.night-mode #sidebar-tab-2 ul li a{
  color:white;
  text-decoration: none;
}
 #sidebar-tab-1 ul li a,  #sidebar-tab-2 ul li a{

  color:#555;
  text-decoration: none;
}
#sidebar-tab-1 ul li:hover a,  #sidebar-tab-2 ul li:hover a{
  color:white;
}

ul li.sidebar-tab-active a {
  background: #fff;
  border-bottom-color: transparent;
  color: #0087cc;
  cursor: default;
}
.sidebar-tabs-stage {
  border: 1px solid #cecfd5;
  border-radius: 0 0 6px 6px;
  border-top: 0;
  clear: both;
  
  position: relative;
  top: -1px;
}

</style>


<script type="text/javascript">
	// Show the first tab by default
$('.sidebar-tabs-stage div').hide();
$('.sidebar-tabs-stage div:first').show();
$('.sidebar-tabs-nav li:first').addClass('sidebar-tab-active');

// Change tab class and display content
$('.sidebar-tabs-nav a').on('click', function(event){
  event.preventDefault();
  $('.sidebar-tabs-nav li').removeClass('sidebar-tab-active');
  $(this).parent().addClass('sidebar-tab-active');
  $('.sidebar-tabs-stage div').hide();
  $($(this).attr('href')).show();
});



</script>

<!-- end of popular/recent tab -->

<!-- stat of google ads -->

<div class='google-sidebar-ads'>


</div>
<style type="text/css">
	.google-sidebar-ads{
		margin-top:56px;
		width:100%;
		height:400px;
		background: #fafafa;
		border-radius: 5px;

	}


</style>
<!-- end of google ads -->
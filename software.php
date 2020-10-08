

<?php include("includes/header.php");
  
if(isset($_GET['id'])){
  $postId=$_GET['id'];
}else{
  header("Location:index.php");
}
$software_post=new software_list($com,$postId);
$categories_post=$software_post->getitemcategories_id();
$licence_post=$software_post->getlicence();
$tab_index_post=$software_post->gettab_index();
$description_tab_post=$tab_index_post->getdescription();
$technical_tab_post=$tab_index_post->gettechnical();
$change_tab_post=$tab_index_post->getchange();

 ?>
<!--<php echo $tab_index_post->getdesc(); ?>
<php echo $description_tab_post->getpara3_heading(); ?>
<php echo $description_tab_post->getpara2_description(); ?>-->


<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function() {
  var val_views = "<?php echo $postId; ?>";
  $.ajax({
            url:"includes/handlers/ajax/views_increase.php",
            method:"POST",
            data:{ val_views:val_views}
        });
});


function download_function(){
  var val_views = "<?php echo $postId; ?>";
  $.ajax({
            url:"includes/handlers/ajax/download_increase.php",
            method:"POST",
            data:{ val_views:val_views}
        });
}
</script>
<!-- end header-->
<!--  blog post -->


<div id="main-content-container">

        <div id="main-content">

            <div id="main-content-Left">
               
            </div>

            <div id="main-content-Center">
              <div class="breadcrumb" style="padding: 13px 0;"><a href="index.php" role="link">Home</a> &raquo;
                
               <a role="link" href='<?php echo $categories_post->getparent_file_location(); ?>'><?php echo $categories_post->getparent_file_title();  ?></a> &raquo;
                <a role="link" href='<?php echo $categories_post->getpage_id(); ?>'><?php echo $categories_post->getTitle(); ?></a>&raquo;
                <a role="link" style="color:#0397d6;" href="<?php echo 'artist.php?id='.$postId.''; ?>" ><?php echo $software_post->getName(); ?></a>



             </div>
              <div class="main-content-center-container">

                <div class="main-content-center-left">
                <div class="main-content-center-content main-tab">
                  <div class="main-content-result">

                        <div class="post_detail_header">
                          <div class="post_detail_header_image">
                            <img  src='<?php echo $software_post->getthumbnail_link(); ?>' alt="Pineapple">
                            
                          </div>
                          <div class="post_detail_header_right">
                            <div class="post_detail_header_right_left"> 

                              <div class="post_detail_top_button">
                            <div class="button_side_gap">
                            <div class="post_detail_header_title">
                              <?php echo $software_post->getname(); ?>
                              <span class="post_detail_header_version">
                              (<?php echo $software_post->getversion(); ?>)
                            </span>
                            </div>
                            
                            <div class="post_detail_header_company_name">By
                              <a class="link"> <?php echo $software_post->getcompany_name(); ?></a>
                              <span class="post_detail_header_company_licence">
                              (<?php echo $licence_post->getName(); ?>)
                            </span>
                            </div>
                          </div>
                          <div class="button_gap blue-button" onclick="download_function()" >
                           <div class="output">
                                          <div  class="colors red" style="display:block;">  <a href="<?php echo $software_post->getdownload_link(); ?>" style="text-decoration:none;color:inherit;"> <button >(64-bit) Download</button></a></div>
                                          <div class="colors yellow" >  <a href="<?php echo $software_post->getdownload_link_32bits(); ?>" styel="text-decoration:none;color:inherit;"> <button >(32-bit) Download</button></a></div>
                                          
                                        </div>
                          </div>
                        </div>

                            
                                <div class="post_detail_heade_company_description" style="height:35px;">
                                  <span class="software_bit">  
                                      <div class="button dropdown"> 
                                            <select id="colorselector">
                                               <option value="red">64-bit</option>
                                               <option value="yellow">32-bit</option>
                                            </select>
                                      </div>
                                  </span>
                                  
                                <?php echo $software_post->getshort_description(); ?>
                              </div>
                            </div>

                          </div>

                         

                          
                          
                        </div>
                        <div class="download-button-mobi blue-button" onclick="download_function()" >

                          <div class="output">
                                          <div class="colors red" style="display:block;">  <a href="<?php echo $software_post->getdownload_link(); ?>" style="text-decoration:none;color:inherit;"> <button >(64-bit) Download</button></a></div>
                                          <div  class="colors yellow" >  <a href="<?php echo $software_post->getdownload_link_32bits(); ?>" styel="text-decoration:none;color:inherit;"> <button >(32-bit) Download</button></a></div>
                                          
                                        </div>


                        
                         </div>

                          <div class="tabs">


                            <h2>Feature</h2>
                                <div class="tab_content">
                                
                                  <div class="desc_content1 desc_content">
                                    <div class="desc_title_head tech_head">Title:</div>
                                    <div class="desc_title_desc tech_desc"><?php echo $software_post->getname(); ?> ( <?php echo $software_post->getversion(); ?> )
                                    </div>

                                  </div>
                                   <div class="desc_content2 desc_content">
                                    <div class="desc_filename_head tech_head">Filename:</div>
                                    <div class="desc_filename_desc tech_desc"><?php echo $technical_tab_post->getfile_name(); ?>
                                    </div>

                                  </div> 
                                  <div class="desc_content3 desc_content">
                                    <div class="desc_filesize_head tech_head">File size:</div>
                                       <div class="output">
                                          
                                          <div  class="red colors desc_filesize_desc tech_desc " style="display:block;"><?php echo $software_post->getsize(); ?> MB</div>
                                          <div  class=" yellow colors desc_filesize_desc tech_desc  " ><?php echo $software_post->getsize_32_bits(); ?> MB</div>
                                          
                                          
                                        </div>



                                    
                                    </div>





                                  
                                   <div class="desc_content4 desc_content">
                                    <div class="desc_requirement_head tech_head">Requirement:</div>
                                    <div class="desc_requirement_desc tech_desc"><?php echo $technical_tab_post->getrequirements(); ?>
                                    </div>

                                  </div>
                                  <div class="desc_content5 desc_content">
                                    <div class="desc_languages_head tech_head">Languages:</div>
                                    <div class="desc_languages_desc tech_desc"><?php echo $technical_tab_post->getlanguage_support(); ?>
                                    </div>

                                  </div>
                                  <div class="desc_content6 desc_content">
                                    <div class="desc_licence_head tech_head">Licence:</div>
                                    <div class="desc_licence_desc tech_desc"><?php echo $licence_post->getname(); ?>
                                    </div>

                                  </div>
                                  <div class="desc_content7 desc_content">
                                    <div class="desc_date_head tech_head">Relese date:</div>
                                    <div class="desc_date_desc tech_desc"> <?php echo $software_post->getrelease_date(); ?>
                                    </div>

                                  </div>
                                  <div class="desc_content8 desc_content">
                                    <div class="desc_author_head tech_head">Author:</div>
                                    <div class="desc_author_desc tech_desc"><a role="link" href="<?php echo $technical_tab_post->getwebsite_link(); ?>"><?php echo $technical_tab_post->getwebsite_link(); ?></a>
                                    </div>

                                  </div>
                                  <div class="desc_content9 desc_content">
                                    <div class="desc_homepage_head tech_head">Official website:</div>
                                    <div class="desc_homepage_desc tech_desc"><?php echo $technical_tab_post->getofficial_website(); ?>
                                    </div>

                                  </div>
                                  <div class="desc_content10 desc_content">
                                    

                                  </div>
                                </div>
                                <h2>Description</h2>
                                <div class="tab_content" >
                                <div style="display:inline-block;"> <span style="float:left;"><img style="height:160px;width:150px;/*padding:0 15px 15px 15px;*/border-radius: 20px;" src="<?php echo $description_tab_post->getpic_link(); ?>" alt="Pineapple"></span>
                                  <span class="feat_para1_desc feat_desc"><?php echo $description_tab_post->getpara1_description(); ?></span>
                                </div>
                                <div class="fect_container2">
                                  <div class="feat_para2_head feat_head">
                                    <?php echo $description_tab_post->getpara2_heading(); ?>
                                  </div>
                                  <div class="feat_para2_desc feat_desc">
                                    <?php echo $description_tab_post->getpara2_description(); ?>
                                  </div>
                                  
                                </div>
                                <div class="fect_container3">
                                  <div class="feat_para3_head feat_head">
                                    <?php echo $description_tab_post->getpara3_heading(); ?>
                                  </div>
                                  <div class="feat_para3_desc feat_desc">
                                    <?php echo $description_tab_post->getpara3_description(); ?>
                                  </div>
                                  
                                </div>
                                <div class="fect_container3">
                                  <div class="feat_para3_head feat_head">
                                    <?php echo $description_tab_post->getpara4_heading(); ?>
                                  </div>
                                  <div class="feat_para3_desc feat_desc">
                                    <?php echo $description_tab_post->getpara4_description(); ?>
                                  </div>
                                  
                                </div>

                                          
                                          
                                  
                                </div>


                                
                              

                                
                                <h2>Change log</h2>
                                <div class="tab_content">
                                  

















                                  <div class="change_container1">
                                  <div class="change_content1_head change_head">
                                    <?php echo $change_tab_post->getpara1_heading(); ?>
                                  </div>
                                  <div class="change_content1_desc change_desc">
                                   <?php echo $change_tab_post->getpara1_list_number(); ?>
                                  </div>                              
                                </div>
                                <div class="change_container2">
                                  <div class="change_content2_head change_head">
                                    <?php echo $change_tab_post->getpara2_heading(); ?>
                                  </div>
                                  <div class="change_content2_desc change_desc">
                                    
                                        <?php echo $change_tab_post->getpara2_list_number(); ?>
                                    
                                  </div>
                                  
                                </div>
                                <div class="change_container3">
                                  <div class="change_content3_head change_head">
                                    <?php echo $change_tab_post->getpara3_heading(); ?>
                                  </div>
                                  <div class="change_content3_desc change_desc">
                                    <?php echo $change_tab_post->getpara3_list_number(); ?>
                                  </div>
                                  
                                </div>
                                 
                                 
                                 
                                </div>
                           </div>
                    
                        
                  </div>
                
                  

          </div>

          <div class="main-tab related_post "> 
            <h3 style="margin:0 0 1% 0;">Related software</h3>
            <div class="realted_post">

              
            </div>



<SCRIPT>
$(function() {
  $('#colorselector').change(function(){
    $('.colors').hide();
    $('.' + $(this).val()).show();
  });
});
// [forked from](http://jsfiddle.net/FvMYz/)
// [show-hide-based-on-select-option-jquery)(http://stackoverflow.com/questions/2975521/show-hide-div-based-on-select-option-jquery/2975565#2975565)

</SCRIPT>










<div class="gridViewContainer" style="display:inline-block;width:100%">
<style>
/* drop down bits */

#colorselector{
  background: #e6e6e6; 
    border: none;
    box-shadow: none;

  }    
select:focus {
  outline:none;
  box-shadow: 0 0 1px 3px rgba(180,222,250, 1);
  background-color:transparent;
  color: #222;
  border:1px solid #aaa;
}


/* Firefox focus has odd artifacts around the text, this kills that */
select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #000;
}

option {
  font-weight:normal;
}


/* These are just demo button-y styles, style as you like */
.button {
  border: 1px solid #bbb;
  border-radius: .3em;
  box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
  background: #f3f3f3; /* Old browsers */
  background: -moz-linear-gradient(top, #ffffff 0%, #e5e5e5 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#e5e5e5)); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top, #ffffff 0%,#e5e5e5 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top, #ffffff 0%,#e5e5e5 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top, #ffffff 0%,#e5e5e5 100%); /* IE10+ */
  background: linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%); /* W3C */
}

.output {
  margin: 0 auto;
  padding: 0.3em; 
}
.colors {
  display: none;
}

footer {
  margin: 5em auto 3em;
  padding: 2em 2.5%;
  text-align: center;
}

/* end dropdown bits */

.related_item a img{
width: 80%;height:100%;
border-radius:5px;
	

}
.related_item a{
height:78px;width:100%;display:inline-flex;
box-shadow: 0 0px 3px rgba(0,0,0,0.30), 0 1px 1px rgba(0,0,0,0.22);
border-radius:5px;

}
.related_item{display:inline-flex;    width: 50%;
    padding: 1%;
    box-sizing: border-box;}
@media (max-width: 500px){

.related_item{width:100%;}
}
.night-mode .gridviewInfo{color:#fff;}
.night-mode .related_item a{box-shadow:0 0px 2px rgba(255, 255, 255, 0.3), 0 1px 1px rgba(255, 255, 255, 0.22);}

.gridviewInfo{margin-left:2%; text-decoration: none;width:75%;margin-top:1%;color:#24222b;}
.gridViewInfo .related_post_company_name {
font-size:12px; padding-top:2%;text-decoration: none;width:100%;
}

.related_post_views{
font-size:12px; text-decoration: none;width:100%;
}
.related_post_name:hover{color:#0397d6;}








</style>

  <?php
$postId2=$_GET['id'];


    $albumQuery = mysqli_query($com, "SELECT * FROM software_list WHERE itemCategories_id=(select itemCategories_id from software_list where id=$postId2) And id!=$postId2  ORDER BY RAND() limit 10") ;

    while($row = mysqli_fetch_array($albumQuery)) {
      



      echo "<div class='Related_item'>
          <a role='link' tabindex='0' href='software.php?name=" . $row['name'] . "&id=".$row['id']."'><div class='' style='width:33%;padding:1%;'>
            <img src='" . $row['thumbnail_link'] . "'></div>

            <div class='gridViewInfo'><div class='related_post_name'>"
              . $row['name'] .
            "
			  </div>
			  
			  <div class='related_post_company_name' >"
              . $row['company_name'] .
            "</div>
			   <div class='related_post_views'>"
              . $row['views'] .
            " Views <span class='related_post_download' style='padding:4%;'>"
              . $row['total_download'] .
            " download  </span> </div>
			  
			  </div>
			  
          </a>

        </div>";



    }
  ?>

</div>
          </div>



<!-- <div class="main-tab comment_post ">
  <div id="disqus_thread"></div>
    
</div>
<style>
 #disqus_thread a{color:#0093de;}
  #disqus_thread p{
    color:#0093de;
 
 }

 #disqus_thread .comment-count{
  color:#0093de;
 }
</style> -->




















        </div><div class="main-content-sidebar main-tab">
                   
<?php include("includes/sidebar.php"); ?>

              </div>
                



              </div>

                      
            </div>

        <div id="main-content-Right">
            
             
        </div>
     </div>

</div>



<!-- <script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://https-goosefile-com.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
 -->






















<style class="cp-pen-styles">
@media (max-width: 768px) {
  
}

@media (max-width: 767px) {
  .side_text2{width:70%;}
  .download-button{display:none;}
  .sidebar_news_image2{
    border-radius:5%;
  }
  .container2 li{
    margin:3%;
  }
  .tab-list { display: none;}
  .tabs.enabled .tab-heading { cursor:pointer; }
  .tabs.enabled .tab-heading.active-tab-heading { cursor: default; }
  .hidden-mobile { display: none;}
}
.tab_content {
  margin:0;
  padding:1.5%;
 /* height:300px;*/
  box-sizing: border-box;
  

}
@media (min-width: 768px) {
  .download-button-small{display:none;}
  .sidebar_news_image2{padding: 0px 0px 0px 10%;}
  .tabs.enabled .tab-heading { display: none;}
  .tab-list li { display: inline; cursor:pointer;}
  .hidden-mobile { display: block !important;}
  

}
.tab-panel { }
.tabs.enabled .tab-heading:focus,
.tabs.enabled .tab-list li:focus { outline: none;  }
.tabs.enabled .tab-heading.active-tab-heading:focus,
.tabs.enabled .tab-list li.active-tab:focus { outline: none !important;}
@media (max-width: 767px) {
  .tab_content p{border:none;}
  .tabs.enabled .tab-heading { padding: 0.3em;background: #ddd; margin: 12px 0px;position: relative;
  }
  .tabs.enabled .tab-heading:after {
    content:"";
    display: block;
    position: absolute;
    right: 20px;
    top: 40%;
    width: 0px; 
    height: 0px; 
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-top: 10px solid #000;
  }
  .night-mode .tabs.enabled .tab-heading:after{border-top:10px solid #FFF;}

  .tabs.enabled .tab-heading:hover,
  .tabs.enabled .tab-heading.active-tab-heading:hover { background-color: #efefef}
  .tabs.enabled .tab-heading.active-tab-heading { background: #fff;}
  .tabs.enabled .tab-heading.active-tab-heading:after {
    border-bottom: 10px solid #000;
    border-top:0;
   }
   .night-mode .tabs.enabled .tab-heading.active-tab-heading:after{
   border-bottom: 10px solid #fff;
   }
}
@media (min-width: 768px) {
  .tab-list { font-size: 1.2em; margin: 2em 0 0 0; padding: 0;border-bottom: 1px solid #ddd; padding-bottom:11px; line-height: 1em;}
  .tab-list li {    border-top-left-radius: 8px;    border-top-right-radius: 8px; background: #eee;padding: 10px 20px;margin-right: 0.3em;border: 1px solid #ddd; }
  .tab-list li:hover {background: #efefef }
  .tab-list li.active-tab {  background: #fff; border-bottom-color: transparent;}
  .tabs{width: 98%;margin-left:1%;}
}
</style>


<script >
// hide image if not available -->


//display image if not available -->






$(document).ready(function () { 
  RESPONSIVEUI.responsiveTabs();
});
var RESPONSIVEUI = {};
RESPONSIVEUI.responsiveTabs = function () {
  if (!$('.tabs').hasClass('enabled')) {// if we haven't already enabled tabs
    $('.tabs').addClass('enabled'); // used to style tabs if JS is present
    var tablistcount = 1;
    $('.tabs').each(function () {
      var $tabs = $(this);
      // add tab heading and tab panel classes
      $tabs.children('h1,h2,h3,h4,h5,h6').addClass('tab-heading');
      $tabs.children('div').addClass('tab-panel');
      // determine if markup already identifies the active tab panel for this set of tabs
      // if not then set first heading and tab to be the active one
      var $activePanel = $tabs.find('.active-panel');
      if (!$activePanel.length) {
        var $activePanel = $tabs.find('.tab-panel').first().addClass('active-panel');
      }
      $tabs.find('.tab-panel').not('.active-panel').hide().attr('aria-hidden', 'true'); //hide all except active panel
      $activePanel.attr('aria-hidden', 'false');
      /* make active tab panel hidden for mobile */
      $activePanel.addClass('hidden-mobile');
      // wrap tabs in container - to be dynamically resized to help prevent page jump
      var $tabsWrapper = $('<div/>', { class: 'tabs-wrapper' });
      $tabs.wrap($tabsWrapper);
      var highestHeight = 0;
      // determine height of tallest tab panel. Used later to prevent page jump when tabs are clicked
      $tabs.find('.tab-panel').each(function () {
        var tabHeight = $(this).height();
        if (tabHeight > highestHeight) {
          highestHeight = tabHeight;
        }
      });
      //create the tab list
      var $tabList = $('<ul>', { class: 'tab-list', 'role': 'tablist' });
      //loop through each heading in set
      var tabcount = 1;
      $tabs.find('.tab-heading').each(function () {
        var $tabHeading = $(this);
        var $tabPanel = $(this).next();
        $tabHeading.attr('tabindex', 0);
        // CREATE TAB ITEMS (VISIBLE ON DESKTOP)
        //create tab list item from heading
        //associate tab list item with tab panel
        var $tabListItem = $('<li>', {
          class: 'tab',
          id: 'tablist' + tablistcount + '-tab' + tabcount,
          'aria-controls': 'tablist' + tablistcount + '-panel' + tabcount,
          'role': 'tab',
          tabindex: 0,
          text: $tabHeading.text(),
          keydown: function (objEvent) {
            if (objEvent.keyCode == 13) {// if user presses 'enter'
              $tabListItem.click();
            }
          },
          click: function () {
            //Show associated panel
            //set height of tab container to highest panel height to avoid page jump
            $tabsWrapper.css('height', highestHeight);
            // remove hidden mobile class from any other panel as we'll want that panel to be open at mobile size
            $tabs.find('.hidden-mobile').removeClass('hidden-mobile');
            // close current panel and remove active state from its (hidden on desktop) heading
            $tabs.find('.active-panel').toggle().removeClass('active-panel').attr('aria-hidden', 'true').prev().removeClass('active-tab-heading');
            //make this tab panel active
            $tabPanel.toggle().addClass('active-panel').attr('aria-hidden', 'false');
            //make the hidden heading active
            $tabHeading.addClass('active-tab-heading');
            //remove active state from currently active tab list item
            $tabList.find('.active-tab').removeClass('active-tab');
            //make this tab active
            $tabListItem.addClass('active-tab');
            //reset height of tab panels to auto
            $tabsWrapper.css('height', 'auto');
          } });
        //associate tab panel with tab list item
        $tabPanel.attr({
          'role': 'tabpanel',
          'aria-labelledby': $tabListItem.attr('id'),
          id: 'tablist' + tablistcount + '-panel' + tabcount });
        // if this is the active panel then make it the active tab item
        if ($tabPanel.hasClass('active-panel')) {
          $tabListItem.addClass('active-tab');
        }
        // add tab item
        $tabList.append($tabListItem);
        // TAB HEADINGS (VISIBLE ON MOBILE)
        // if user presses 'enter' on tab heading trigger the click event
        $tabHeading.keydown(function (objEvent) {
          if (objEvent.keyCode == 13) {
            $tabHeading.click();
          }
        });
        //toggle tab panel if click heading (on mobile)
        $tabHeading.click(function () {
          // remove any hidden mobile class
          $tabs.find('.hidden-mobile').removeClass('hidden-mobile');
          // if this isn't currently active
          if (!$tabHeading.hasClass('active-tab-heading')) {
            //get position of active heading 
            if ($('.active-tab-heading').length) {
              var oldActivePos = $('.active-tab-heading').offset().top;
            }
            // close currently active panel and remove active state from any hidden heading
            $tabs.find('.active-panel').slideToggle().removeClass('active-panel').prev().removeClass('active-tab-heading');
            //close all tabs
            $tabs.find('.tab-panel').hide().attr('aria-hidden', 'true');
            //open this panel
            $tabPanel.slideToggle().addClass('active-panel').attr('aria-hidden', 'false');
            // make this heading active
            $tabHeading.addClass('active-tab-heading');
            var $currentActive = $tabs.find('.active-tab');
            //set the active tab list item (for desktop)
            $currentActive.removeClass('active-tab');
            var panelId = $tabPanel.attr('id');
            var tabId = panelId.replace('panel', 'tab');
            $('#' + tabId).addClass('active-tab');
            //scroll to active heading only if it is below previous one
            var tabsPos = $('.tabs').offset().top;
            var newActivePos = $('.active-tab-heading').offset().top;
            if (oldActivePos < newActivePos) {
              $('html, body').animate({ scrollTop: tabsPos }, 0).animate({ scrollTop: newActivePos }, 400);
            }
          }
          // if this tab panel is already active
          else {
              // hide panel but give it special hidden-mobile class so that it can be visible at desktop size
              $tabPanel.removeClass('active-panel').slideToggle(function () {$(this).addClass('hidden-mobile');});
              //remove active heading class
              $tabHeading.removeClass('active-tab-heading');
              //don't alter classes on tabs as we want it active if put back to desktop size
            }
        });
        tabcount++;
      });
      // add finished tab list to its container
      $tabs.prepend($tabList);
      // next set of tabs on page
      tablistcount++;
    });
  }
};

</script>


<!-- end blog post -->






<!-- start footer-->

<?php include("includes/footer.php"); ?>
<!-- end footer-->
</body>
</html>
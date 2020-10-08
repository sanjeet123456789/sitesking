

          <?php include("includes/header.php");


           ?>
          <!--<php echo $tab_index_post->getdesc(); ?>
          <php echo $description_tab_post->getpara3_heading(); ?>
          <php echo $description_tab_post->getpara2_description(); ?>-->

          <!-- end header-->
          <!--  blog post -->


          <div id="main-content-container">

                  <div id="main-content">

                      <div id="main-content-Left">
                         
                      </div>

                      <div id="main-content-Center">
                        <div class="breadcrumb" style="padding: 13px 0;display: none;" >
          <!-- 
                          <a href="index.php" role="link">Home</a> &raquo;
                          
                         <a role="link" href='<php echo $categories_post->getparent_file_location(); ?>'><php echo $categories_post->getparent_file_title();  ?></a> &raquo;
                          <a role="link" href='<php echo $categories_post->getpage_id(); ?>'><php echo $categories_post->getTitle(); ?></a>&raquo;
                          <a role="link" style="color:#0397d6;" href="<php echo 'artist.php?id='.$postId.''; ?>" ><php echo $software_post->getName(); ?></a>
           -->


                       </div>

                        <div class="main-content-center-container">

                          <div class="main-content-center-left" style="width:100%;">
                          <div class="main-content-center-content main-tab">
                            <div class="main-content-result">
                                <div class="sanjeet_post_layout night-mode-pic" ><img  src="assets/images/logo-body.png" /></div>
                                 <div class="sanjeet_post_layout day-mode-pic" ><img  src="assets/images/logo-body-black.png" /></div>

          <form action="search.php" method="get"><input class="search-textbox"  tabindex="1" alt="" height="40px" name="term" required="" type="text" width="40px" placeholder="Search..." /></form>
          <style type="text/css">
            .search-textbox{
              width: 100%;   border: 1px solid #B2AEA3;
              padding: 6px;
              box-shadow: 0 2px 8px rgba(0,0,0,0.30), 0 2px 2px rgba(0,0,0,0.22);
              border-radius: 3px;
            }

          .sanjeet_post_layout img{
          	height:auto;
          	width:100%;
           
          }
          @media only screen and (min-width: 768px) {
            .sanjeet_post_layout{
              /*padding-left: 66%;*/
            }
            .search-textbox{
              width:80%;
              margin-left:10%;
            }
          .sanjeet_post_layout img{
            height: 260px;
              width: 85%;
              margin-left:10%;
            
          }

          }
          @media only screen and (min-width: 1020px) {
            .sanjeet_post_layout{
              /*padding-left: 66%;*/
            }
            .search-textbox{
              width:80%;
              margin-left:10%;
            }
          .sanjeet_post_layout img{
            height: 260px;
              width: 80%;
              margin-left:10%;
            
          }

          }
          @media only screen and (max-width: 768px) {
            .sanjeet_post_layout{
            /*padding-left:74%;*/

          }
          .sanjeet_post_layout img{
            /*width:142p*/x;
          }
          }

          @media only screen and (max-width: 564px){
              .sanjeet_post_layout{
            /*padding-left:60%;*/

          }
          .sanjeet_post_layout img{
            /*width:150px;*/
          }

          }
          @media only screen and (max-width: 400px){
              .sanjeet_post_layout{
           /* padding-left:55%;*/

          }


          }



          </style>

                           <h1>List Of Subreddit</h1>
          <div class="autowide">


 <!-- module 1 start -->
<div class="module">
 
<div class="main_col_head">
<div class="main_col_title">Top subreddit</div>
<div class="main_co2l_title">reddit</div>
</div>
<div class="pal-scroll" >
<div class="list-more-container" >
<input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

<style type="text/css">
  .roller{display: none;}
  .blog-post li{
        white-space: nowrap;
    /* box-shadow: inset 0px 10px 8px -20px #000000, inset 0px -10px 4px -10px #000; */
    border-top: 1px solid #bfb4b4;
    width: 98%;
    padding: 1%;
    margin: 0px 0px;
    background: #fff;
    color: #333;
    float: left;
    /* border-radius: 2px; */
    text-align: left;
    list-style: none;
    overflow: hidden;
    text-overflow: ellipsis;

  }
  .night-mode .blog-post li{
    background: #1b1a23;
    color:white;


  }

</style>
 <script type="text/javascript">
    
// $(document).ready(function(){
// var flag=0;
//     $.ajax({
//     type:"GET",
//     url:"get_data.php",
//     data:{
//       'offset':0,
//       'limit':10
//     },
//     success:function(data){
//       $('.blog-post').append(data);
//       flag+=10;
//     }

//   });


//   $(".pal").scroll(function(){

// if(this.offsetHeight + this.scrollTop == this.scrollHeight){
//      alert("at the bottom");
//           $.ajax({
//         type:"GET",
//         url:"get_data.php",
//         data:{
//           'offset':flag,
//           'limit':5
//         },
//         success:function(data){
//           $('.blog-post').append(data);
//           flag +=4;
//         }

//       });
//     }
//   });
// });

    
$(document).ready(function(){
var flag=0;
  $.ajax({
    type:"GET",
    url:"includes/handlers/ajax/get_data_reddit_top.php",
    data:{
      'offset':0,
      'limit':15

    },
    success:function(data){
      $('#blog-post').append(data);
      flag+=10;
    }

  });

  $(".pal-scroll").scroll(function(){
    if(this.offsetHeight + this.scrollTop == this.scrollHeight){
      // alert("at the bottom");
          $.ajax({
        type:"GET",
        url:"includes/handlers/ajax/get_data_reddit_top.php",
        data:{
          'offset':flag,
          'limit':5
        },
        success:function(data){
          $('#blog-post').append(data);
          flag +=5;
        }

      });
    }
  });
});





  </script>
  <style type="text/css">
    




  </style>
</head>
<div class="blog-post" id="blog-post">
  

</div>









</div>
</div>
<div class="main_co2l_title_bottom" style="padding:5px;"> </div>
 
</div>


<!-- module 2 start -->
            <div class="module">
               <div class="main_col_head">
          <div class="main_col_title">Education</div>
          <div class="main_co2l_title">Reddit Community</div>
          </div>
          <div class="pal" >
          <style>
               .ul_name{
              padding: 0;
              margin: 0;
              font-weight: 600;
            
              float: left;
            }

          .ul_first_li{
            box-shadow: 0 0px 3px rgba(0,0,0,0.30), 0 1px 1px rgba(0,0,0,0.22);
          }
            .follower{
              background: #d8d8d8;
              border-radius: 12px;
              padding: 2px 7px;
              color:#333;
            }
          .list-more-container #loadmore100 {
          display: none;
          }
          .list-more-container #loadmore100:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;
            opacity: 1;
            display:block;
            transition: 0.2s ease-in;
          }
          .list-more-container #loadmore100:checked ~ ul li .loadmore-btn .loaded_content {
          display: block;
          }
          .list-more-container #loadmore100:checked ~ ul li .loadmore-btn .unloaded_content_content {
          display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore100").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=100;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':100
                            },
                            success:function(data){
                              $('#blog-post-general').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });
          </script>
          <div class="list-more-container" >
            <input type="checkbox" id="loadmore100"/>
            <ul style="" id="blog-post-general" >
              <li style="" class="ul_first_li"><div class="ul_name">General</div><label class="loadmore-btn" for="loadmore100"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
            
          </ul>
            </div>

          <style>
          .list-more-container #loadmore101 {
          display: none;
          }
          .list-more-container #loadmore101:checked ~ ul  li:nth-child(1n +2) {
          max-height: 999px;opacity:1;
          display:block;
          border: none;
          transition: 0.1s ease-in;
          }
          .list-more-container #loadmore101:checked ~ ul li .loadmore-btn .loaded_content {
          display: block;
          }
          .list-more-container #loadmore101:checked ~ ul li .loadmore-btn .unloaded_content_content {
          display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore101").click(function () {


                     if (!executed) {
                          executed = true;


                      if ($(this).is(":checked")) {

                        var fact=101;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':101
                            },
                            success:function(data){
                              $('#blog-post-facts').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });










          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore101"/>
            <ul style="" id="blog-post-facts" >
              
              <li style="" class="ul_first_li"><div class="ul_name">Fact</div><label class="loadmore-btn" for="loadmore101" ><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
              

              

            </ul>
            
          </div>
          <style>
          .list-more-container #loadmore102 {
            display: none;
          }
          .list-more-container #loadmore102:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            transition: 0.1s ease-in;border:none;
          }
          .list-more-container #loadmore102:checked ~ ul li .loadmore-btn .loaded_content {
           display: block;
          }
          .list-more-container #loadmore102:checked ~ ul li .loadmore-btn .unloaded_content_content {
           display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore102").click(function () {
                     if (!executed) {
                          executed = true;

                      if ($(this).is(":checked")) {

                        var fact=102;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':102
                            },
                            success:function(data){
                              $('#blog-post-arts').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>


          <div class="list-more-container">
            <input type="checkbox" id="loadmore102"/>
            <ul style="" id="blog-post-arts">
              <li style="" class="ul_first_li"><div class="ul_name">arts</div><label class="loadmore-btn" for="loadmore102"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
              
             </ul>
            </div>
          <style>
          .list-more-container #loadmore103 {
            display: none;
          }
          .list-more-container #loadmore103:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore103:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore103:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore103").click(function () {
                     if (!executed) {
                          executed = true;

                      if ($(this).is(":checked")) {

                        var fact=103;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':103
                            },
                            success:function(data){
                              $('#blog-post-computer-science').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore103"/>
            <ul style="" id="blog-post-computer-science">
              <li style="" class="ul_first_li"><div class="ul_name">computer science</div><label class="loadmore-btn" for="loadmore103"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>

          <style>
          .list-more-container #loadmore104 {
            display: none;
          }
          .list-more-container #loadmore104:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore104:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore104:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore104").click(function () {
                     if (!executed) {
                          executed = true;

                      if ($(this).is(":checked")) {

                        var fact=104;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':104
                            },
                            success:function(data){
                              $('#blog-post-economics').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore104"/>
            <ul style="" id="blog-post-economics">
              <li style="" class="ul_first_li"><div class="ul_name">Economics</div><label class="loadmore-btn" for="loadmore104"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
            </ul>
          </div>
          <style>
          .list-more-container #loadmore105 {
            display: none;
          }
          .list-more-container #loadmore105:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore105:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore105:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
            }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore105").click(function () {
                     if (!executed) {
                          executed = true;

                      if ($(this).is(":checked")) {

                        var fact=105;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':105
                            },
                            success:function(data){
                              $('#blog-post-environment').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore105"/>
            <ul style="" id="blog-post-environment">
              <li style="" class="ul_first_li"><div class="ul_name">Environment</div><label class="loadmore-btn" for="loadmore105"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
               </ul>
            
          </div>

          <style>
          .list-more-container #loadmore106 {
            display: none;
          }
          .list-more-container #loadmore106:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
           display:block;
           border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore106:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore106:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore106").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=106;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':106
                            },
                            success:function(data){
                              $('#blog-post-history').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore106"/>
            <ul style="" id="blog-post-history">
              <li style="" class="ul_first_li"><div class="ul_name">History</div><label class="loadmore-btn" for="loadmore106"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
               </ul>
            
          </div>

          <style>
          .list-more-container #loadmore107 {
            display: none;
          }
          .list-more-container #loadmore107:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore107:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore107:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;}
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore107").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=107;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':107
                            },
                            success:function(data){
                              $('#blog-post-language').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore107"/>
            <ul style="" id="blog-post-language">
              <li style="" class="ul_first_li"><div class="ul_name">Language</div><label class="loadmore-btn" for="loadmore107"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
            </ul>
            </div>
          <style>
          .list-more-container #loadmore108 {
            display: none;
          }
          .list-more-container #loadmore108:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
           display:block;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore108:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore108:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;}
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore108").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=108;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':108
                            },
                            success:function(data){
                              $('#blog-post-law').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore108"/>
            <ul style="" id="blog-post-law">
              <li style=""  class="ul_first_li"><div class="ul_name">Law</div><label class="loadmore-btn" for="loadmore108"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
             
          </ul>
            
          </div>
          <style>
          .list-more-container #loadmore109 {
            display: none;
          }
          .list-more-container #loadmore109:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
           display:block;
           border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore109:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore109:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore109").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=109;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':109
                            },
                            success:function(data){
                              $('#blog-post-math').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>

          <div class="list-more-container">
            <input type="checkbox" id="loadmore109"/>
            <ul style="" id="blog-post-math">
              <li style="" class="ul_first_li"><div class="ul_name">Math</div><label class="loadmore-btn" for="loadmore109"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
             
            </ul>
            
          </div>
          <style>
          .list-more-container #loadmore110 {
            display: none;
          }
          .list-more-container #loadmore110:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
           display:block;
           border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore110:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore110:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore110").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=110;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':110
                            },
                            success:function(data){
                              $('#blog-post-science').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>

          <div class="list-more-container">
            <input type="checkbox" id="loadmore110"/>
            <ul style="" id="blog-post-science">
              <li style=""  class="ul_first_li"><div class="ul_name">Science</div><label class="loadmore-btn" for="loadmore110"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
            </ul>
            
          </div>
          </div>
                <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
            </div>
<!-- module 3 -->
            <div class="module">
              <div class="main_col_head">
          <div class="main_col_title">Entertainment</div>
          <div class="main_co2l_title">reddit Community</div>
          </div>
                    <div class="pal" >
          <style>
               .ul_name{
              padding: 0;
              margin: 0;
              font-weight: 600;
            
              float: left;
            }

          .ul_first_li{
            box-shadow: 0 0px 3px rgba(0,0,0,0.30), 0 1px 1px rgba(0,0,0,0.22);
          }
            .follower{
              background: #d8d8d8;
              border-radius: 12px;
              padding: 2px 7px;
              color:#333;
            }
          .list-more-container #loadmore111 {
          display: none;
          }
          .list-more-container #loadmore111:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;
            opacity: 1;
            display:block;
            transition: 0.2s ease-in;
          }
          .list-more-container #loadmore111:checked ~ ul li .loadmore-btn .loaded_content {
          display: block;
          }
          .list-more-container #loadmore111:checked ~ ul li .loadmore-btn .unloaded_content_content {
          display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore111").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=111;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':111
                            },
                            success:function(data){
                              $('#111').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });
          </script>
          <div class="list-more-container" >
            <input type="checkbox" id="loadmore111"/>
            <ul style="" id="111" >
              <li style="" class="ul_first_li"><div class="ul_name">General</div><label class="loadmore-btn" for="loadmore111"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
            
          </ul>
            </div>

          <style>
          .list-more-container #loadmore112 {
          display: none;
          }
          .list-more-container #loadmore112:checked ~ ul  li:nth-child(1n +2) {
          max-height: 999px;opacity:1;
          display:block;
          border: none;
          transition: 0.1s ease-in;
          }
          .list-more-container #loadmore112:checked ~ ul li .loadmore-btn .loaded_content {
          display: block;
          }
          .list-more-container #loadmore112:checked ~ ul li .loadmore-btn .unloaded_content_content {
          display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore112").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=112;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':112
                            },
                            success:function(data){
                              $('#112').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });










          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore112"/>
            <ul style="" id="112" >
              
              <li style="" class="ul_first_li"><div class="ul_name">Movies</div><label class="loadmore-btn" for="loadmore112" ><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
              

              

            </ul>
            
          </div>
          <style>
          .list-more-container #loadmore113 {
            display: none;
          }
          .list-more-container #loadmore113:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            transition: 0.1s ease-in;border:none;
          }
          .list-more-container #loadmore113:checked ~ ul li .loadmore-btn .loaded_content {
           display: block;
          }
          .list-more-container #loadmore113:checked ~ ul li .loadmore-btn .unloaded_content_content {
           display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore113").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=113;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':113
                            },
                            success:function(data){
                              $('#113').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>


          <div class="list-more-container">
            <input type="checkbox" id="loadmore113"/>
            <ul style="" id="113">
              <li style="" class="ul_first_li"><div class="ul_name">Anime</div><label class="loadmore-btn" for="loadmore113"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
              
             </ul>
            </div>
          <style>
          .list-more-container #loadmore114 {
            display: none;
          }
          .list-more-container #loadmore114:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore114:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore114:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore114").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=114;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':114
                            },
                            success:function(data){
                              $('#114').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore114"/>
            <ul style="" id="114">
              <li style="" class="ul_first_li"><div class="ul_name">Music</div><label class="loadmore-btn" for="loadmore114"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>

          <style>
          .list-more-container #loadmore115 {
            display: none;
          }
          .list-more-container #loadmore115:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore115:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore115:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore115").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=115;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':115
                            },
                            success:function(data){
                              $('#115').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore115"/>
            <ul style="" id="115">
              <li style="" class="ul_first_li"><div class="ul_name">Sports</div><label class="loadmore-btn" for="loadmore115"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
            </ul>
          </div>
          <style>
          .list-more-container #loadmore116 {
            display: none;
          }
          .list-more-container #loadmore116:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore116:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore116:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
            }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore116").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=116;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':116
                            },
                            success:function(data){
                              $('#116').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore116"/>
            <ul style="" id="116">
              <li style="" class="ul_first_li"><div class="ul_name">TV</div><label class="loadmore-btn" for="loadmore116"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
               </ul>
            
          </div>

          <style>
          .list-more-container #loadmore117 {
            display: none;
          }
          .list-more-container #loadmore117:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
           display:block;
           border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore117:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore117:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore117").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=117;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':117
                            },
                            success:function(data){
                              $('#117').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore117"/>
            <ul style="" id="117">
              <li style="" class="ul_first_li"><div class="ul_name">Book/Writing</div><label class="loadmore-btn" for="loadmore117"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
               </ul>
            
          </div>

          <style>
          .list-more-container #loadmore118 {
            display: none;
          }
          .list-more-container #loadmore118:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore118:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore118:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;}
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore118").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=118;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':118
                            },
                            success:function(data){
                              $('#118').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore118"/>
            <ul style="" id="118">
              <li style="" class="ul_first_li"><div class="ul_name">Celebrities</div><label class="loadmore-btn" for="loadmore118"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
            </ul>
            </div>
          <style>
          .list-more-container #loadmore119 {
            display: none;
          }
          .list-more-container #loadmore119:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
           display:block;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore119:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore119:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;}
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore119").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=119;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':119
                            },
                            success:function(data){
                              $('#119').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore119"/>
            <ul style="" id="119">
              <li style=""  class="ul_first_li"><div class="ul_name">Cosplay</div><label class="loadmore-btn" for="loadmore119"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
             
          </ul>
            
          </div>
          <style>
          .list-more-container #loadmore120 {
            display: none;
          }
          .list-more-container #loadmore120:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
           display:block;
           border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore120:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore120:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
                  $("#loadmore120").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=120;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':120
                            },
                            success:function(data){
                              $('#blog-post-math').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>

          <div class="list-more-container">
            <input type="checkbox" id="loadmore120"/>
            <ul style="" id="120">
              <li style="" class="ul_first_li"><div class="ul_name">Games</div><label class="loadmore-btn" for="loadmore120"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
             
            </ul>
            
          </div>
          <style>
          .list-more-container #loadmore121 {
            display: none;
          }
          .list-more-container #loadmore121:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
           display:block;
           border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore121:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore121:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore121").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=121;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':121
                            },
                            success:function(data){
                              $('#121').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>

          <div class="list-more-container">
            <input type="checkbox" id="loadmore121"/>
            <ul style="" id="121">
              <li style=""  class="ul_first_li"><div class="ul_name">Video Games</div><label class="loadmore-btn" for="loadmore121"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
            </ul>
            
          </div>


          <style>
          .list-more-container #loadmore122 {
            display: none;
          }
          .list-more-container #loadmore122:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
           display:block;
           border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore122:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore122:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore122").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=122;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':122
                            },
                            success:function(data){
                              $('#122').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>

          <div class="list-more-container">
            <input type="checkbox" id="loadmore122"/>
            <ul style="" id="122">
              <li style=""  class="ul_first_li"><div class="ul_name">Internet/App</div><label class="loadmore-btn" for="loadmore122"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
            </ul>
            
          </div>
          </div>

                <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
          <!-- end o column -->
            </div>
<!-- start  module 4 -->
            <div class="module">
               <div class="main_col_head">
          <div class="main_col_title">Discussion</div>
          <div class="main_co2l_title">reddit community</div>
          </div>
                              <div class="pal" >
          <style>
               .ul_name{
              padding: 0;
              margin: 0;
              font-weight: 600;
            
              float: left;
            }

          .ul_first_li{
            box-shadow: 0 0px 3px rgba(0,0,0,0.30), 0 1px 1px rgba(0,0,0,0.22);
          }
            .follower{
              background: #d8d8d8;
              border-radius: 12px;
              padding: 2px 7px;
              color:#333;
            }
          .list-more-container #loadmore123 {
          display: none;
          }
          .list-more-container #loadmore123:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;
            opacity: 1;
            display:block;
            transition: 0.2s ease-in;
          }
          .list-more-container #loadmore123:checked ~ ul li .loadmore-btn .loaded_content {
          display: block;
          }
          .list-more-container #loadmore123:checked ~ ul li .loadmore-btn .unloaded_content_content {
          display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore123").click(function () {
                      if ($(this).is(":checked")) {
                        if (!executed) {
                          executed = true;

                        var fact=123;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':123
                            },
                            success:function(data){
                              $('#123').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });
          </script>
          <div class="list-more-container" >
            <input type="checkbox" id="loadmore123"/>
            <ul style="" id="123" >
              <li style="" class="ul_first_li"><div class="ul_name">General</div><label class="loadmore-btn" for="loadmore123"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
            
          </ul>
            </div>

          <style>
          .list-more-container #loadmore124 {
          display: none;
          }
          .list-more-container #loadmore124:checked ~ ul  li:nth-child(1n +2) {
          max-height: 999px;opacity:1;
          display:block;
          border: none;
          transition: 0.1s ease-in;
          }
          .list-more-container #loadmore124:checked ~ ul li .loadmore-btn .loaded_content {
          display: block;
          }
          .list-more-container #loadmore124:checked ~ ul li .loadmore-btn .unloaded_content_content {
          display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore124").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=124;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':124
                            },
                            success:function(data){
                              $('#124').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });










          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore124"/>
            <ul style="" id="124" >
              
              <li style="" class="ul_first_li"><div class="ul_name">Advice</div><label class="loadmore-btn" for="loadmore124" ><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
              

              

            </ul>
            
          </div>
          <style>
          .list-more-container #loadmore125 {
            display: none;
          }
          .list-more-container #loadmore125:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            transition: 0.1s ease-in;border:none;
          }
          .list-more-container #loadmore125:checked ~ ul li .loadmore-btn .loaded_content {
           display: block;
          }
          .list-more-container #loadmore125:checked ~ ul li .loadmore-btn .unloaded_content_content {
           display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore125").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=125;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':125
                            },
                            success:function(data){
                              $('#125').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>


          <div class="list-more-container">
            <input type="checkbox" id="loadmore125"/>
            <ul style="" id="125">
              <li style="" class="ul_first_li"><div class="ul_name">AMA</div><label class="loadmore-btn" for="loadmore125"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
              
             </ul>
            </div>
          <style>
          .list-more-container #loadmore126 {
            display: none;
          }
          .list-more-container #loadmore126:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore126:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore126:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore126").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=126;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':126
                            },
                            success:function(data){
                              $('#126').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore126"/>
            <ul style="" id="126">
              <li style="" class="ul_first_li"><div class="ul_name">Games</div><label class="loadmore-btn" for="loadmore126"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>

          <style>
          .list-more-container #loadmore127 {
            display: none;
          }
          .list-more-container #loadmore127:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore127:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore127:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore127").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=127;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':127
                            },
                            success:function(data){
                              $('#127').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore127"/>
            <ul style="" id="127">
              <li style="" class="ul_first_li"><div class="ul_name">Question/Answer</div><label class="loadmore-btn" for="loadmore127"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
            </ul>
          </div>
          <style>
          .list-more-container #loadmore128 {
            display: none;
          }
          .list-more-container #loadmore128:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore128:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore128:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
            }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore128").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=128;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':128
                            },
                            success:function(data){
                              $('#128').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore128"/>
            <ul style="" id="128">
              <li style="" class="ul_first_li"><div class="ul_name">Stories</div><label class="loadmore-btn" for="loadmore128"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
               </ul>
            
          </div>

          <style>
          .list-more-container #loadmore129 {
            display: none;
          }
          .list-more-container #loadmore129:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
           display:block;
           border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore129:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore129:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore129").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=129;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':129
                            },
                            success:function(data){
                              $('#129').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore129"/>
            <ul style="" id="129">
              <li style="" class="ul_first_li"><div class="ul_name">Support</div><label class="loadmore-btn" for="loadmore129"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
               </ul>
            
          </div>

          </div>

           
                <div class="main_co2l_title_bottom" style="padding:5px;"> </div>

          <!-- /* end of column */ -->
            </div>

<!-- start module 5 -->
            <div class="module">

               <div class="main_col_head">
          <div class="main_col_title">Hobbie</div>
          <div class="main_co2l_title">Reddit community</div>
          </div>
                                       <div class="pal" >
          <style>
               .ul_name{
              padding: 0;
              margin: 0;
              font-weight: 600;
            
              float: left;
            }

          .ul_first_li{
            box-shadow: 0 0px 3px rgba(0,0,0,0.30), 0 1px 1px rgba(0,0,0,0.22);
          }
            .follower{
              background: #d8d8d8;
              border-radius: 12px;
              padding: 2px 7px;
              color:#333;
            }
          .list-more-container #loadmore130 {
          display: none;
          }
          .list-more-container #loadmore130:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;
            opacity: 1;
            display:block;
            transition: 0.2s ease-in;
          }
          .list-more-container #loadmore130:checked ~ ul li .loadmore-btn .loaded_content {
          display: block;
          }
          .list-more-container #loadmore130:checked ~ ul li .loadmore-btn .unloaded_content_content {
          display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore130").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=130;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':130
                            },
                            success:function(data){
                              $('#130').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });
          </script>
          <div class="list-more-container" >
            <input type="checkbox" id="loadmore130"/>
            <ul style="" id="130" >
              <li style="" class="ul_first_li"><div class="ul_name">General</div><label class="loadmore-btn" for="loadmore130"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
            
          </ul>
            </div>

          <style>
          .list-more-container #loadmore131 {
          display: none;
          }
          .list-more-container #loadmore131:checked ~ ul  li:nth-child(1n +2) {
          max-height: 999px;opacity:1;
          display:block;
          border: none;
          transition: 0.1s ease-in;
          }
          .list-more-container #loadmore131:checked ~ ul li .loadmore-btn .loaded_content {
          display: block;
          }
          .list-more-container #loadmore131:checked ~ ul li .loadmore-btn .unloaded_content_content {
          display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore131").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=131;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':131
                            },
                            success:function(data){
                              $('#131').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });










          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore131"/>
            <ul style="" id="131" >
              
              <li style="" class="ul_first_li"><div class="ul_name">Arts/writing</div><label class="loadmore-btn" for="loadmore131" ><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
              

              

            </ul>
            
          </div>
          <style>
          .list-more-container #loadmore132 {
            display: none;
          }
          .list-more-container #loadmore132:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            transition: 0.1s ease-in;border:none;
          }
          .list-more-container #loadmore132:checked ~ ul li .loadmore-btn .loaded_content {
           display: block;
          }
          .list-more-container #loadmore132:checked ~ ul li .loadmore-btn .unloaded_content_content {
           display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore132").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=132;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':132
                            },
                            success:function(data){
                              $('#132').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>


          <div class="list-more-container">
            <input type="checkbox" id="loadmore132"/>
            <ul style="" id="132">
              <li style="" class="ul_first_li"><div class="ul_name">Automotive</div><label class="loadmore-btn" for="loadmore132"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
              
             </ul>
            </div>
          <style>
          .list-more-container #loadmore133 {
            display: none;
          }
          .list-more-container #loadmore133:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore133:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore133:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore133").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=133;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':133
                            },
                            success:function(data){
                              $('#133').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore133"/>
            <ul style="" id="133">
              <li style="" class="ul_first_li"><div class="ul_name">Design</div><label class="loadmore-btn" for="loadmore133"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>

          <style>
          .list-more-container #loadmore134 {
            display: none;
          }
          .list-more-container #loadmore134:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore134:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore134:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore134").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=134;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':134
                            },
                            success:function(data){
                              $('#134').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore134"/>
            <ul style="" id="134">
              <li style="" class="ul_first_li"><div class="ul_name">Guns/combat</div><label class="loadmore-btn" for="loadmore134"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
            </ul>
          </div>
          <style>
          .list-more-container #loadmore135 {
            display: none;
          }
          .list-more-container #loadmore135:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore135:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore135:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
            }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore135").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=135;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':135
                            },
                            success:function(data){
                              $('#135').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore135"/>
            <ul style="" id="135">
              <li style="" class="ul_first_li"><div class="ul_name">job  finding</div><label class="loadmore-btn" for="loadmore135"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
               </ul>
            
          </div>

          <style>
          .list-more-container #loadmore136 {
            display: none;
          }
          .list-more-container #loadmore136:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
           display:block;
           border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore136:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore136:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore136").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=136;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':136
                            },
                            success:function(data){
                              $('#136').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore136"/>
            <ul style="" id="136">
              <li style="" class="ul_first_li"><div class="ul_name">Outdoors</div><label class="loadmore-btn" for="loadmore136"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
               </ul>
            
          </div>





           <style>
          .list-more-container #loadmore137 {
            display: none;
          }
          .list-more-container #loadmore137:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
           display:block;
           border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore137:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore137:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore137").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=137;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':137
                            },
                            success:function(data){
                              $('#137').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore137"/>
            <ul style="" id="137">
              <li style="" class="ul_first_li"><div class="ul_name">Tech Related</div><label class="loadmore-btn" for="loadmore137"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
               </ul>
            
          </div>




          <style>
          .list-more-container #loadmore138 {
            display: none;
          }
          .list-more-container #loadmore138:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
           display:block;
           border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore138:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore138:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore138").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=138;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':138
                            },
                            success:function(data){
                              $('#138').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore138"/>
            <ul style="" id="138">
              <li style="" class="ul_first_li"><div class="ul_name">Tools</div><label class="loadmore-btn" for="loadmore138"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
               </ul>
            
          </div>





          </div>

           
                <div class="main_co2l_title_bottom" style="padding:5px;"> </div>

          <!-- /* end of column */ -->
            </div>
          <!-- start search colomn -->
<!-- start module 6 -->
          <div class="module">

               <div class="main_col_head">
          <div class="main_col_title">Lifestyle</div>
          <div class="main_co2l_title">Reddit community</div>
          </div>
                                                 <div class="pal" >
          <style>
               .ul_name{
              padding: 0;
              margin: 0;
              font-weight: 600;
            
              float: left;
            }

          .ul_first_li{
            box-shadow: 0 0px 3px rgba(0,0,0,0.30), 0 1px 1px rgba(0,0,0,0.22);
          }
            .follower{
              background: #d8d8d8;
              border-radius: 12px;
              padding: 2px 7px;
              color:#333;
            }
          .list-more-container #loadmore139 {
          display: none;
          }
          .list-more-container #loadmore139:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;
            opacity: 1;
            display:block;
            transition: 0.2s ease-in;
          }
          .list-more-container #loadmore139:checked ~ ul li .loadmore-btn .loaded_content {
          display: block;
          }
          .list-more-container #loadmore139:checked ~ ul li .loadmore-btn .unloaded_content_content {
          display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore139").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=139;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':139
                            },
                            success:function(data){
                              $('#139').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });
          </script>
          <div class="list-more-container" >
            <input type="checkbox" id="loadmore139"/>
            <ul style="" id="139" >
              <li style="" class="ul_first_li"><div class="ul_name">General</div><label class="loadmore-btn" for="loadmore139"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
            
          </ul>
            </div>

          <style>
          .list-more-container #loadmore140 {
          display: none;
          }
          .list-more-container #loadmore140:checked ~ ul  li:nth-child(1n +2) {
          max-height: 999px;opacity:1;
          display:block;
          border: none;
          transition: 0.1s ease-in;
          }
          .list-more-container #loadmore140:checked ~ ul li .loadmore-btn .loaded_content {
          display: block;
          }
          .list-more-container #loadmore140:checked ~ ul li .loadmore-btn .unloaded_content_content {
          display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore140").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=140;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':140
                            },
                            success:function(data){
                              $('#140').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                      }else{}
                  });
              });










          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore140"/>
            <ul style="" id="140" >
              
              <li style="" class="ul_first_li"><div class="ul_name">Community</div><label class="loadmore-btn" for="loadmore140" ><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
              

              

            </ul>
            
          </div>
          <style>
          .list-more-container #loadmore141{
            display: none;
          }
          .list-more-container #loadmore141:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            transition: 0.1s ease-in;border:none;
          }
          .list-more-container #loadmore141:checked ~ ul li .loadmore-btn .loaded_content {
           display: block;
          }
          .list-more-container #loadmore141:checked ~ ul li .loadmore-btn .unloaded_content_content {
           display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore141").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=141;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':141
                            },
                            success:function(data){
                              $('#141').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                      }else{}
                  });
              });

          </script>


          <div class="list-more-container">
            <input type="checkbox" id="loadmore141"/>
            <ul style="" id="141">
              <li style="" class="ul_first_li"><div class="ul_name">LGBT</div><label class="loadmore-btn" for="loadmore141"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
              
             </ul>
            </div>
          <style>
          .list-more-container #loadmore142 {
            display: none;
          }
          .list-more-container #loadmore142:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore142:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore142:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore142").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=142;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':142
                            },
                            success:function(data){
                              $('#142').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                      }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore142"/>
            <ul style="" id="142">
              <li style="" class="ul_first_li"><div class="ul_name">Drugs</div><label class="loadmore-btn" for="loadmore142"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>

          <style>
          .list-more-container #loadmore143 {
            display: none;
          }
          .list-more-container #loadmore143:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore143:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore143:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore143").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=143;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':143
                            },
                            success:function(data){
                              $('#143').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore143"/>
            <ul style="" id="143">
              <li style="" class="ul_first_li"><div class="ul_name">Exercise/Health</div><label class="loadmore-btn" for="loadmore143"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
            </ul>
          </div>
          <style>
          .list-more-container #loadmore144 {
            display: none;
          }
          .list-more-container #loadmore144:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore144:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore144:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
            }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore144").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=144;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':144
                            },
                            success:function(data){
                              $('#144').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore144"/>
            <ul style="" id="144">
              <li style="" class="ul_first_li"><div class="ul_name">Fashion/Beauty</div><label class="loadmore-btn" for="loadmore144"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
               </ul>
            
          </div>

          <style>
          .list-more-container #loadmore145 {
            display: none;
          }
          .list-more-container #loadmore145:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
           display:block;
           border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore145:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore145:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore145").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=145;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':145
                            },
                            success:function(data){
                              $('#145').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore145"/>
            <ul style="" id="145">
              <li style="" class="ul_first_li"><div class="ul_name">Food</div><label class="loadmore-btn" for="loadmore145"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
               </ul>
            
          </div>





           <style>
          .list-more-container #loadmore146 {
            display: none;
          }
          .list-more-container #loadmore146:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
           display:block;
           border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore146:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore146:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore146").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=146;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':146
                            },
                            success:function(data){
                              $('#146').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore146"/>
            <ul style="" id="146">
              <li style="" class="ul_first_li"><div class="ul_name">Money</div><label class="loadmore-btn" for="loadmore146"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
               </ul>
            
          </div>




          <style>
          .list-more-container #loadmore147 {
            display: none;
          }
          .list-more-container #loadmore147:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
           display:block;
           border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore147:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore147:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore147").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=147;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':147
                            },
                            success:function(data){
                              $('#147').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore147"/>
            <ul style="" id="147">
              <li style="" class="ul_first_li"><div class="ul_name">Religion/Beliefs</div><label class="loadmore-btn" for="loadmore147"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
               </ul>
            
          </div>

                    <style>
          .list-more-container #loadmore148 {
            display: none;
          }
          .list-more-container #loadmore148:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
           display:block;
           border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore148:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore148:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore148").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=148;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':148
                            },
                            success:function(data){
                              $('#148').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore148"/>
            <ul style="" id="148">
              <li style="" class="ul_first_li"><div class="ul_name">Relationships/sex</div><label class="loadmore-btn" for="loadmore148"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
               </ul>
            
          </div>

                    <style>
          .list-more-container #loadmore149 {
            display: none;
          }
          .list-more-container #loadmore149:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
           display:block;
           border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore149:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore149:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore149").click(function () {
                     if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=149;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':149
                            },
                            success:function(data){
                              $('#149').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore149"/>
            <ul style="" id="149">
              <li style="" class="ul_first_li"><div class="ul_name">Self-Improvement</div><label class="loadmore-btn" for="loadmore149"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
               </ul>
            
          </div>




          </div>

           
                <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                </div>

          <!-- end search column -->




<!-- module 7 -->
 <div class="module">

               <div class="main_col_head">
          <div class="main_col_title">Technology</div>
          <div class="main_co2l_title">Reddit community</div>
          </div>
           <div class="pal" >
          <style>
               .ul_name{
              padding: 0;
              margin: 0;
              font-weight: 600;
            
              float: left;
            }

          .ul_first_li{
            box-shadow: 0 0px 3px rgba(0,0,0,0.30), 0 1px 1px rgba(0,0,0,0.22);
          }
            .follower{
              background: #d8d8d8;
              border-radius: 12px;
              padding: 2px 7px;
              color:#333;
            }
          .list-more-container #loadmore150 {
          display: none;
          }
          .list-more-container #loadmore150:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;
            opacity: 1;
            display:block;
            transition: 0.2s ease-in;
          }
          .list-more-container #loadmore150:checked ~ ul li .loadmore-btn .loaded_content {
          display: block;
          }
          .list-more-container #loadmore150:checked ~ ul li .loadmore-btn .unloaded_content_content {
          display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore150").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=150;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':150
                            },
                            success:function(data){
                              $('#150').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                     }else{}
                  });
              });
          </script>
          <div class="list-more-container" >
            <input type="checkbox" id="loadmore150"/>
            <ul style="" id="150" >
              <li style="" class="ul_first_li"><div class="ul_name">General</div><label class="loadmore-btn" for="loadmore150"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
            
          </ul>
            </div>

          <style>
          .list-more-container #loadmore151 {
          display: none;
          }
          .list-more-container #loadmore151:checked ~ ul  li:nth-child(1n +2) {
          max-height: 999px;opacity:1;
          display:block;
          border: none;
          transition: 0.1s ease-in;
          }
          .list-more-container #loadmore151:checked ~ ul li .loadmore-btn .loaded_content {
          display: block;
          }
          .list-more-container #loadmore151:checked ~ ul li .loadmore-btn .unloaded_content_content {
          display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore151").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=151;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':151
                            },
                            success:function(data){
                              $('#151').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                     }else{}
                  });
              });










          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore151"/>
            <ul style="" id="151" >
              
              <li style="" class="ul_first_li"><div class="ul_name">Business Tech</div><label class="loadmore-btn" for="loadmore151" ><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
              

              

            </ul>
            
          </div>
          <style>
          .list-more-container #loadmore152{
            display: none;
          }
          .list-more-container #loadmore152:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            transition: 0.1s ease-in;border:none;
          }
          .list-more-container #loadmore152:checked ~ ul li .loadmore-btn .loaded_content {
           display: block;
          }
          .list-more-container #loadmore152:checked ~ ul li .loadmore-btn .unloaded_content_content {
           display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore152").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=152;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':152
                            },
                            success:function(data){
                              $('#152').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                     }else{}
                  });
              });

          </script>


          <div class="list-more-container">
            <input type="checkbox" id="loadmore152"/>
            <ul style="" id="152">
              <li style="" class="ul_first_li"><div class="ul_name">Digital Currency</div><label class="loadmore-btn" for="loadmore152"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
              
             </ul>
            </div>
          <style>
          .list-more-container #loadmore153 {
            display: none;
          }
          .list-more-container #loadmore153:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore153:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore153:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore153").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=153;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':153
                            },
                            success:function(data){
                              $('#153').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                     }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore153"/>
            <ul style="" id="153">
              <li style="" class="ul_first_li"><div class="ul_name">Programming</div><label class="loadmore-btn" for="loadmore153"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>

          </div>

           
                <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                </div>
<!-- start module 8 -->
           <div class="module">

               <div class="main_col_head">
          <div class="main_col_title">Humour</div>
          <div class="main_co2l_title">reddit Community</div>
          </div>
                     <div class="pal" >
          <style>
               .ul_name{
              padding: 0;
              margin: 0;
              font-weight: 600;
            
              float: left;
            }

          .ul_first_li{
            box-shadow: 0 0px 3px rgba(0,0,0,0.30), 0 1px 1px rgba(0,0,0,0.22);
          }
            .follower{
              background: #d8d8d8;
              border-radius: 12px;
              padding: 2px 7px;
              color:#333;
            }
          .list-more-container #loadmore154 {
          display: none;
          }
          .list-more-container #loadmore154:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;
            opacity: 1;
            display:block;
            transition: 0.2s ease-in;
          }
          .list-more-container #loadmore154:checked ~ ul li .loadmore-btn .loaded_content {
          display: block;
          }
          .list-more-container #loadmore154:checked ~ ul li .loadmore-btn .unloaded_content_content {
          display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore154").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=154;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':154
                            },
                            success:function(data){
                              $('#154').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                     }else{}
                  });
              });
          </script>
          <div class="list-more-container" >
            <input type="checkbox" id="loadmore154"/>
            <ul style="" id="154" >
              <li style="" class="ul_first_li"><div class="ul_name">General</div><label class="loadmore-btn" for="loadmore154"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
            
          </ul>
            </div>

          <style>
          .list-more-container #loadmore155 {
          display: none;
          }
          .list-more-container #loadmore155:checked ~ ul  li:nth-child(1n +2) {
          max-height: 999px;opacity:1;
          display:block;
          border: none;
          transition: 0.1s ease-in;
          }
          .list-more-container #loadmore155:checked ~ ul li .loadmore-btn .loaded_content {
          display: block;
          }
          .list-more-container #loadmore155:checked ~ ul li .loadmore-btn .unloaded_content_content {
          display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore155").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=155;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':155
                            },
                            success:function(data){
                              $('#155').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                     }else{}
                  });
              });










          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore155"/>
            <ul style="" id="155" >
              
              <li style="" class="ul_first_li"><div class="ul_name">Jokes</div><label class="loadmore-btn" for="loadmore155" ><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
              

              

            </ul>
            
          </div>
          <style>
          .list-more-container #loadmore156{
            display: none;
          }
          .list-more-container #loadmore156:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            transition: 0.1s ease-in;border:none;
          }
          .list-more-container #loadmore156:checked ~ ul li .loadmore-btn .loaded_content {
           display: block;
          }
          .list-more-container #loadmore156:checked ~ ul li .loadmore-btn .unloaded_content_content {
           display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore156").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=156;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':156
                            },
                            success:function(data){
                              $('#156').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                     }else{}
                  });
              });

          </script>


          <div class="list-more-container">
            <input type="checkbox" id="loadmore156"/>
            <ul style="" id="156">
              <li style="" class="ul_first_li"><div class="ul_name">Comics</div><label class="loadmore-btn" for="loadmore156"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
              
             </ul>
            </div>
          <style>
          .list-more-container #loadmore157 {
            display: none;
          }
          .list-more-container #loadmore157:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore157:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore157:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore157").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=157;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':157
                            },
                            success:function(data){
                              $('#157').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                     }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore157"/>
            <ul style="" id="157">
              <li style="" class="ul_first_li"><div class="ul_name">Memes</div><label class="loadmore-btn" for="loadmore157"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
                    <style>
          .list-more-container #loadmore158 {
            display: none;
          }
          .list-more-container #loadmore158:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore158:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore158:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore158").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=158;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':158
                            },
                            success:function(data){
                              $('#158').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                     }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore158"/>
            <ul style="" id="158">
              <li style="" class="ul_first_li"><div class="ul_name">__irl</div><label class="loadmore-btn" for="loadmore158"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>

          </div>
           

          

           
                <div class="main_co2l_title_bottom" style="padding:5px;"> </div>



          </div>



 <!--end module  -->
 <!-- start module 9 -->

            <div class="module">

               <div class="main_col_head">
          <div class="main_col_title">Animal</div>
          <div class="main_co2l_title">reddit Community</div>
          </div>
                     <div class="pal" >
          <style>
               .ul_name{
              padding: 0;
              margin: 0;
              font-weight: 600;
            
              float: left;
            }

          .ul_first_li{
            box-shadow: 0 0px 3px rgba(0,0,0,0.30), 0 1px 1px rgba(0,0,0,0.22);
          }
            .follower{
              background: #d8d8d8;
              border-radius: 12px;
              padding: 2px 7px;
              color:#333;
            }
          .list-more-container #loadmore179 {
          display: none;
          }
          .list-more-container #loadmore179:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;
            opacity: 1;
            display:block;
            transition: 0.2s ease-in;
          }
          .list-more-container #loadmore179:checked ~ ul li .loadmore-btn .loaded_content {
          display: block;
          }
          .list-more-container #loadmore179:checked ~ ul li .loadmore-btn .unloaded_content_content {
          display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore179").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=179;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':179
                            },
                            success:function(data){
                              $('#179').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                     }else{}
                  });
              });
          </script>
          <div class="list-more-container" >
            <input type="checkbox" id="loadmore179"/>
            <ul style="" id="179" >
              <li style="" class="ul_first_li"><div class="ul_name">General</div><label class="loadmore-btn" for="loadmore179"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
            
          </ul>
            </div>

          <style>
          .list-more-container #loadmore180 {
          display: none;
          }
          .list-more-container #loadmore180:checked ~ ul  li:nth-child(1n +2) {
          max-height: 999px;opacity:1;
          display:block;
          border: none;
          transition: 0.1s ease-in;
          }
          .list-more-container #loadmore180:checked ~ ul li .loadmore-btn .loaded_content {
          display: block;
          }
          .list-more-container #loadmore180:checked ~ ul li .loadmore-btn .unloaded_content_content {
          display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore180").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=180;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':180
                            },
                            success:function(data){
                              $('#180').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                     }else{}
                  });
              });










          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore180"/>
            <ul style="" id="180" >
              
              <li style="" class="ul_first_li"><div class="ul_name">Birds</div><label class="loadmore-btn" for="loadmore180" ><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
              

              

            </ul>
            
          </div>
          <style>
          .list-more-container #loadmore181{
            display: none;
          }
          .list-more-container #loadmore181:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            transition: 0.1s ease-in;border:none;
          }
          .list-more-container #loadmore181:checked ~ ul li .loadmore-btn .loaded_content {
           display: block;
          }
          .list-more-container #loadmore181:checked ~ ul li .loadmore-btn .unloaded_content_content {
           display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore181").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=181;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':181
                            },
                            success:function(data){
                              $('#181').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                     }else{}
                  });
              });

          </script>


          <div class="list-more-container">
            <input type="checkbox" id="loadmore181"/>
            <ul style="" id="181">
              <li style="" class="ul_first_li"><div class="ul_name">Mammals</div><label class="loadmore-btn" for="loadmore181"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
              
             </ul>
            </div>
          <style>
          .list-more-container #loadmore182 {
            display: none;
          }
          .list-more-container #loadmore182:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore182:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore182:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore182").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=182;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':182
                            },
                            success:function(data){
                              $('#182').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                     }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore182"/>
            <ul style="" id="182">
              <li style="" class="ul_first_li"><div class="ul_name">Cats</div><label class="loadmore-btn" for="loadmore182"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
                    <style>
          .list-more-container #loadmore183{
            display: none;
          }
          .list-more-container #loadmore183:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore183:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore183:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
              var executed=false;
                  $("#loadmore183").click(function () {
                    if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=183;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':183
                            },
                            success:function(data){
                              $('#183').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore183"/>
            <ul style="" id="183">
              <li style="" class="ul_first_li"><div class="ul_name">Dogs</div><label class="loadmore-btn" for="loadmore183"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>

          </div>
           

          

           
                <div class="main_co2l_title_bottom" style="padding:5px;"> </div>



          </div>

<!-- start module 10 -->
           <div class="module">

               <div class="main_col_head">
          <div class="main_col_title">Globally</div>
          <div class="main_co2l_title">reddit Community</div>
          </div>
                     <div class="pal" >
          
          <style>
          .list-more-container #loadmore184 {
          display: none;
          }
          .list-more-container #loadmore184:checked ~ ul  li:nth-child(1n +2) {
          max-height: 999px;opacity:1;
          display:block;
          border: none;
          transition: 0.1s ease-in;
          }
          .list-more-container #loadmore184:checked ~ ul li .loadmore-btn .loaded_content {
          display: block;
          }
          .list-more-container #loadmore184:checked ~ ul li .loadmore-btn .unloaded_content_content {
          display: none;
          }
          </style>
          <script type="text/javascript">



 
              $(function () {

                var executed = false;

              
                  $("#loadmore184").click(function () {

                       
                      if (!executed) {
                          executed = true;
                    
                          if ($(this).is(":checked")) {


                        var fact=184;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':184
                            },
                            success:function(data){
                              $('#184').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                      
                     }else{}
                   
                    

                  });
              });










          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore184"/>
            <ul style="" id="184" >
              
              <li style="" class="ul_first_li"><div class="ul_name">Africa</div><label class="loadmore-btn" for="loadmore184" ><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
              

              

            </ul>
            
          </div>
          <style>
          .list-more-container #loadmore185 {
          display: none;
          }
          .list-more-container #loadmore185:checked ~ ul  li:nth-child(1n +2) {
          max-height: 999px;opacity:1;
          display:block;
          border: none;
          transition: 0.1s ease-in;
          }
          .list-more-container #loadmore185:checked ~ ul li .loadmore-btn .loaded_content {
          display: block;
          }
          .list-more-container #loadmore185:checked ~ ul li .loadmore-btn .unloaded_content_content {
          display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {

                var executed = false;

           $("#loadmore185").click(function () {

                    if (!executed) {
                          executed = true;

                      if ($(this).is(":checked")) {

                        var fact=185;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':185
                            },
                            success:function(data){
                              $('#185').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });










          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore185"/>
            <ul style="" id="185" >
              
              <li style="" class="ul_first_li"><div class="ul_name">Europe</div><label class="loadmore-btn" for="loadmore185" ><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
              

              

            </ul>
            
          </div>
          <style>
          .list-more-container #loadmore186{
            display: none;
          }
          .list-more-container #loadmore186:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            transition: 0.1s ease-in;border:none;
          }
          .list-more-container #loadmore186:checked ~ ul li .loadmore-btn .loaded_content {
           display: block;
          }
          .list-more-container #loadmore186:checked ~ ul li .loadmore-btn .unloaded_content_content {
           display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore186").click(function () {
                      if ($(this).is(":checked")) {

                        var fact=186;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':186
                            },
                            success:function(data){
                              $('#186').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                  });
              });

          </script>


          <div class="list-more-container">
            <input type="checkbox" id="loadmore186"/>
            <ul style="" id="186">
              <li style="" class="ul_first_li"><div class="ul_name">North America</div><label class="loadmore-btn" for="loadmore186"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
              
             </ul>
            </div>
          <style>
          .list-more-container #loadmore187 {
            display: none;
          }
          .list-more-container #loadmore187:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore187:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore187:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore187").click(function () {
                      if ($(this).is(":checked")) {

                        var fact=187;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':187
                            },
                            success:function(data){
                              $('#187').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore187"/>
            <ul style="" id="187">
              <li style="" class="ul_first_li"><div class="ul_name">Asia</div><label class="loadmore-btn" for="loadmore187"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
                    <style>
          .list-more-container #loadmore188 {
            display: none;
          }
          .list-more-container #loadmore188:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore188:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore188:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore188").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=188;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':188
                            },
                            success:function(data){
                              $('#188').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore188"/>
            <ul style="" id="188">
              <li style="" class="ul_first_li"><div class="ul_name">South America</div><label class="loadmore-btn" for="loadmore188"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>

          <style>
          .list-more-container #loadmore189 {
            display: none;
          }
          .list-more-container #loadmore189:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore189:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore189:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore189").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=189;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':189
                            },
                            success:function(data){
                              $('#189').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore189"/>
            <ul style="" id="189">
              <li style="" class="ul_first_li"><div class="ul_name">Meta</div><label class="loadmore-btn" for="loadmore189"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>

                <style>
          .list-more-container #loadmore190 {
            display: none;
          }
          .list-more-container #loadmore190:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore190:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore190:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore190").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=190;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':190
                            },
                            success:function(data){
                              $('#190').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore190"/>
            <ul style="" id="190">
              <li style="" class="ul_first_li"><div class="ul_name">Apps</div><label class="loadmore-btn" for="loadmore190"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
                <style>
          .list-more-container #loadmore191 {
            display: none;
          }
          .list-more-container #loadmore191:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore191:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore191:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore191").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=191;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':191
                            },
                            success:function(data){
                              $('#191').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore191"/>
            <ul style="" id="191">
              <li style="" class="ul_first_li"><div class="ul_name">CircleJerks</div><label class="loadmore-btn" for="loadmore191"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
                          <style>
          .list-more-container #loadmore192 {
            display: none;
          }
          .list-more-container #loadmore192:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore192:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore192:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore192").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=192;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':192
                            },
                            success:function(data){
                              $('#192').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore192"/>
            <ul style="" id="192">
              <li style="" class="ul_first_li"><div class="ul_name">Subreddits</div><label class="loadmore-btn" for="loadmore192"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
           <style>
          .list-more-container #loadmore193 {
            display: none;
          }
          .list-more-container #loadmore193:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore193:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore193:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore193").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=193;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':193
                            },
                            success:function(data){
                              $('#193').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore193"/>
            <ul style="" id="193">
              <li style="" class="ul_first_li"><div class="ul_name">General</div><label class="loadmore-btn" for="loadmore193"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
         <style>
          .list-more-container #loadmore194 {
            display: none;
          }
          .list-more-container #loadmore194:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore194:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore194:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore194").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=194;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':194
                            },
                            success:function(data){
                              $('#194').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore194"/>
            <ul style="" id="194">
              <li style="" class="ul_first_li"><div class="ul_name">Nature</div><label class="loadmore-btn" for="loadmore194"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
                   <style>
          .list-more-container #loadmore195 {
            display: none;
          }
          .list-more-container #loadmore195:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore195:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore195:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore195").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=195;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':195
                            },
                            success:function(data){
                              $('#195').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore195"/>
            <ul style="" id="195">
              <li style="" class="ul_first_li"><div class="ul_name">Weather</div><label class="loadmore-btn" for="loadmore195"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
                   <style>
          .list-more-container #loadmore196 {
            display: none;
          }
          .list-more-container #loadmore196:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore196:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore196:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore196").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=196;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':196
                            },
                            success:function(data){
                              $('#196').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore196"/>
            <ul style="" id="196">
              <li style="" class="ul_first_li"><div class="ul_name">News</div><label class="loadmore-btn" for="loadmore196"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
                   <style>
          .list-more-container #loadmore197{
            display: none;
          }
          .list-more-container #loadmore197:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore197:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore197:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore197").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=197;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':197
                            },
                            success:function(data){
                              $('#197').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore197"/>
            <ul style="" id="197">
              <li style="" class="ul_first_li"><div class="ul_name">Politics</div><label class="loadmore-btn" for="loadmore197"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
         <style>
          .list-more-container #loadmore198{
            display: none;
          }
          .list-more-container #loadmore198:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore198:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore198:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore198").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=198;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':198
                            },
                            success:function(data){
                              $('#198').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore198"/>
            <ul style="" id="198">
              <li style="" class="ul_first_li"><div class="ul_name">General left politics</div><label class="loadmore-btn" for="loadmore198"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>



          </div>
           

        

           
                <div class="main_co2l_title_bottom" style="padding:5px;"> </div>



          </div>
<!-- end of module -->
<!-- start module 11 -->

           <div class="module">

               <div class="main_col_head">
          <div class="main_col_title">Others</div>
          <div class="main_co2l_title">reddit Community</div>
          </div>
                     <div class="pal" >
          <style>
               .ul_name{
              padding: 0;
              margin: 0;
              font-weight: 600;
            
              float: left;
            }

          .ul_first_li{
            box-shadow: 0 0px 3px rgba(0,0,0,0.30), 0 1px 1px rgba(0,0,0,0.22);
          }
            .follower{
              background: #d8d8d8;
              border-radius: 12px;
              padding: 2px 7px;
              color:#333;
            }
          .list-more-container #loadmore159 {
          display: none;
          }
          .list-more-container #loadmore159:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;
            opacity: 1;
            display:block;
            transition: 0.2s ease-in;
          }
          .list-more-container #loadmore159:checked ~ ul li .loadmore-btn .loaded_content {
          display: block;
          }
          .list-more-container #loadmore159:checked ~ ul li .loadmore-btn .unloaded_content_content {
          display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore159").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=159;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':159
                            },
                            success:function(data){
                              $('#159').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });
          </script>
          <div class="list-more-container" >
            <input type="checkbox" id="loadmore159"/>
            <ul style="" id="159" >
              <li style="" class="ul_first_li"><div class="ul_name">conspirancy</div><label class="loadmore-btn" for="loadmore159"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
            
          </ul>
            </div>

          <style>
          .list-more-container #loadmore160 {
          display: none;
          }
          .list-more-container #loadmore160:checked ~ ul  li:nth-child(1n +2) {
          max-height: 999px;opacity:1;
          display:block;
          border: none;
          transition: 0.1s ease-in;
          }
          .list-more-container #loadmore160:checked ~ ul li .loadmore-btn .loaded_content {
          display: block;
          }
          .list-more-container #loadmore160:checked ~ ul li .loadmore-btn .unloaded_content_content {
          display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore160").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=160;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':160
                            },
                            success:function(data){
                              $('#160').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });










          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore160"/>
            <ul style="" id="160" >
              
              <li style="" class="ul_first_li"><div class="ul_name">Cringe</div><label class="loadmore-btn" for="loadmore160" ><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
              

              

            </ul>
            
          </div>
          <style>
          .list-more-container #loadmore161{
            display: none;
          }
          .list-more-container #loadmore161:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            transition: 0.1s ease-in;border:none;
          }
          .list-more-container #loadmore161:checked ~ ul li .loadmore-btn .loaded_content {
           display: block;
          }
          .list-more-container #loadmore161:checked ~ ul li .loadmore-btn .unloaded_content_content {
           display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore161").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=161;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':161
                            },
                            success:function(data){
                              $('#161').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>


          <div class="list-more-container">
            <input type="checkbox" id="loadmore161"/>
            <ul style="" id="161">
              <li style="" class="ul_first_li"><div class="ul_name">Called Out</div><label class="loadmore-btn" for="loadmore161"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>
              
             </ul>
            </div>
          <style>
          .list-more-container #loadmore162 {
            display: none;
          }
          .list-more-container #loadmore162:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore162:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore162:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore162").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=162;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':162
                            },
                            success:function(data){
                              $('#162').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore162"/>
            <ul style="" id="162">
              <li style="" class="ul_first_li"><div class="ul_name">Neckbeard</div><label class="loadmore-btn" for="loadmore162"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
                    <style>
          .list-more-container #loadmore163 {
            display: none;
          }
          .list-more-container #loadmore163:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore163:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore163:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore163").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=163;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':163
                            },
                            success:function(data){
                              $('#163').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore163"/>
            <ul style="" id="163">
              <li style="" class="ul_first_li"><div class="ul_name">Cute</div><label class="loadmore-btn" for="loadmore163"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
                            <style>
          .list-more-container #loadmore164 {
            display: none;
          }
          .list-more-container #loadmore164:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore164:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore164:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore164").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=164;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':164
                            },
                            success:function(data){
                              $('#164').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore164"/>
            <ul style="" id="164">
              <li style="" class="ul_first_li"><div class="ul_name">Disgusting</div><label class="loadmore-btn" for="loadmore164"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
                            <style>
          .list-more-container #loadmore165 {
            display: none;
          }
          .list-more-container #loadmore165:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore165:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore165:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore165").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=165;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':165
                            },
                            success:function(data){
                              $('#165').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore165"/>
            <ul style="" id="165">
              <li style="" class="ul_first_li"><div class="ul_name">Angering</div><label class="loadmore-btn" for="loadmore165"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
                            <style>
          .list-more-container #loadmore166 {
            display: none;
          }
          .list-more-container #loadmore166:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore166:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore166:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore166").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=166;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':166
                            },
                            success:function(data){
                              $('#166').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore166"/>
            <ul style="" id="166">
              <li style="" class="ul_first_li"><div class="ul_name">Judgy</div><label class="loadmore-btn" for="loadmore166"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
                            <style>
          .list-more-container #loadmore167 {
            display: none;
          }
          .list-more-container #loadmore167:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore167:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore167:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore167").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=167;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':167
                            },
                            success:function(data){
                              $('#167').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore167"/>
            <ul style="" id="167">
              <li style="" class="ul_first_li"><div class="ul_name">Scary</div><label class="loadmore-btn" for="loadmore167"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
                            <style>
          .list-more-container #loadmore168 {
            display: none;
          }
          .list-more-container #loadmore168:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore168:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore168:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore168").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=168;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':168
                            },
                            success:function(data){
                              $('#168').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore168"/>
            <ul style="" id="168">
              <li style="" class="ul_first_li"><div class="ul_name">Imaginary</div><label class="loadmore-btn" for="loadmore168"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
                            <style>
          .list-more-container #loadmore169 {
            display: none;
          }
          .list-more-container #loadmore169:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore169:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore169:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore169").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=169;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':169
                            },
                            success:function(data){
                              $('#169').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore169"/>
            <ul style="" id="169">
              <li style="" class="ul_first_li"><div class="ul_name">Free Stuff</div><label class="loadmore-btn" for="loadmore169"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
                            <style>
          .list-more-container #loadmore170 {
            display: none;
          }
          .list-more-container #loadmore170:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore170:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore170:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore170").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=170;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':170
                            },
                            success:function(data){
                              $('#170').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore170"/>
            <ul style="" id="170">
              <li style="" class="ul_first_li"><div class="ul_name">Gender</div><label class="loadmore-btn" for="loadmore170"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
          <style>
          .list-more-container #loadmore171 {
            display: none;
          }
          .list-more-container #loadmore171:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore171:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore171:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore171").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=171;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':171
                            },
                            success:function(data){
                              $('#171').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore171"/>
            <ul style="" id="171">
              <li style="" class="ul_first_li"><div class="ul_name">Nostalgia/Time</div><label class="loadmore-btn" for="loadmore171"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
                                      <style>
          .list-more-container #loadmore172 {
            display: none;
          }
          .list-more-container #loadmore172:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore172:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore172:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore172").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=172;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':172
                            },
                            success:function(data){
                              $('#172').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore172"/>
            <ul style="" id="172">
              <li style="" class="ul_first_li"><div class="ul_name">Parodies</div><label class="loadmore-btn" for="loadmore172"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
          <style>
          .list-more-container #loadmore173 {
            display: none;
          }
          .list-more-container #loadmore173:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore173:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore173:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore173").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=173;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':173
                            },
                            success:function(data){
                              $('#173').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore173"/>
            <ul style="" id="173">
              <li style="" class="ul_first_li"><div class="ul_name">SFWPorn Network</div><label class="loadmore-btn" for="loadmore173"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
           <style>
          .list-more-container #loadmore174 {
            display: none;
          }
          .list-more-container #loadmore174:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore174:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore174:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore174").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=174;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':174
                            },
                            success:function(data){
                              $('#174').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore174"/>
            <ul style="" id="174">
              <li style="" class="ul_first_li"><div class="ul_name">Shitty</div><label class="loadmore-btn" for="loadmore174"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
          <style>
          .list-more-container #loadmore175 {
            display: none;
          }
          .list-more-container #loadmore175:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore175:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore175:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore175").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=175;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':175
                            },
                            success:function(data){
                              $('#175').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore175"/>
            <ul style="" id="175">
              <li style="" class="ul_first_li"><div class="ul_name">Unexpected</div><label class="loadmore-btn" for="loadmore175"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
          <style>
          .list-more-container #loadmore176 {
            display: none;
          }
          .list-more-container #loadmore176:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore176:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore176:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore176").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=176;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':176
                            },
                            success:function(data){
                              $('#176').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore176"/>
            <ul style="" id="176">
              <li style="" class="ul_first_li"><div class="ul_name">Visually Appealing</div><label class="loadmore-btn" for="loadmore176"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
          <style>
          .list-more-container #loadmore177 {
            display: none;
          }
          .list-more-container #loadmore177:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore177:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore177:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore177").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=177;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':177
                            },
                            success:function(data){
                              $('#177').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore177"/>
            <ul style="" id="177">
              <li style="" class="ul_first_li"><div class="ul_name">Hold My___</div><label class="loadmore-btn" for="loadmore177"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
           <style>
          .list-more-container #loadmore178 {
            display: none;
          }
          .list-more-container #loadmore178:checked ~ ul li:nth-child(1n +2) {
            max-height: 999px;opacity:1;
            display:block;
            border:none;
            transition: 0.1s ease-in;
          }
          .list-more-container #loadmore178:checked ~ ul li .loadmore-btn .loaded_content {
            display: block;
          }
          .list-more-container #loadmore178:checked ~ ul li .loadmore-btn .unloaded_content_content {
            display: none;
          }
          </style>
          <script type="text/javascript">
            $(function () {
               var executed = false;
                  $("#loadmore178").click(function () {
                       if (!executed) {
                          executed = true;
                      if ($(this).is(":checked")) {

                        var fact=178;
                       
                          $.ajax({
                            type:"GET",
                            url:"onclick_data.php",
                            data:{
                              'flag':fact,
                              'id':178
                            },
                            success:function(data){
                              $('#178').append(data);
                             
                            }

                          });
                          
                      } else {
                          
                      }
                    }else{}
                  });
              });

          </script>
          <div class="list-more-container">
            <input type="checkbox" id="loadmore178"/>
            <ul style="" id="178">
              <li style="" class="ul_first_li"><div class="ul_name">Weird Feelings</div><label class="loadmore-btn" for="loadmore178"><span class="unloaded_content_content">MORE</span><span class="loaded_content">LESS</span></label></li>   
            </ul>
            
          </div>
          

          </div>
           


           
                <div class="main_co2l_title_bottom" style="padding:5px;"> </div>



          </div>


<!-- end od module -->
<!-- start module 12 -->

<!-- end module -->



                              
                                  
                            </div>
                          
                            

                    </div>






















                  </div><div class="main-content-sidebar main-tab" style="display: none;">
                             
          <!-- <?php include("includes/sidebar.php"); ?> -->

                        </div>
                          



                        </div>

                                
                      </div>

                  <div id="main-content-Right" style="display: none;">
                      
                       
                  </div>
               </div>

          </div>






          <!-- end blog post -->

          <!-- start column edit -->

          <style>
          .pal::-webkit-scrollbar ,.pal-scroll::-webkit-scrollbar{
              width: 0.4em;
              background-color: transparent;
              /*-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);*/
              -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
              border-radius: 20px;
          }

          .pal::-webkit-scrollbar-thumb,.pal-scroll::-webkit-scrollbar-thumb {
              background-color: gray;
              border-radius: 20px;
          }
          .pal::-webkit-scrollbar-track,.pal-scroll::-webkit-scrollbar-track {
              background-color: transparent;
          }
          body::-webkit-scrollbar {
              width: 0.7em;
              background-color: transparent;
              -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
              border-radius: 20px;
          }

          body::-webkit-scrollbar-thumb {
              background-color: gray;
              border-radius: 20px;
          }
          body::-webkit-scrollbar-track {
              background-color: transparent;
          }
          .list-more-container ul {
            
            padding:0;
            margin:0;
          }
          .night-mode .list-more-container ul li{
          background: #16151d;
              color: #fffefe;
              border-top: 1px solid #fffcfc;


          }

          .list-more-container ul li {
          white-space: nowrap;
          /*box-shadow: inset 0px 10px 8px -20px #000000, inset 0px -10px 4px -10px #000;*/
              border-top: 1px solid #bfb4b4;
            width:98%;
          padding: 1%;    margin: 0px 0px;
           background:#fff;
            color: #333;
            float: left;
          /*border-radius:2px;*/
          overflow: hidden;
          text-overflow: ellipsis;
          }
          .night-mode .list-more-container ul li:hover{
            background: #333;
          }
          .list-more-container ul li:hover{
          background:#efefef;
          }
          .night-mode .web_link{
            color:white;

          }

          .web_link{
            cursor:pointer;
            color:#333;
          text-decoration: none;
          }
          .web_link:hover{
            text-decoration: underline;
          }
          .web_icon{
          border-radius: 50%;
          background-color: #fff;
          width:25px;
          height:25px;
          margin:-10px 10px 0px 10px;
          }
          .main_col_title{
          text-align: center;
          font-size: 32px; 
          color:white;
             width: 100%;
              overflow: hidden;
              text-overflow: ellipsis

          }
          .main_co2l_title{

          font-size: 13px; 
           color:#e6e6e6;
          }
          .main_co2l_title_bottom{
            background-color: inherit;
              border-bottom-left-radius: 5px;
              border-bottom-right-radius: 5px;
          }
          .pal,.pal-scroll{
          background-color: white;
          overflow: auto; 
          height:344px;
          }
          .night-mode .pal,.night-mode .pal-scroll{
            background: #1b1a23;
          }
          .main_col{
          margin: 6px;
          border-radius:5px;
          box-shadow: 0 2px 8px rgba(0,0,0,0.30), 0 2px 2px rgba(0,0,0,0.22);
          }
          .night-mode .main_col_head{
            border-bottom: 1px solid lightgrey;
          }
          .main_col_head{
          text-align: center;
           background-color: inherit;
          border-top-left-radius: 8px;
          border-top-right-radius: 8px;
          border-bottom:1px solid lightgrey;

          }
          .list-more-container ul li:nth-child(1n + 2) {
            max-height: 0;
            opacity: 0;
            display:none;
           
          }
          .list-more-container ul li:nth-child(1n + 2) {
            max-height: 0;
            opacity: 0;
            display:none;
           
          }
          .list-more-container .loadmore-btn{
            float:right;
            padding-right:5px;
           text-align:center;
              height: 35px;
              cursor: pointer;

          }
          .list-more-container .loadmore-btn:hover {
            
          }
          .list-more-container .loadmore-btn .loaded_content {
            display: none;
          }
          </style>
          <!-- end column content edit -->

          <style type="text/css">
            
          body {
            font-family: sans-serif;
            font-size: .9rem;
          }
          .main-content-result h1 {
            text-align: center;
            margin:5px 0;
          }

          /* 1 column: 320px */
          .autowide {
            margin: 0 auto;
            width: 100%;
            display: inline-block;
          }
          .autowide img {
            float: left;
            margin: 0 .75rem 0 0;
          }
          .autowide .module {
           /* background-color: lightgrey;*/
          background: black;
          border:1px solid lightgrey;
            border-radius:0.50rem;
            margin-bottom: 1rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.30), 0 2px 2px rgba(0,0,0,0.22);
          }
          .autowide .module p {
            padding: .25rem .75rem;
          }

          /* 2 columns: 600px */
          @media only screen and (min-width: 600px) {
            .autowide .module {
              float: left;
              margin-right: 2.564102564102564%;
              width: 48.317948717948715%;
              
            }
            .autowide .module:nth-child(2n+0) {
              margin-right: 0;
            }
          }

          /* 3 columns: 768px */
          @media only screen and (min-width: 768px) {
            .autowide .module {
              width: 31.323931623931625%;
              
            }
            .autowide .module:nth-child(2n+0) {
              margin-right: 2.564102564102564%;
            }
            .autowide .module:nth-child(3n+0) {
              margin-right: 0;
            }
          }

          /* 4 columns: 992px and up */
          @media only screen and (min-width: 992px) {
            .autowide .module {
              width: 22.776923076923077%;
              
            }
            .autowide .module:nth-child(3n+0) {
              margin-right: 2.564102564102564%;
            }
            .autowide .module:nth-child(4n+0) {
              margin-right: 0;
            }
          }

          </style>


          <!-- start footer-->

          <?php include("includes/footer.php"); ?>
          <!-- end footer-->
          </body>
          </html>
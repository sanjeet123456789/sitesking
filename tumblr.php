

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

                           <h1>List of Tumblr post</h1>
          <div class="autowide">


 <!-- module 1 start -->
<div class="module">
 
<div class="main_col_head">
<div class="main_col_title">Top tumblr post</div>
<div class="main_co2l_title"></div>
</div>
<div class="pal-scroll" >
<div class="list-more-container" >
<input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

<style type="text/css">
  .class_list li span{
    background: #d8d8d8;
    border-radius: 12px;
    padding: 2px 7px;
    color: #333;
  }
  .blog-post li,.class_list li{
        white-space: nowrap;
    /* box-shadow: inset 0px 10px 8px -20px #000000, inset 0px -10px 4px -10px #000; */
    border-top: 1px solid #bfb4b4;
    width: 98%;
    padding: 1%;
    margin: 0px 0px;
    background: #fff;
    color: #433;
    float: left;
    /* border-radius: 2px; */
    text-align: left;
    list-style: none;
    overflow: hidden;
    text-overflow: ellipsis;

  }

  .roller{
    display: none;
  }
  .night-mode .class_list li{
    background: #1b1a23;
    color:white;
  }
  .class_list li{
    background:white;
    color:#433;
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
//       flag+=15;
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
    url:"includes/handlers/ajax/get_data_tumblr_top.php",
    data:{
      'offset':0,
      'limit':15

    },
    success:function(data){
      $('#top-list-quora').append(data);
      flag+=15;
    }

  });

  $(".pal-scroll").scroll(function(){
    if(this.offsetHeight + this.scrollTop == this.scrollHeight){
      // alert("at the bottom");
          $.ajax({
        type:"GET",
        url:"includes/handlers/ajax/get_data_tumblr_top.php",
        data:{
          'offset':flag,
          'limit':5
        },
        success:function(data){
          $('#top-list-quora').append(data);
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
<div class="class_list top-list-quora" id="top-list-quora">
  

</div>









</div>
</div>
<div class="main_co2l_title_bottom" style="padding:5px;"> </div>
 
</div>


<!-- module 2 start -->
                  <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Top in India</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-440" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':440

                      },
                      success:function(data){
                        $('#440').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-440").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':440
                          },
                          success:function(data){
                            $('#440').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-440" id="440">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
   </div>

<!-- module 3 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Art & Deign</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-400" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':400

                      },
                      success:function(data){
                        $('#400').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-400").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':400
                          },
                          success:function(data){
                            $('#400').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-400" id="400">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start  module 4 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Auto & Vehicle</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-401" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':401

                      },
                      success:function(data){
                        $('#401').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-401").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':401
                          },
                          success:function(data){
                            $('#401').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-401" id="401">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start module 5 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Beauty</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-402" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':402

                      },
                      success:function(data){
                        $('#402').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-402").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':402
                          },
                          success:function(data){
                            $('#402').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-402" id="402">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>

<!-- start module 6 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Book& Reference</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-403" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':403

                      },
                      success:function(data){
                        $('#403').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-403").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':403
                          },
                          success:function(data){
                            $('#403').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-403" id="403">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>



<!-- module 7 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Business</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-404" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':404

                      },
                      success:function(data){
                        $('#404').append(data);
                        flag+=15;
 404                     }

                    });

                    $(".pal-scroll-404").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':404
                          },
                          success:function(data){
                            $('#404').append(data);

                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-404" id="404">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>

<!-- start module 8 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Commics</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-405" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':405

                      },
                      success:function(data){
                        $('#405').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-405").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':405
                          },
                          success:function(data){
                            $('#405').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-405" id="405">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>




 <!-- start module 9 -->
           <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Communication</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-406" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':406

                      },
                      success:function(data){
                        $('#406').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-406").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':406
                          },
                          success:function(data){
                            $('#406').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-406" id="406">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>




<!-- start module 10 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Dating</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-407" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':407

                      },
                      success:function(data){
                        $('#407').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-407").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':407
                          },
                          success:function(data){
                            $('#407').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-407" id="407">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start module 11 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Education</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-408" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':408

                      },
                      success:function(data){
                        $('#408').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-401").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':408
                          },
                          success:function(data){
                            $('#408').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-408" id="408">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>



<!-- start module 12 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Entertainment</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-409" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':409

                      },
                      success:function(data){
                        $('#409').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-409").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':409
                          },
                          success:function(data){
                            $('#409').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-409" id="409">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>



<!-- start module 13 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Events</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-410" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':410

                      },
                      success:function(data){
                        $('#410').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-410").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':410
                          },
                          success:function(data){
                            $('#410').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-410" id="410">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start module 14 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">family</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-411" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':411

                      },
                      success:function(data){
                        $('#411').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-411").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':411
                          },
                          success:function(data){
                            $('#411').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-411" id="411">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start module 15 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Finance</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-412" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':412

                      },
                      success:function(data){
                        $('#412').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-412").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':412
                          },
                          success:function(data){
                            $('#412').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-412" id="412">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>



<!-- start module 16 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Google cast</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-414" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':414

                      },
                      success:function(data){
                        $('#414').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-414").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':414
                          },
                          success:function(data){
                            $('#414').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-414" id="414">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start module 17 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Health & Fitness</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-415" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':415

                      },
                      success:function(data){
                        $('#415').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-415").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':415
                          },
                          success:function(data){
                            $('#415').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-415" id="415">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>





<!-- start module 18 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">House & Home</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-416" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':416

                      },
                      success:function(data){
                        $('#416').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-416").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':416
                          },
                          success:function(data){
                            $('#416').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-416" id="416">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>
<!-- start module 19 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Libraries & Demo</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-417" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':417

                      },
                      success:function(data){
                        $('#417').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-417").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':417
                          },
                          success:function(data){
                            $('#417').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-417" id="417">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>



<!-- start module 20 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Lifestyle</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-418" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':418

                      },
                      success:function(data){
                        $('#418').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-418").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':418
                          },
                          success:function(data){
                            $('#418').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-418" id="418">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>

<!-- start module 21 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Maps&Navigation</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-419" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':419

                      },
                      success:function(data){
                        $('#419').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-419").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':419
                          },
                          success:function(data){
                            $('#419').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-419" id="419">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>

<!-- start module 22 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Medical</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-420" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':420

                      },
                      success:function(data){
                        $('#420').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-420").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':420
                          },
                          success:function(data){
                            $('#420').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-420" id="420">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>

<!-- start module 23 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Music & Audio</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-421" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':421

                      },
                      success:function(data){
                        $('#421').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-421").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':421
                          },
                          success:function(data){
                            $('#421').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-421" id="421">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>

<!-- start module 24 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">News & Magazines</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-422" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':422

                      },
                      success:function(data){
                        $('#422').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-422").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':422
                          },
                          success:function(data){
                            $('#422').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-422" id="422">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>

<!-- start module 25 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Parenting</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-423" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':423

                      },
                      success:function(data){
                        $('#423').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-423").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':423
                          },
                          success:function(data){
                            $('#423').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-423" id="423">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>

<!-- start module 26 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Personalisation</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-424" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':424

                      },
                      success:function(data){
                        $('#424').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-424").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':424
                          },
                          success:function(data){
                            $('#424').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-424" id="424">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start module 27 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Photograph</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-425" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':425

                      },
                      success:function(data){
                        $('#425').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-425").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':425
                          },
                          success:function(data){
                            $('#425').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-425" id="425">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start module 28 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Productivity</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-426" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':426

                      },
                      success:function(data){
                        $('#426').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-426").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':426
                          },
                          success:function(data){
                            $('#426').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-426" id="426">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>

<!-- start module 29 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Shopping</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-427" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':427

                      },
                      success:function(data){
                        $('#427').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-427").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':427
                          },
                          success:function(data){
                            $('#427').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-427" id="427">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>

<!-- start module 30 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">social</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-428" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':428

                      },
                      success:function(data){
                        $('#428').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-428").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':428
                          },
                          success:function(data){
                            $('#428').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-428" id="428">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>

<!-- start module 31 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">sports</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-429" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':429

                      },
                      success:function(data){
                        $('#429').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-429").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':429
                          },
                          success:function(data){
                            $('#429').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-429" id="429">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start module 32 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Tools</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-430" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':430

                      },
                      success:function(data){
                        $('#430').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-430").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':430
                          },
                          success:function(data){
                            $('#430').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-430" id="430">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>
    <!-- start module 33 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Travel</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-431" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':431

                      },
                      success:function(data){
                        $('#431').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-431").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':431
                          },
                          success:function(data){
                            $('#431').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-431" id="431">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>

  <!-- start module 34 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">editor</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-432" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':432

                      },
                      success:function(data){
                        $('#432').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-432").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':432
                          },
                          success:function(data){
                            $('#432').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-432" id="432">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>
    <!-- start module 35 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Wear os by google</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-433" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':433

                      },
                      success:function(data){
                        $('#433').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-433").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':433
                          },
                          success:function(data){
                            $('#433').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-433" id="433">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>
    <!-- start module 36 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Weather</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-434" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':434

                      },
                      success:function(data){
                        $('#434').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-434").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':434
                          },
                          success:function(data){
                            $('#434').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-434" id="434">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


    <!-- start module 37-->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">creative</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-435" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':435

                      },
                      success:function(data){
                        $('#435').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-435").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':435
                          },
                          success:function(data){
                            $('#435').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-435" id="435">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>
  <!-- start module 38 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">learning</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-436" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':436

                      },
                      success:function(data){
                        $('#436').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-436").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':436
                          },
                          success:function(data){
                            $('#436').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-436" id="436">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>





<!-- start module 39 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">video</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-437" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':437

                      },
                      success:function(data){
                        $('#437').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-437").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':437
                          },
                          success:function(data){
                            $('#437').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-437" id="437">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>

  <!-- start module 40 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Food & Drink</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-438" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':438

                      },
                      success:function(data){
                        $('#438').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-438").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':438
                          },
                          success:function(data){
                            $('#438').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-438" id="438">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>
  <!-- start module 41 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Games</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-439" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':439

                      },
                      success:function(data){
                        $('#439').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-439").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':439
                          },
                          success:function(data){
                            $('#439').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-439" id="439">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>

<!-- start module 42 -->
                        <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">funny</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-441" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':441

                      },
                      success:function(data){
                        $('#441').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-441").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':441
                          },
                          success:function(data){
                            $('#441').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-441" id="441">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>
<!-- start module 43 -->
                        <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">comedy</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-442" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':442

                      },
                      success:function(data){
                        $('#442').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-442").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':442
                          },
                          success:function(data){
                            $('#442').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-442" id="442">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>
<!-- start module 43-->
                        <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">blog</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-443" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':743

                      },
                      success:function(data){
                        $('#743').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-743").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':743
                          },
                          success:function(data){
                            $('#743').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-743" id="743">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>
  <!-- start module 44 -->
                        <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">vlog</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-444" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_tumblr.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':444

                      },
                      success:function(data){
                        $('#444').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-444").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_tumblr.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':444
                          },
                          success:function(data){
                            $('#444').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-444" id="444">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


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
            color: #433;
            float: left;
          /*border-radius:2px;*/
          overflow: hidden;
          text-overflow: ellipsis;
          }
          .night-mode .list-more-container ul li:hover{
            background: #433;
          }
          .list-more-container ul li:hover{
          background:#efefef;
          }
          .night-mode .web_link{
            color:white;

          }

          .web_link{
            cursor:pointer;
            color:#433;
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
          height:40px;
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
          height:444px;
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


            </div>
          <!-- start footer-->

          <?php include("includes/footer.php"); ?>
          <!-- end footer-->
          </body>
          </html>
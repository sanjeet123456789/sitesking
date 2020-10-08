

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


                           <h1>List of facebook Page</h1>
          <div class="autowide">


 <!-- module 1 start -->
<div class="module">
 
<div class="main_col_head">
<div class="main_col_title">Top facebook Page</div>
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
    color: #333;
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
    color:#333;
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
    url:"includes/handlers/ajax/get_data_facebook_top.php",
    data:{
      'offset':0,
      'limit':15

    },
    success:function(data){
      $('#top-list-facebook').append(data);
      flag+=15;
    }

  });

  $(".pal-scroll").scroll(function(){
    if(this.offsetHeight + this.scrollTop == this.scrollHeight){
      // alert("at the bottom");
          $.ajax({
        type:"GET",
        url:"includes/handlers/ajax/get_data_facebook_top.php",
        data:{
          'offset':flag,
          'limit':5
        },
        success:function(data){
          $('#top-list-facebook').append(data);
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
<div class="class_list top-list-facebook" id="top-list-facebook">
  

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
                  <div class="pal-scroll pal-scroll-340" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':340

                      },
                      success:function(data){
                        $('#340').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-340").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':340
                          },
                          success:function(data){
                            $('#340').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-340" id="340">
                    

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
                  <div class="pal-scroll pal-scroll-300" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':300

                      },
                      success:function(data){
                        $('#300').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-300").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':300
                          },
                          success:function(data){
                            $('#300').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-300" id="300">
                    

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
                  <div class="pal-scroll pal-scroll-301" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':301

                      },
                      success:function(data){
                        $('#301').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-201").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':301
                          },
                          success:function(data){
                            $('#301').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-301" id="301">
                    

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
                  <div class="pal-scroll pal-scroll-302" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':302

                      },
                      success:function(data){
                        $('#302').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-302").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':302
                          },
                          success:function(data){
                            $('#302').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-302" id="302">
                    

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
                  <div class="pal-scroll pal-scroll-303" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':303

                      },
                      success:function(data){
                        $('#303').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-303").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':303
                          },
                          success:function(data){
                            $('#303').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-303" id="303">
                    

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
                  <div class="pal-scroll pal-scroll-304" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':304

                      },
                      success:function(data){
                        $('#304').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-304").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':304
                          },
                          success:function(data){
                            $('#304').append(data);

                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-304" id="304">
                    

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
                  <div class="pal-scroll pal-scroll-305" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':305

                      },
                      success:function(data){
                        $('#305').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-305").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':305
                          },
                          success:function(data){
                            $('#305').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-305" id="305">
                    

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
                  <div class="pal-scroll pal-scroll-306" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':306

                      },
                      success:function(data){
                        $('#306').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-306").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':306
                          },
                          success:function(data){
                            $('#306').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-306" id="306">
                    

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
                  <div class="pal-scroll pal-scroll-307" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':307

                      },
                      success:function(data){
                        $('#307').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-307").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':307
                          },
                          success:function(data){
                            $('#307').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-307" id="307">
                    

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
                  <div class="pal-scroll pal-scroll-308" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':308

                      },
                      success:function(data){
                        $('#308').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-201").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':308
                          },
                          success:function(data){
                            $('#308').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-308" id="308">
                    

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
                  <div class="pal-scroll pal-scroll-309" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':309

                      },
                      success:function(data){
                        $('#309').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-309").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':309
                          },
                          success:function(data){
                            $('#309').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-309" id="309">
                    

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
                  <div class="pal-scroll pal-scroll-310" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':310

                      },
                      success:function(data){
                        $('#310').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-310").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':310
                          },
                          success:function(data){
                            $('#310').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-310" id="310">
                    

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
                  <div class="pal-scroll pal-scroll-311" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':311

                      },
                      success:function(data){
                        $('#311').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-311").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':311
                          },
                          success:function(data){
                            $('#311').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-311" id="311">
                    

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
                  <div class="pal-scroll pal-scroll-312" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':312

                      },
                      success:function(data){
                        $('#312').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-312").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':312
                          },
                          success:function(data){
                            $('#312').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-312" id="312">
                    

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
                  <div class="pal-scroll pal-scroll-314" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':314

                      },
                      success:function(data){
                        $('#314').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-314").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':314
                          },
                          success:function(data){
                            $('#314').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-314" id="314">
                    

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
                  <div class="pal-scroll pal-scroll-315" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':315

                      },
                      success:function(data){
                        $('#315').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-315").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':315
                          },
                          success:function(data){
                            $('#315').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-315" id="315">
                    

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
                  <div class="pal-scroll pal-scroll-316" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':316

                      },
                      success:function(data){
                        $('#316').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-316").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':316
                          },
                          success:function(data){
                            $('#316').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-316" id="316">
                    

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
                  <div class="pal-scroll pal-scroll-317" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':317

                      },
                      success:function(data){
                        $('#317').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-317").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':317
                          },
                          success:function(data){
                            $('#317').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-317" id="317">
                    

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
                  <div class="pal-scroll pal-scroll-318" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':318

                      },
                      success:function(data){
                        $('#318').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-318").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':318
                          },
                          success:function(data){
                            $('#318').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-318" id="318">
                    

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
                  <div class="pal-scroll pal-scroll-319" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':319

                      },
                      success:function(data){
                        $('#319').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-319").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':319
                          },
                          success:function(data){
                            $('#319').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-319" id="319">
                    

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
                  <div class="pal-scroll pal-scroll-320" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':320

                      },
                      success:function(data){
                        $('#320').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-320").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':320
                          },
                          success:function(data){
                            $('#320').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-320" id="320">
                    

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
                  <div class="pal-scroll pal-scroll-321" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':321

                      },
                      success:function(data){
                        $('#321').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-321").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':321
                          },
                          success:function(data){
                            $('#321').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-321" id="321">
                    

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
                  <div class="pal-scroll pal-scroll-322" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':322

                      },
                      success:function(data){
                        $('#322').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-322").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':322
                          },
                          success:function(data){
                            $('#322').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-322" id="322">
                    

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
                  <div class="pal-scroll pal-scroll-323" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':323

                      },
                      success:function(data){
                        $('#323').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-323").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':323
                          },
                          success:function(data){
                            $('#323').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-323" id="323">
                    

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
                  <div class="pal-scroll pal-scroll-324" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':324

                      },
                      success:function(data){
                        $('#324').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-324").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':324
                          },
                          success:function(data){
                            $('#324').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-324" id="324">
                    

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
                  <div class="pal-scroll pal-scroll-325" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':325

                      },
                      success:function(data){
                        $('#325').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-325").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':325
                          },
                          success:function(data){
                            $('#325').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-325" id="325">
                    

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
                  <div class="pal-scroll pal-scroll-326" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':326

                      },
                      success:function(data){
                        $('#326').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-326").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':326
                          },
                          success:function(data){
                            $('#326').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-326" id="326">
                    

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
                  <div class="pal-scroll pal-scroll-327" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':327

                      },
                      success:function(data){
                        $('#327').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-327").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':327
                          },
                          success:function(data){
                            $('#327').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-327" id="327">
                    

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
                  <div class="pal-scroll pal-scroll-328" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':328

                      },
                      success:function(data){
                        $('#328').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-328").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':328
                          },
                          success:function(data){
                            $('#328').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-328" id="328">
                    

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
                  <div class="pal-scroll pal-scroll-329" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':329

                      },
                      success:function(data){
                        $('#329').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-329").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':329
                          },
                          success:function(data){
                            $('#329').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-329" id="329">
                    

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
                  <div class="pal-scroll pal-scroll-330" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':330

                      },
                      success:function(data){
                        $('#330').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-330").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':330
                          },
                          success:function(data){
                            $('#330').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-330" id="330">
                    

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
                  <div class="pal-scroll pal-scroll-331" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':331

                      },
                      success:function(data){
                        $('#331').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-331").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':331
                          },
                          success:function(data){
                            $('#331').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-331" id="331">
                    

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
                  <div class="pal-scroll pal-scroll-332" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':332

                      },
                      success:function(data){
                        $('#332').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-332").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':332
                          },
                          success:function(data){
                            $('#332').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-332" id="332">
                    

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
                  <div class="pal-scroll pal-scroll-333" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':333

                      },
                      success:function(data){
                        $('#333').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-333").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':333
                          },
                          success:function(data){
                            $('#333').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-333" id="333">
                    

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
                  <div class="pal-scroll pal-scroll-334" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':334

                      },
                      success:function(data){
                        $('#334').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-334").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':334
                          },
                          success:function(data){
                            $('#334').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-334" id="334">
                    

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
                  <div class="pal-scroll pal-scroll-335" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':335

                      },
                      success:function(data){
                        $('#335').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-335").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':335
                          },
                          success:function(data){
                            $('#335').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-335" id="335">
                    

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
                  <div class="pal-scroll pal-scroll-336" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':336

                      },
                      success:function(data){
                        $('#336').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-336").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':336
                          },
                          success:function(data){
                            $('#336').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-336" id="336">
                    

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
                  <div class="pal-scroll pal-scroll-337" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':337

                      },
                      success:function(data){
                        $('#337').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-337").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':337
                          },
                          success:function(data){
                            $('#337').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-337" id="337">
                    

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
                  <div class="pal-scroll pal-scroll-338" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':338

                      },
                      success:function(data){
                        $('#338').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-338").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':338
                          },
                          success:function(data){
                            $('#338').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-338" id="338">
                    

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
                  <div class="pal-scroll pal-scroll-339" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':339

                      },
                      success:function(data){
                        $('#339').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-339").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':339
                          },
                          success:function(data){
                            $('#339').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-339" id="339">
                    

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
                  <div class="pal-scroll pal-scroll-341" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':341

                      },
                      success:function(data){
                        $('#341').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-341").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':341
                          },
                          success:function(data){
                            $('#341').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-341" id="341">
                    

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
                  <div class="pal-scroll pal-scroll-342" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':342

                      },
                      success:function(data){
                        $('#342').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-342").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':342
                          },
                          success:function(data){
                            $('#342').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-342" id="342">
                    

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
                  <div class="pal-scroll pal-scroll-343" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
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
                          url:"includes/handlers/ajax/get_data_facebook.php",
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
                  <div class="pal-scroll pal-scroll-344" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_facebook.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':344

                      },
                      success:function(data){
                        $('#344').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-344").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_facebook.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':344
                          },
                          success:function(data){
                            $('#344').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-344" id="344">
                    

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

            </div>
          <!-- start footer-->

          <?php include("includes/footer.php"); ?>
          <!-- end footer-->
          </body>
          </html>


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

                           <h1>List of Quora Community</h1>
          <div class="autowide">


 <!-- module 1 start -->
<div class="module">
 
<div class="main_col_head">
<div class="main_col_title">Top Quora Community</div>
<div class="main_co2l_title">Quora community</div>
</div>
<div class="pal-scroll pal-scroll-top" >
<div class="list-more-container" >
<input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

<style type="text/css">
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
    url:"includes/handlers/ajax/get_data_quora_top.php",
    data:{
      'offset':0,
      'limit':15

    },
    success:function(data){
      $('#top-list-quora').append(data);
      flag+=15;
    }

  });

  $(".pal-scroll-top").scroll(function(){
    if(this.offsetHeight + this.scrollTop == this.scrollHeight){
      // alert("at the bottom");
          $.ajax({
        type:"GET",
        url:"includes/handlers/ajax/get_data_quora_top.php",
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
                  <div class="main_col_title">Health and Medicine</div>
                  <div class="main_co2l_title">Quora community</div>
                  </div>
                  <div class="pal-scroll pal-scroll-200" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_quora.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':200

                      },
                      success:function(data){
                        $('#200').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-200").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_quora.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':200
                          },
                          success:function(data){
                            $('#200').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-200" id="200">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
   </div>

<!-- module 3 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Startups</div>
                  <div class="main_co2l_title">Quora community</div>
                  </div>
                  <div class="pal-scroll pal-scroll-201" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_quora.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':201

                      },
                      success:function(data){
                        $('#201').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-201").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_quora.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':201
                          },
                          success:function(data){
                            $('#201').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-201" id="201">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start  module 4 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">News,Entertainment</div>
                  <div class="main_co2l_title">Quora community</div>
                  </div>
                  <div class="pal-scroll pal-scroll-202" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_quora.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':202

                      },
                      success:function(data){
                        $('#202').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-202").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_quora.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':202
                          },
                          success:function(data){
                            $('#202').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-202" id="202">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start module 5 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Music</div>
                  <div class="main_co2l_title">Quora community</div>
                  </div>
                  <div class="pal-scroll pal-scroll-203" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_quora.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':203

                      },
                      success:function(data){
                        $('#203').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-203").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_quora.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':203
                          },
                          success:function(data){
                            $('#203').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-203" id="203">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>

<!-- start module 6 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">History,philosophy and humanities</div>
                  <div class="main_co2l_title">Quora community</div>
                  </div>
                  <div class="pal-scroll pal-scroll-204" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_quora.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':204

                      },
                      success:function(data){
                        $('#204').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-204").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_quora.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':204
                          },
                          success:function(data){
                            $('#204').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-204" id="204">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>



<!-- module 7 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Business,work and Career</div>
                  <div class="main_co2l_title">Quora community</div>
                  </div>
                  <div class="pal-scroll pal-scroll-205" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_quora.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':205

                      },
                      success:function(data){
                        $('#205').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-205").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_quora.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':205
                          },
                          success:function(data){
                            $('#205').append(data);

                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-205" id="205">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>

<!-- start module 8 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Life,Relationship and Self</div>
                  <div class="main_co2l_title">Quora community</div>
                  </div>
                  <div class="pal-scroll pal-scroll-206" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_quora.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':206

                      },
                      success:function(data){
                        $('#206').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-206").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_quora.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':206
                          },
                          success:function(data){
                            $('#206').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-206" id="206">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>




 <!-- start module 9 -->
           <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Literature ,language and Communication</div>
                  <div class="main_co2l_title">Quora community</div>
                  </div>
                  <div class="pal-scroll pal-scroll-207" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_quora.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':207

                      },
                      success:function(data){
                        $('#207').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-207").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_quora.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':207
                          },
                          success:function(data){
                            $('#207').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-207" id="207">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>




<!-- start module 10 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Art,Design and Style</div>
                  <div class="main_co2l_title">Quora community</div>
                  </div>
                  <div class="pal-scroll pal-scroll-208" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_quora.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':208

                      },
                      success:function(data){
                        $('#208').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-208").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_quora.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':208
                          },
                          success:function(data){
                            $('#208').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-208" id="208">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start module 11 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Education,School and Learning</div>
                  <div class="main_co2l_title">Quora community</div>
                  </div>
                  <div class="pal-scroll pal-scroll-209" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_quora.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':209

                      },
                      success:function(data){
                        $('#209').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-207").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_quora.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':209
                          },
                          success:function(data){
                            $('#209').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-209" id="209">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>



<!-- start module 12 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Recreation,Sports,Travel and Activities</div>
                  <div class="main_co2l_title">Quora community</div>
                  </div>
                  <div class="pal-scroll pal-scroll-210" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_quora.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':210

                      },
                      success:function(data){
                        $('#210').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-210").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_quora.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':210
                          },
                          success:function(data){
                            $('#210').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-210" id="210">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>



<!-- start module 13 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Politics,Law,Government and judiciary</div>
                  <div class="main_co2l_title">Quora community</div>
                  </div>
                  <div class="pal-scroll pal-scroll-211" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_quora.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':211

                      },
                      success:function(data){
                        $('#211').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-211").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_quora.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':211
                          },
                          success:function(data){
                            $('#211').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-211" id="211">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start module 14 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Food,Cuisines and Cooking</div>
                  <div class="main_co2l_title">Quora community</div>
                  </div>
                  <div class="pal-scroll pal-scroll-212" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_quora.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':212

                      },
                      success:function(data){
                        $('#212').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-212").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_quora.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':212
                          },
                          success:function(data){
                            $('#212').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-212" id="212">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start module 15 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Science,Technology,Engineering and Mathematics</div>
                  <div class="main_co2l_title">Quora community</div>
                  </div>
                  <div class="pal-scroll pal-scroll-213" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_quora.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':213

                      },
                      success:function(data){
                        $('#213').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-213").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_quora.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':213
                          },
                          success:function(data){
                            $('#213').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-213" id="213">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>



<!-- start module 16 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Social Media</div>
                  <div class="main_co2l_title">Quora community</div>
                  </div>
                  <div class="pal-scroll pal-scroll-214" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_quora.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':214

                      },
                      success:function(data){
                        $('#214').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-214").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_quora.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':214
                          },
                          success:function(data){
                            $('#214').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-214" id="214">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start module 17 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">companies</div>
                  <div class="main_co2l_title">Quora community</div>
                  </div>
                  <div class="pal-scroll pal-scroll-215" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_quora.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':215

                      },
                      success:function(data){
                        $('#215').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-215").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_quora.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':215
                          },
                          success:function(data){
                            $('#215').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-215" id="215">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>





<!-- start module 18 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">IT / language</div>
                  <div class="main_co2l_title">Quora community</div>
                  </div>
                  <div class="pal-scroll pal-scroll-216" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_quora.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':216

                      },
                      success:function(data){
                        $('#216').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-216").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_quora.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':216
                          },
                          success:function(data){
                            $('#216').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-216" id="216">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>
<!-- start module 19 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">funny</div>
                  <div class="main_co2l_title">Quora community</div>
                  </div>
                  <div class="pal-scroll pal-scroll-217" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_quora.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':217

                      },
                      success:function(data){
                        $('#217').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-217").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_quora.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':217
                          },
                          success:function(data){
                            $('#217').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-217" id="217">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>



<!-- start module 20 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Investment / Money / bank</div>
                  <div class="main_co2l_title">quora community</div>
                  </div>
                  <div class="pal-scroll pal-scroll-218" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_quora.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':218

                      },
                      success:function(data){
                        $('#218').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-218").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_quora.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':218
                          },
                          success:function(data){
                            $('#218').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-218" id="218">
                    

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
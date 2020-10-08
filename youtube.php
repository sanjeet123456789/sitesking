

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

                           <h1>List of youtube Channel</h1>
          <div class="autowide">


 <!-- module 1 start -->
<div class="module">
 
<div class="main_col_head">
<div class="main_col_title">Top youtube</div>
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
    url:"includes/handlers/ajax/get_data_youtube_top.php",
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
        url:"includes/handlers/ajax/get_data_youtube_top.php",
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
                  <div class="pal-scroll pal-scroll-840" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_youtube.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':840

                      },
                      success:function(data){
                        $('#840').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-840").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_youtube.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':840
                          },
                          success:function(data){
                            $('#840').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-840" id="840">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
   </div>

<!-- module 3 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Auto & Vehicles</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-800" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_youtube.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':800

                      },
                      success:function(data){
                        $('#800').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-800").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_youtube.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':800
                          },
                          success:function(data){
                            $('#800').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-800" id="800">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start  module 4 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Beauty & Fashion</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-801" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_youtube.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':801

                      },
                      success:function(data){
                        $('#801').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-201").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_youtube.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':801
                          },
                          success:function(data){
                            $('#801').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-801" id="801">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start module 5 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Comedy</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-802" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_youtube.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':802

                      },
                      success:function(data){
                        $('#802').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-802").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_youtube.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':802
                          },
                          success:function(data){
                            $('#802').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-802" id="802">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>

<!-- start module 6 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Education</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-803" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_youtube.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':803

                      },
                      success:function(data){
                        $('#803').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-803").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_youtube.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':803
                          },
                          success:function(data){
                            $('#803').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-803" id="803">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>



<!-- module 7 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Entertainment</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-804" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_youtube.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':804

                      },
                      success:function(data){
                        $('#804').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-804").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_youtube.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':804
                          },
                          success:function(data){
                            $('#804').append(data);

                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-804" id="804">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>

<!-- start module 8 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Family Entertainment</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-805" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_youtube.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':805

                      },
                      success:function(data){
                        $('#805').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-805").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_youtube.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':805
                          },
                          success:function(data){
                            $('#805').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-805" id="805">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>




 <!-- start module 9 -->
           <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Film & Animation</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-806" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_youtube.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':806

                      },
                      success:function(data){
                        $('#806').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-806").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_youtube.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':806
                          },
                          success:function(data){
                            $('#806').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-806" id="806">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>




<!-- start module 10 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Food</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-807" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_youtube.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':807

                      },
                      success:function(data){
                        $('#807').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-807").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_youtube.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':807
                          },
                          success:function(data){
                            $('#807').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-807" id="807">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start module 11 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Gaming</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-808" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_youtube.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':808

                      },
                      success:function(data){
                        $('#808').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-808").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_youtube.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':808
                          },
                          success:function(data){
                            $('#808').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-808" id="808">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>



<!-- start module 12 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">How-to & Style</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-809" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_youtube.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':809

                      },
                      success:function(data){
                        $('#809').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-809").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_youtube.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':809
                          },
                          success:function(data){
                            $('#809').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-809" id="809">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>



<!-- start module 13 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Music</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-810" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_youtube.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':810

                      },
                      success:function(data){
                        $('#810').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-810").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_youtube.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':810
                          },
                          success:function(data){
                            $('#810').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-810" id="810">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start module 14 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">News & Politics</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-811" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_youtube.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':811

                      },
                      success:function(data){
                        $('#811').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-811").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_youtube.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':811
                          },
                          success:function(data){
                            $('#811').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-811" id="811">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start module 15 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Nonprofits & Activism</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-812" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_youtube.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':812

                      },
                      success:function(data){
                        $('#812').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-812").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_youtube.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':812
                          },
                          success:function(data){
                            $('#812').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-812" id="812">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>



<!-- start module 16 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">People & Blogs</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-813" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_youtube.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':813

                      },
                      success:function(data){
                        $('#813').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-813").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_youtube.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':813
                          },
                          success:function(data){
                            $('#813').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-813" id="813">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>


<!-- start module 17 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Pets & Animals</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-814" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_youtube.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':814

                      },
                      success:function(data){
                        $('#814').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-814").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_youtube.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':814
                          },
                          success:function(data){
                            $('#814').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-814" id="814">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>





<!-- start module 18 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Science & Technology</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-815" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_youtube.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':815

                      },
                      success:function(data){
                        $('#815').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-815").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_youtube.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':815
                          },
                          success:function(data){
                            $('#815').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-815" id="815">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>
<!-- start module 19 -->
          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Travel & Events</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-816" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_youtube.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':816

                      },
                      success:function(data){
                        $('#816').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-816").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_youtube.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':816
                          },
                          success:function(data){
                            $('#816').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-816" id="816">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>



<!-- start module 20 -->

          <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">Travel & Events</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-817" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_youtube.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':817

                      },
                      success:function(data){
                        $('#817').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-817").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_youtube.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':817
                          },
                          success:function(data){
                            $('#817').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-817" id="817">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>

<!-- start module 21 -->


<!-- start module 22 -->



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
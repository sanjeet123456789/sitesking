

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

                           <h1>List of vk Community</h1>
          <div class="autowide">


 <!-- module 1 start -->
<div class="module">
 
<div class="main_col_head">
<div class="main_col_title">Top vk Page</div>
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
    color: #733;
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
    color:#733;
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
    url:"includes/handlers/ajax/get_data_vk_top.php",
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
        url:"includes/handlers/ajax/get_data_vk_top.php",
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
                  <div class="pal-scroll pal-scroll-740" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':740

                      },
                      success:function(data){
                        $('#740').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-740").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':740
                          },
                          success:function(data){
                            $('#740').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-740" id="740">
                    

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
                  <div class="pal-scroll pal-scroll-700" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':700

                      },
                      success:function(data){
                        $('#700').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-700").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':700
                          },
                          success:function(data){
                            $('#700').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-700" id="700">
                    

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
                  <div class="pal-scroll pal-scroll-202" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':701

                      },
                      success:function(data){
                        $('#701').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-201").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':701
                          },
                          success:function(data){
                            $('#701').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-701" id="701">
                    

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
                  <div class="pal-scroll pal-scroll-702" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':702

                      },
                      success:function(data){
                        $('#702').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-702").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':702
                          },
                          success:function(data){
                            $('#702').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-702" id="702">
                    

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
                  <div class="pal-scroll pal-scroll-703" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':703

                      },
                      success:function(data){
                        $('#703').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-703").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':703
                          },
                          success:function(data){
                            $('#703').append(data);
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-703" id="703">
                    

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
                  <div class="pal-scroll pal-scroll-704" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':704

                      },
                      success:function(data){
                        $('#704').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-704").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':704
                          },
                          success:function(data){
                            $('#704').append(data);

                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-704" id="704">
                    

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
                  <div class="pal-scroll pal-scroll-705" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':705

                      },
                      success:function(data){
                        $('#705').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-705").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':705
                          },
                          success:function(data){
                            $('#705').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-705" id="705">
                    

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
                  <div class="pal-scroll pal-scroll-706" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':706

                      },
                      success:function(data){
                        $('#706').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-706").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':706
                          },
                          success:function(data){
                            $('#706').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-706" id="706">
                    

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
                  <div class="pal-scroll pal-scroll-707" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':707

                      },
                      success:function(data){
                        $('#707').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-707").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':707
                          },
                          success:function(data){
                            $('#707').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-707" id="707">
                    

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
                  <div class="pal-scroll pal-scroll-708" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':708

                      },
                      success:function(data){
                        $('#708').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-201").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':708
                          },
                          success:function(data){
                            $('#708').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-708" id="708">
                    

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
                  <div class="pal-scroll pal-scroll-709" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':709

                      },
                      success:function(data){
                        $('#709').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-709").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':709
                          },
                          success:function(data){
                            $('#709').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-709" id="709">
                    

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
                  <div class="pal-scroll pal-scroll-710" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':710

                      },
                      success:function(data){
                        $('#710').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-710").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':710
                          },
                          success:function(data){
                            $('#710').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-710" id="710">
                    

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
                  <div class="pal-scroll pal-scroll-711" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':711

                      },
                      success:function(data){
                        $('#711').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-711").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':711
                          },
                          success:function(data){
                            $('#711').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-711" id="711">
                    

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
                  <div class="pal-scroll pal-scroll-712" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':712

                      },
                      success:function(data){
                        $('#712').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-712").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':712
                          },
                          success:function(data){
                            $('#712').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-712" id="712">
                    

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
                  <div class="pal-scroll pal-scroll-714" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':714

                      },
                      success:function(data){
                        $('#714').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-714").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':714
                          },
                          success:function(data){
                            $('#714').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-714" id="714">
                    

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
                  <div class="pal-scroll pal-scroll-715" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':715

                      },
                      success:function(data){
                        $('#715').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-715").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':715
                          },
                          success:function(data){
                            $('#715').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-715" id="715">
                    

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
                  <div class="pal-scroll pal-scroll-716" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':716

                      },
                      success:function(data){
                        $('#716').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-716").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':716
                          },
                          success:function(data){
                            $('#716').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-716" id="716">
                    

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
                  <div class="pal-scroll pal-scroll-717" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':717

                      },
                      success:function(data){
                        $('#717').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-717").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':717
                          },
                          success:function(data){
                            $('#717').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-717" id="717">
                    

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
                  <div class="pal-scroll pal-scroll-718" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':718

                      },
                      success:function(data){
                        $('#718').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-718").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':718
                          },
                          success:function(data){
                            $('#718').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-718" id="718">
                    

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
                  <div class="pal-scroll pal-scroll-719" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':719

                      },
                      success:function(data){
                        $('#719').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-719").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':719
                          },
                          success:function(data){
                            $('#719').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-719" id="719">
                    

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
                  <div class="pal-scroll pal-scroll-720" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':720

                      },
                      success:function(data){
                        $('#720').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-720").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':720
                          },
                          success:function(data){
                            $('#720').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-720" id="720">
                    

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
                  <div class="pal-scroll pal-scroll-721" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':721

                      },
                      success:function(data){
                        $('#721').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-721").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':721
                          },
                          success:function(data){
                            $('#721').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-721" id="721">
                    

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
                  <div class="pal-scroll pal-scroll-722" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':722

                      },
                      success:function(data){
                        $('#722').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-722").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':722
                          },
                          success:function(data){
                            $('#722').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-722" id="722">
                    

                  </div>
                  </div>
                  </div>
                  <div class="main_co2l_title_bottom" style="padding:5px;"> </div>
                   
              </div>
<!-- start of module 25 -->


               <div class="module">
                   
                  <div class="main_col_head">
                  <div class="main_col_title">parenting</div>
                  <div class="main_co2l_title"></div>
                  </div>
                  <div class="pal-scroll pal-scroll-723" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':723

                      },
                      success:function(data){
                        $('#723').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-723").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':723
                          },
                          success:function(data){
                            $('#723').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-723" id="723">
                    

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
                  <div class="pal-scroll pal-scroll-724" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':724

                      },
                      success:function(data){
                        $('#724').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-724").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':724
                          },
                          success:function(data){
                            $('#724').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-724" id="724">
                    

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
                  <div class="pal-scroll pal-scroll-725" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':725

                      },
                      success:function(data){
                        $('#725').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-725").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':725
                          },
                          success:function(data){
                            $('#725').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-725" id="725">
                    

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
                  <div class="pal-scroll pal-scroll-726" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':726

                      },
                      success:function(data){
                        $('#726').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-726").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':726
                          },
                          success:function(data){
                            $('#726').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-726" id="726">
                    

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
                  <div class="pal-scroll pal-scroll-727" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':727

                      },
                      success:function(data){
                        $('#727').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-727").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':727
                          },
                          success:function(data){
                            $('#727').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-727" id="727">
                    

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
                  <div class="pal-scroll pal-scroll-728" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':728

                      },
                      success:function(data){
                        $('#728').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-728").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':728
                          },
                          success:function(data){
                            $('#728').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-728" id="728">
                    

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
                  <div class="pal-scroll pal-scroll-729" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':729

                      },
                      success:function(data){
                        $('#729').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-729").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':729
                          },
                          success:function(data){
                            $('#729').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-729" id="729">
                    

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
                  <div class="pal-scroll pal-scroll-730" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':730

                      },
                      success:function(data){
                        $('#730').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-730").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':730
                          },
                          success:function(data){
                            $('#730').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-730" id="730">
                    

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
                  <div class="pal-scroll pal-scroll-731" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':731

                      },
                      success:function(data){
                        $('#731').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-731").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':731
                          },
                          success:function(data){
                            $('#731').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-731" id="731">
                    

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
                  <div class="pal-scroll pal-scroll-732" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':732

                      },
                      success:function(data){
                        $('#732').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-732").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':732
                          },
                          success:function(data){
                            $('#732').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-732" id="732">
                    

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
                  <div class="pal-scroll pal-scroll-733" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':733

                      },
                      success:function(data){
                        $('#733').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-733").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':733
                          },
                          success:function(data){
                            $('#733').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-733" id="733">
                    

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
                  <div class="pal-scroll pal-scroll-734" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':734

                      },
                      success:function(data){
                        $('#734').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-734").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':734
                          },
                          success:function(data){
                            $('#734').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-734" id="734">
                    

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
                  <div class="pal-scroll pal-scroll-735" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':735

                      },
                      success:function(data){
                        $('#735').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-735").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':735
                          },
                          success:function(data){
                            $('#735').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-735" id="735">
                    

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
                  <div class="pal-scroll pal-scroll-736" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':736

                      },
                      success:function(data){
                        $('#736').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-736").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':736
                          },
                          success:function(data){
                            $('#736').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-736" id="736">
                    

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
                  <div class="pal-scroll pal-scroll-737" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':737

                      },
                      success:function(data){
                        $('#737').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-737").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':737
                          },
                          success:function(data){
                            $('#737').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-737" id="737">
                    

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
                  <div class="pal-scroll pal-scroll-738" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':738

                      },
                      success:function(data){
                        $('#738').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-738").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':738
                          },
                          success:function(data){
                            $('#738').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-738" id="738">
                    

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
                  <div class="pal-scroll pal-scroll-739" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':739

                      },
                      success:function(data){
                        $('#739').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-739").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':739
                          },
                          success:function(data){
                            $('#739').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-739" id="739">
                    

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
                  <div class="pal-scroll pal-scroll-741" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':741

                      },
                      success:function(data){
                        $('#741').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-741").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':741
                          },
                          success:function(data){
                            $('#741').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-741" id="741">
                    

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
                  <div class="pal-scroll pal-scroll-742" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':742

                      },
                      success:function(data){
                        $('#742').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-742").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':742
                          },
                          success:function(data){
                            $('#742').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-742" id="742">
                    

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
                  <div class="pal-scroll pal-scroll-743" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
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
                          url:"includes/handlers/ajax/get_data_vk.php",
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
                  <div class="pal-scroll pal-scroll-744" >
                  <div class="list-more-container" >
                  <input type="text" class="roller" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                  
                   <script type="text/javascript">
                    
                      
                  $(document).ready(function(){
                  var flag=0;
                    $.ajax({
                      type:"GET",
                      url:"includes/handlers/ajax/get_data_vk.php",
                      data:{
                        'offset':0,
                        'limit':15,
                        'id':744

                      },
                      success:function(data){
                        $('#744').append(data);
                        flag+=15;
                      }

                    });

                    $(".pal-scroll-744").scroll(function(){
                      if(this.offsetHeight + this.scrollTop == this.scrollHeight){
                        // alert("at the bottom");
                            $.ajax({
                          type:"GET",
                          url:"includes/handlers/ajax/get_data_vk.php",
                          data:{
                            'offset':flag,
                            'limit':5,
                            'id':744
                          },
                          success:function(data){
                            $('#744').append(data);
                            
                            flag +=5;
                          }

                        });
                      }
                    });
                  });





                    </script>
                  </head>
                  <div class="class_list class-744" id="744">
                    

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
            color: #733;
            float: left;
          /*border-radius:2px;*/
          overflow: hidden;
          text-overflow: ellipsis;
          }
          .night-mode .list-more-container ul li:hover{
            background: #733;
          }
          .list-more-container ul li:hover{
          background:#efefef;
          }
          .night-mode .web_link{
            color:white;

          }

          .web_link{
            cursor:pointer;
            color:#733;
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
          <style>

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
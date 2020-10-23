
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->

<!------ Include the above in your HEAD tag ---------->

<head>
  <link href="css/profilePic.css" rel="stylesheet" type="text/css" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
 
 <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
 <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">  

 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
 <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
              <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
            -->
            <script src="js/profilePic.js"></script> 


            <style type="text/css">
              .shadow {
                -moz-box-shadow:    3px 3px 5px 6px #ccc;
                -webkit-box-shadow: 3px 3px 5px 6px #ccc;
                box-shadow:         3px 3px 5px 6px #ccc;
              }
            </style>
          </head>
          <div id="user_searched_page">
            <body class="profile-page">


              <div class="page-header header-img" data-parallax="true" style="background-image:url('https://www.pinclipart.com/picdir/middle/68-686941_icon-clipart-jobs-accountant-hiring-png-download.png'); opacity: 0.5;"></div>
              <div class="main main-raised">
                <div class="profile-content">
                 <!--  //container -->
                 <div class="container">
                  <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                     <div class="profile">
                      <div class="avatar">
                        <img src="images/profileImage.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                      </div>
                      <div class="name" style="margin-top: -25%;">
                        <h3 class="title">Sufyan</h3>

                      </div>

                    </div>
                  </div>
                </div>
               <!--  <div class="description text-center" style="">
                    <p style="font-size: 20px; font-weight: bold;"><b>
                    </div> -->
                  </div>   
                  <div class="container">
    <div class="container-fluid full-width">
        <div class="row-fluid">
            <button class="btn pull-left btn btn-primary">Profile Card</button>
            <button class="btn btn-success">Print</button>
            <button class="btn pull-right btn-secondary">Update</button>
        </div>
    </div>
</div>

                 <!--  <div class="row" style="">
    <div class="col-md-12 col-lg-2 ">
      <button class="btn btn-primary btn-block "  style="float: left margin-left:80%;">Sign up</button>
      
          
    
    </div>
  </div>
                  --> 
                </div>


              </div>
              <!--   //End-profile-content-->
              

              <!-- Divs-->

              <!------ Include the above in your HEAD tag ---------->

              <section class="pt-5">
                <div class="container">

                </div>
              </section>
              <section class="pt-2">
                <div class="container">


                  <div class="row mb-3">
                    <div class="col-md-8">
                      <div class="card">
                        <div class="card-body">
                          <div class="row ">
                      
                        <div class="col-md-4" >
                          <h4>Education</h4>
                            </div>
                     <button class="btn_edu"><i class=" fa fa-plus-circle" style="font-size:24px"></i></button>
                        </div>

                        @include('cv/education')
                        
                    
                      
                    </div>
                  </div>


                </div>
              </div>
           <div class="row mb-3">
                    <div class="col-md-8">
                      <div class="card">
                        <div class="card-body">
                          <div class="row ">
                      
                        <div class="col-md-4 " >
                          <h4>Trainings</h4>
                            </div>

                            <button type="button" class="btn btn-success pull-right"  style="margin-bottom: 5%; left: 0%;">Add new</button>
                        </div>
                        <div class="row" >
                          <div class="col">
                           <b> Title</b>
                          </div>
                          <div class="col">
                            <b>Level</b>
                          </div>
                           <div class="col">
                            <b>Start</b>
                          </div>
                           <div class="col">
                            <b>End</b>
                          </div>
                           <div class="col">
                            <b>Institute</b>
                          </div>
                        </div>
                        <div class="row" >
                          <div class="col">
                            Web
                          </div>
                          <div class="col">
                            Fresh
                          </div>
                           <div class="col">
                            2016
                          </div>
                           <div class="col">
                            2020
                          </div>
                           <div class="col">
                            umt lahore
                          </div>
                        </div>
                     <!--  <div class="col-md-4" style="background-color: yellow;">
                  
                          <div class="sub-row">
                              
                          </div>
                        </div> -->
                      
                    </div>
                  </div>


                </div>
              </div>
                   <div class="row mb-3">
                    <div class="col-md-8">
                      <div class="card">
                        <div class="card-body">
                          <div class="row ">
                      
                        <div class="col-md-4 " >
                          <h4>Trainings</h4>
                            </div>

                            <button type="button" class="btn btn-success pull-right"  style="margin-bottom: 5%; left: 0%;">Add new</button>
                        </div>
                        <div class="row" >
                          <div class="col">
                           <b> Title</b>
                          </div>
                          <div class="col">
                            <b>Level</b>
                          </div>
                           <div class="col">
                            <b>Start</b>
                          </div>
                           <div class="col">
                            <b>End</b>
                          </div>
                           <div class="col">
                            <b>Institute</b>
                          </div>
                        </div>
                        <div class="row" >
                          <div class="col">
                            Web
                          </div>
                          <div class="col">
                            Fresh
                          </div>
                           <div class="col">
                            2016
                          </div>
                           <div class="col">
                            2020
                          </div>
                           <div class="col">
                            umt lahore
                          </div>
                        </div>
                     <!--  <div class="col-md-4" style="background-color: yellow;">
                  
                          <div class="sub-row">
                              
                          </div>
                        </div> -->
                      
                    </div>
                  </div>


                </div>
              </div>
            
            


                </div>
              </div>


            </div>
          </section>


          <style>
            .new-car {box-shadow: -1px 3px 5px 2px rgba(184,184,184,0.62);}
            img {width:100%;}
          /*  .container {
   text-align:center;
} 
 button {
     display:inline-block;
}*/
          </style>



        </body>
      </div>

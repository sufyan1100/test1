
@extends('layouts.external-links')
@section('content')

<!-- I AM THE MAIN CONTAINER -->
<div class="container-fluid shadow-sm" id="global-top-nav">
    <!-- I AM THE SECOND MAIN CONTAINER -->
    <div class="container">
        <!-- I AM THE TOP NAV-BAR -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">☰   </span>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
               
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  
                </ul>
            
                
               
            </div>
        </nav>
    </div>
</div>
<!-- END OF TOP NAV CONTENTS-->

<!--Profile pic div-->

@include('profilePic')
<!--Profile pic div-->



<!-- I AM THE BOTTOM STICKY NAV BAR THAT CONTAINS AUTO TIME CLOCK -->
<!-- <div class="container-fluid " id="global-top-nav">
    <div class="container">
        <div class="d-none d-lg-block col-lg-12 col-xl-12">
            <nav class="navbar fixed-bottom navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                </button>
                <div class="collapse navbar-collapse" id="navbarText">

                    <span class="navbar-text">
                                    <span id="date_time"></span>
                    <script type="text/javascript">
                        window.onload = date_time('date_time');
                    </script>
                    </span>

                    

                </div>
               <!--  <span class="navbar-text">
                                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="toggleFullScreen()"><i class="fas fa-expand-arrows-alt"></i></button>
                                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="refresh()"><i class="fas fa-sync"></i></button>
                                </span> -->
            </nav>
        </div>
    </div>
</div> 







<!-- IM THE ONE WHO RESPOSIVE OF BODY CONTENTS -->


<!--------I HOLD THE HIDDEN SIDE NAV------->
<div id="global-side-nav" class="sidenav">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 py-5" style="background-color:white;">
                <div class="card border-0 shadow-none p-3 rounded-0 my-2" id="global-cards" style="max-width:auto;">
                    <div class="card-header bg-white border-0">
                        <h1 class="h3 mb-3 font-weight-light text-center text py-3" id="land-title">profile</h1>
                    </div>


                </div>
                <ul class="list-group list-group-flush">

                    <a href="" class="list-group-item list-group-item-action ">
                           ADD USERS
                        </a>

                    <a href="" class="list-group-item list-group-item-action ">
                           DISABLE ACCOUNTS
                        </a>

                    <a href="" class="list-group-item list-group-item-action ">
                           LOG STAMP
                        </a>

                    <a href="" class="list-group-item list-group-item-action ">
                           NOTIFICAITONS
                        </a>

                    <a href="" class="list-group-item list-group-item-action ">
                            LOGIN ATTEMPTS
                        </a>

                    <a href="home.php" class="list-group-item list-group-item-action " data-toggle="modal" data-target="#IPBLOCKING">DISABLE USER</a>
                </ul>

                <hr class="colorgraph my-5 mb-5">
            </div>
        </div>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">≡</a>
    </div>
</div>
@endsection
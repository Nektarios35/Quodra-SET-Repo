<?php
    include('../helper.php');

?>

<?php
    require('../sqli_connect.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require('host_log_process.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HostLogin</title>
    <link rel="stylesheet" href="../assets/css/userlog.css">
     <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="../assets/css/main.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="../assets/css/background.css">
</head>
<body>

      <header>
        <!-- Header Start -->
       <div class="header-area header-sticky">
            <div class="main-header ">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- logo -->
                        <div class="col-xl-2 col-lg-2">
                           <p>Swift Bookings</p>
                        </div>
                    <div class="col-xl-8 col-lg-8">
                            <!-- main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">                                                                                                                                     
                                        <li><a href="../index.php">Home</a></li>
                                          <li><a href="../user_login/cust_login.php">Customer Login</a></li>
                                          <li><a href="host_log.php">Host Login</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        <div class="col-xl-2 col-lg-2">
                            <!-- header-btn -->
                            
                        </div>
                     
                       
        <!-- Header End -->
    </header>

    <div class="image-fader">
  <img src="../assets/img/back_ground_wallpapers/10.png" />
  <img src="../assets/img/back_ground_wallpapers/13.png" />
  <img src="../assets/img/back_ground_wallpapers/14.png" />
</div>

<main id="main-area">
    <section id="host_log">
                <div class="row m-0">
                    <div class="col-lg-4 offset-lg-4">
                        <div class="text-center pb-10">
                            <h1 class="login-title text-dark">Host Login</h1>
                        </br>
                            <p class="p-1 m-0 font-ubuntu text-black-50">Swift Bookings</p>
                        </br>
                            <span>Want To Become A Host? <a href="../host_register/host_reg.php">Sign Up</a></span>
                    </div>
                </br>
              </br>

                        <div class="d-flex justify-content-center">
                            <form action="host_log.php" method="post" enctype="multipart/form-data" id="host_log_form">
                                <div class="form-row-my-4">
                                    <div class = "col">
                                        <input type="text" required name="email" id="email" class="form-control" placeholder="Email*">
                                </div>
                            </div>
                        </br>

                                <div class="form-row-my-4">
                                    <div class="col">
                                        <input type="password" required name="password" id="password" class="form-control" placeholder="Password*">
                                </div>
                            </div>

                            <div class="submit-btn text-center my-5">
                                <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Login</button>
                            </div>

                            </form>


                    </div>
                </div>
            </div>
    </section>
</main>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="js/main.js"></script>
</body>
</html>
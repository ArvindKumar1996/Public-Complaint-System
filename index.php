<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="style.css" type="text/css" rel="stylesheet">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="style.js"></script>
<script src="js/bootstrap.min.js"></script>
<title></title>
</head>
<body  data-spy="scroll" data-target=".navbar">
<?php include('header.php'); ?>
    <section id="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col heading text-center">
                    <h1>PUBLIC COMPLAINT SYSTEM</h1>
                    <h3>Providing an online way of solving the problems faced by the public by saving time and eradicate corruption.</h3>
                    <button type="button" class="btn btn-outline-danger complaint-button btn-lg text-uppercase"><a href="login.php" style="color:white;text-decoration:none;">Complaint Now</a></button>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col text-center services-heading">
                <h2>Existing System</h2>
                <p>In the existing system the citizens must go to the government office for any kind of help. For complaining about a problem there is a system called Prajavani in which the users can post their problems but cannot get the details of the problems and some other services. This system doesn’t have much popularity and is not user friendly.</p>
                <hr>
                </div>
            </div>
            </section>
          <section id="ourpartners">
            <div class="container">
            <div class="row text-center">
            <div class="col-md partner">
            <img src="images/nm.jpg" class="rounded-circle img-fuid w-50" style="height:60%;"><br>
            <span class="img-txt">Prime Minister, India</sapn><br>
            <img src="images/asd.png" class="img-responsive">
            <p class="txt-bl">Mr. Narendra Modi</p>
            </div>
            
            
            
            <div class="col-md partner">
            <img src="images/yogi.jpg" class="rounded-circle img-fuid w-50"><br>
            <span class="img-txt">Chief Minister(UP), India</sapn><br>
            <img src="images/asd.png" class="img-responsive">
            <p class="txt-bl">Mr. Yogi Aditya Nath</p>
            </div>
            
            
            
            <div class="col-md partner">
            <img src="images/pawan.jpg" class="rounded-circle img-fuid w-50" style="height:60%;"><br>
            <span class="img-txt">Chairman SRIMT, Lucknow</sapn><br>
            <img src="images/asd.png" class="img-responsive">
            <p class="txt-bl">Mr. Pawan Singh Chauhan</p>
            </div>
            
            </div>
            
            </div>
            </section>
    <section id="work">
            <div class="container">
                <div class="row">
                    <div class="col work-heading">
                    <h2>Check Out Your Latest Work</h2>
                    <h4>Our work on Public Complaint System Provides a special domain to complaint the problem.</h4>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4 work-image">
                        <img src="images/muni.jpg" class="img-thumbnail img-responsive"/>
                    </div>
                    <div class="col-sm-4 work-image">
                            <img src="images/child.jpg" class="img-thumbnail img-responsive"/>
                    </div>
                    <div class="col-sm-4 work-image">
                            <img src="images/women.jpg" class="img-thumbnail img-responsive " style="width:120%;"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="images/md.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/abdul.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/gandhi.jpg" alt="Third slide">
                                    </div>
                                </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                        </div>

                    </div>
                </div>
            </div>
    </section>
    <section id="workwithus">
        <div class="container">
            <div class="row">
                 <div class="col withus-heading">
                     <h2>Want to work with us?</h2>
                     <h4>If you want to work with us, you should first and follow all the terms and conditions related to our system.</h4>
                     <h4>For complaint system get is touch with us.</h4>
                     <button type="button" class="btn btn-success">GET IN TOUCH</button>
                 </div>
            </div>
        </div>
    </section>
<?php include('footer.php'); ?>
</body>
</html>
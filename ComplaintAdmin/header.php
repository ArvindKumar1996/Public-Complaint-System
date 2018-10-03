<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="../https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link href="../css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="../style.css" type="text/css" rel="stylesheet">
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../style.js"></script>
<script src="../js/bootstrap.min.js"></script>
<title></title>
</head>
<body  data-spy="scroll" data-target=".navbar">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                  <a class="navbar-brand logo" href="index.php">PUBLIC <span style="color: #4bcaff"> COMPLAINT </span> SYSTEM</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><img src="images/nav_icon.png"/></span>
                  </button>
                  <div class="navbar-menu">
                <div class="collapse navbar-collapse"id="navbarNav">
                    <ul class="navbar-nav">
                      <?php
                      if(isset($_COOKIE["email"]))
                           {
                              ?>
                                <li class="nav-item">
                                 <a class="nav-link" href="adminwelcome.php">Public</a>
                                </li>
                                 <li class="nav-item">
                                 <a class="nav-link" href="officer.php">Officer</a>
                                 </li>
                                 <li class="nav-item">
                                 <a class="nav-link" href="public_complaint.php">Complaint</a>
                                 </li>
                                <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                               </li>
                               
                          <?php	
                          }
                         
                         {
                         ?>
                         <?php	
                         }
                      ?>
                       </ul>
                </div> 
                </div>
            </div>
         </nav>
</body>
</html>
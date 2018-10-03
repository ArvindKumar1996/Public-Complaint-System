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
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                  <a class="navbar-brand logo" href="index.php">Public <span style="color: #4bcaff"> Complaint </span> System</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><img src="images/nav_icon.png"/></span>
                  </button>
                <div class="navbar-menu">
                <div class="collapse navbar-collapse"id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                            <div class="dropdown">
                                    <a class="nav-link dropdown-toggle" href="login.htm" data-toggle="dropdown">Department<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                            <li><a href="municipality.php">Municipality</a></li>
                                            <li><a href="corruption.php">Corruption</a></li>
                                            <li><a href="electricity.php">Electricity</a></li>
                                            <li><a href="childlabour.php">Child Labour</a></li>
                                            <li><a href="womenempowerment.php">Women Empowerment</a></li>
                                          </ul>
                                        </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="news.php">News</a>
                      </li>
                       <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                      </li>
                       <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="faq.php">FAQ</a>
                       </li>
                       <?php
	                     	if(isset($_COOKIE["email"]))
	                          	{
	                               ?>
                                 	<li class="nav-item">
                                   <a class="nav-link" href="logout.php" style="color:red;">Logout</a>
                                  </li>
                                  <li class="nav-item">
                                   <a class="nav-link" href="status.php">Status</a>
                                  </li>
                                  <li class="nav-item">
                                   <a class="nav-link" href="feedback.php">Feedback</a>
                                  </li>
	                           <?php	
	                         	}
		                              else
	                        	{
                          	?>
                       <li class="nav-item">
                           <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="login.htm" data-toggle="dropdown"><img src="images/user.png"/><span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="login.php">Login</a></li>
                                <li><a href="signup.php">Sign Up</a></li>
                              </ul>
                            </div>
                            <?php	
	                        	}
	                       ?>
                            </li>
                            <?php
	                     	if(isset($_COOKIE["email2"]))
	                          	{
	                               ?>
                                 	<li class="nav-item">
                                   <a class="nav-link" href="logout.php" style="color:red;">Logout</a>
                                  </li>
	                           <?php	
	                         	}
		                              else
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
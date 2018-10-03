<?php
include("../connection.php");
$msg="";
if(isset($_REQUEST["adminlogin"]))
{
	$a=str_replace("'","''",$_REQUEST["p1"]);
	$b=str_replace("'","''",$_REQUEST["p2"]);
	
	$q=mysql_query("select * from admin_login where Email='$a' and Password='$b'");
	if(mysql_num_rows($q)>0)
	{
		setcookie("email",$a);
		header("Location:adminwelcome.php");
	}
	else
	{
		$msg="Invalid username or password.Try again!.";
	}
}
?>
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
<?php include('header.php'); ?>
<section id="login">
       <div class="container">
           <div class="loginform">
               <div class="row">
                    <div class="col login-header">
                        <h2>Administrator Login</h2>
                        <hr class="light">
                    </div>
               </div>
               <div class="row">
                   <div class="col">
              <form method="post">
                     <label>Email or Phone</label>
                     <div class="input-group mb-3">
                     <div class="input-group-prepend">
                     <span class="input-group-text"><i class="fa fa-user"></i></span>
                     </div>
                     <input type="email" class="form-control form-control" placeholder="Email or Phone" name="p1"/>
                     </div>
                     <label>Password</label>
                     <div class="input-group mb-3">
                     <div class="input-group-prepend">
                     <span class="input-group-text"><i class="fa fa-lock"></i></span>
                     </div>
                     <input type="password" class="form-control form-control" placeholder="Password" name="p2"/>
                     </div>
                     <br>
                     <input type="submit" class="btn btn-success form-control" value="Login" name="adminlogin"/>
                     <br>
                     <input type="checkbox"/> Remember password.
                     <br>
                     <?php
                      echo $msg;
                     ?>
                     </form>
              </div>
                    
                    </div>
               </div>
</div>
       </div>
   </section>
   <?php include('footer.php'); ?>
</body>
</html>
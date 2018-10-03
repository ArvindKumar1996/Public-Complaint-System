<?php
include("connection.php");
$msg="";
$msg1="";
if(isset($_REQUEST["pbtnlogin"]))
{
	$a=str_replace("'","''",$_REQUEST["p1"]);
	$b=str_replace("'","''",$_REQUEST["p2"]);
	
	$q=mysql_query("select * from public_signup where Email='$a' and Password='$b'");
	if(mysql_num_rows($q)>0)
	{
		setcookie("email",$a);
		header("Location:welcome1.php");
	}
	else
	{
		$msg="Invalid username or password.Try again!.";
	}
}
if(isset($_REQUEST["obtnlogin"]))
{
	$c=str_replace("'","''",$_REQUEST["o1"]);
	$d=str_replace("'","''",$_REQUEST["o2"]);
	
	$q=mysql_query("select * from officer_signup where Email='$c' and Password='$d'");
	if(mysql_num_rows($q)>0)
	{
		setcookie("email2",$c);
		header("Location:welcome2.php");
	}
	else
	{
		$msg1="Invalid username or password.Try again!.";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="style.css" type="text/css" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="style.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title></title>
</head>
<body>
<?php include('header.php'); ?>
   <section id="login">
       <div class="container">
           <div class="loginform">
               <div class="row">
                    <div class="col login-header">
                        <h2>Login Form</h2>
                        <hr class="light">
                    </div>
               </div>
               <div class="row">
                   <div class="col">
                   <ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#public" role="tab">Public</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#officer" role="tab">Officer</a>
  </li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="public" role="tabpanel">
    <br>
              <form method="post">
                     <label>Email or Phone</label>
                     <div class="input-group mb-3">
                     <div class="input-group-prepend">
                     <span class="input-group-text"><i class="fa fa-user"></i></span>
                     </div>
                     <input type="email" class="form-control form-control-sm" placeholder="Email or Phone" name="p1"/>
                     </div>
                     <label>Password</label>
                     <div class="input-group mb-3">
                     <div class="input-group-prepend">
                     <span class="input-group-text"><i class="fa fa-lock"></i></span>
                     </div>
                     <input type="password" class="form-control form-control-sm" placeholder="Password" name="p2"/>
                     </div>
                     <br>
                     <input type="submit" class="btn btn-success form-control" value="Login" name="pbtnlogin"/>
                     <br>
                     <input type="checkbox"/> Remember password.
                     <br>
                     <span style="color:red">
                     <?php
                      echo $msg;
                     ?></span>
                     </form>
              </div>
  <div class="tab-pane" id="officer" role="tabpanel">
  <br>
     <form method="post">
  <label>Email or Phone</label>
                     <div class="input-group mb-3">
                     <div class="input-group-prepend">
                     <span class="input-group-text"><i class="fa fa-user"></i></span>
                     </div>
                     <input type="email" class="form-control form-control-sm" placeholder="Email or Phone" name="o1"/>
                     </div>
                     <label>Password</label>
                     <div class="input-group mb-3">
                     <div class="input-group-prepend">
                     <span class="input-group-text"><i class="fa fa-lock"></i></span>
                     </div>
                     <input type="password" class="form-control form-control-sm" placeholder="Password" name="o2"/>
                     </div>
                     <br>
                     <input type="submit" class="btn btn-info form-control" value="Login" name="obtnlogin" />
                     <br>
                     <input type="checkbox"/> Remember password.
                     <br>
                     <span style="color:red">
                     <?php
                      echo $msg1;
                     ?></span>
                     </form>
                          </div>
                      </div>
                    
                    </div>
               </div><br>
               <p class="text-center" style="color:white;">
         Don't have an account yet? <a href="signup.php">Sign Up Now</a>
        </p>
</div>
       </div>
   </section> 
   <?php include('footer.php'); ?>
</body>
</html>
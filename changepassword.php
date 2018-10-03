<?php
if(!isset($_COOKIE["email"]))
{
		header("Location:login.php");
}
include("connection.php");
$em=$_COOKIE["email"];
$q=mysql_query("select * from public_signup where email='$em'");
$name="";$mob="";$pic="";
if($r=mysql_fetch_array($q))
{
	$name=$r["Name"];
	$mob=$r["Contact"];
	$pic=$r["Pic"];
	
}

if(isset($_REQUEST["btnupload"]))
{
	$picname=$_FILES["f1"]["name"];
	$picname=$em.stristr($picname,".");
	move_uploaded_file($_FILES["f1"]["tmp_name"],"userpic/$picname");
	$q=mysql_query("update signup set Pic='$picname' where Email='$em'");
	header("Location:welcome1.php");
}
$msg="";
$oldpsw="";
$newpsw="";
$cpsw="";
if(isset($_REQUEST["btnch"]))
{
	$oldpsw=$_REQUEST["curpass"];
	$newpsw=$_REQUEST["newpass"];
	$cpsw=$_REQUEST["conpass"];
	if($oldpsw=="")
	{
		$msg="Please enter your current password!";
	}
	else if($newpsw=="")
	{
		$msg="Please enter your new password!";
	}
	else if($cpsw=="")
	{
		$msg="Please enter confirm password!";
	}
	else if($newpsw!=$cpsw)
	{
		$msg="Both new and confirm password must be same!";
	}
	else
	{
		$q1=mysql_query("select * from public_signup where Email='$em' and Password='$oldpsw'");
		if(mysql_num_rows($q1)>0)
		{
			$q2=mysql_query("update public_signup set Password='$newpsw' where Email='$em'");
			$msg="Password has been changed successfully!";
		}
		else
		{
			$msg="Invalid current password!";
		}
	}
}
?>
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
<body>
	<?php include("header.php"); ?>	
	<section id="login">
  <div class="container-fluid">
	
	<div class="row">
		<div class="col-sm-2">
			<div class="well"><img style="width:100%;height:120px" src="public_userpic/<?php echo $pic; ?>" /></div>
		
		<form method="post" enctype="multipart/form-data">
		<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Change Picture</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title"style="color:darkblue">Change Picture</h3>
      </div>
      <div class="modal-body">
        <input type="file" name="f1" /></br>
		<input type="submit" value="Change" class="btn btn-primary" name="btnupload" />
      </div>
    </div>

  </div>
</div>
		</form>
		<br/>
		<a href="changepsw.php">Change Password?</a>
	
		</div>
		<div class="col-sm-6">
			<form method="post">
			<label>Current Password</label>
		<div class="form-group">
        <input type="password" class="form-control" name="curpass" value="<?php echo $oldpsw; ?>" />
		</div>
	    
	    <label>New Password</label>
		<div class="form-group">
        <input type="password" class="form-control" name="newpass" value="<?php echo $newpsw; ?>" />
		</div>
		<label>Confirm Password</label>
		<div class="form-group">
        <input type="password" class="form-control" name="conpass" value="<?php echo $cpsw; ?>" />
		</div>
		<input type="submit" value="Change Password" class="btn btn-primary" name="btnch" />
			<?php echo $msg; ?>
		</form>
		</div>
		<div class="col-sm-4">
		   
		</div>
	</div>
  
  </div>
  </section>
  <?php include("footer.php"); ?>
   </body>
</html>
<?php
if(!isset($_COOKIE["email2"]))
{
		//header("Location:login.php");
}
include("connection.php");
$em=$_COOKIE["email2"];
$q=mysql_query("select s.Name,s.Contact,s.Pic,d.* from department d,officer_signup s where d.Dept_No=s.Dept_No and Email='$em'");
$name="";$mob="";$pic="";$dept="";
if($r=mysql_fetch_array($q))
{
	$name=$r["Name"];
	$mob=$r["Contact"];
	 $pic=$r["Pic"];
	 $dept=$r["Dept_Name"];
}

 if(isset($_REQUEST["btnupload"]))
{
	$picname=$_FILES["f1"]["name"];
	$picname=$em.stristr($picname,".");
	move_uploaded_file($_FILES["f1"]["tmp_name"],"public_userpic/$picname");
	$q=mysql_query("update officer_signup set Pic='$picname' where Email='$em'");
	header("Location:welcome2.php");
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
      <?php include('header.php'); ?>
      <section id="back">
            <div class="container">
            <h3>Welcome <?php echo $name; ?></h3><hr>
            <div class="row">
		<div class="col-sm-2">
			<div class="well"><img class="img-thumbnail" style="width:100%;height:150px" src="public_userpic/<?php echo $pic; ?>" /></div>
		
		<form method="post" enctype="multipart/form-data"><br>
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
		<a href="changepassword.php">Change Password?</a>

<!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title"style="color:darkblue">Change Password</h3>
      </div>
      <div class="modal-body">
	    <label>Current Password</label>
		<div class="form-group">
        <input type="password" class="form-control" name="curpass" />
		</div>
	    
	    <label>New Password</label>
		<div class="form-group">
        <input type="password" class="form-control" name="newpass" />
		</div>
		<label>Confirm Password</label>
		<div class="form-group">
        <input type="password" class="form-control" name="conpass" />
		</div>
		<input type="submit" value="Change" class="btn btn-primary" name="psw" />
      </div>
    </div>

  </div>
</div>
		
		</div>
		<div class="col-sm-6" style="color: teal;border:2px solid white;">
		<div class="table-responsive">
        <table class="table">
				<tbody>
            <tr>
						   <td>Name : <b><?php echo $name; ?></b></td>
							 <td>Email : <b><?php echo $em; ?></b></td>
						</tr>
						<tr>
						<td>Contact : <b><?php echo $mob; ?></b></td>
						<td>Department : <b><?php echo $dept; ?></b></td>
						</tr>
                                    
						<tfoot>
                 <td>
                 <br><br>
						     <a href="complaint.php"><input type="button" class="btn btn-outline-success" value="See Complaints" ></a>&nbsp; &nbsp;
                 <a href="index.php"><input type="button" class="btn btn-outline-warning"value="Go To Home" ></a>
						</td>
             </tfoot>
						</tbody>
         </table>
       </div>
		</div>
		<div class="col-sm-4">
		   
		</div>
	</div>
            </div>
      </section>
      <?php include('footer.php'); ?>
</body>
</html>
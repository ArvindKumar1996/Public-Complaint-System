<?php
if(!isset($_COOKIE["email"]))
{
		header("Location:login.php");
}
include("connection.php");
$em=$_COOKIE["email"];
$q=mysql_query("select * from public_signup where email='$em'");
$name="";$mob="";$pic="";$adr="";
if($r=mysql_fetch_array($q))
{
	$name=$r["Name"];
	$mob=$r["Contact"];
	 $pic=$r["Pic"];
	 $adr=$r["Aadhaar"];
	
}

 if(isset($_REQUEST["btnupload"]))
{
	$picname=$_FILES["f1"]["name"];
	$picname=$em.stristr($picname,".");
	move_uploaded_file($_FILES["f1"]["tmp_name"],"public_userpic/$picname");
	$q=mysql_query("update public_signup set Pic='$picname' where Email='$em'");
	header("Location:welcome1.php");
} 
$msg="";
if(isset($_REQUEST["comp_submit"]))
{
	$sel_dept=$_REQUEST["select_dept"];
	$cmp=$_REQUEST["comp"];
	$q=mysql_query("insert into public_complaint(Email,Comp_Type,Complaint)values('$em','$sel_dept','$cmp')");
	   if($q==true)
	   {
			 $msg="You have complaint successfully!";
	   }
	   else
	   {
		   $msg="Something Error!!.";
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
      <?php include('header.php'); ?>
      <section id="back">
            <div class="container">
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
						<td>Aadhaar Number : <b><?php echo $adr; ?></b></td>
						</tr>
						<tfoot>
						<tr>
						<td colspan="3">
						<form method="post">
						  <label>Complaint type</label>
							<select name="select_dept" class="form-control">
							    <option disable>--select type--</option>
							    <?php
					$q=mysql_query("select * from department");
					while($row=mysql_fetch_array($q))
					{
				?>
						<option value="<?php echo $row["Dept_No"]; ?>"><?php echo $row["Dept_Name"]; ?></option>
				<?php	
					}
				?>
							</select>
						  <label>Complaint Box</label>
						  <textarea class="form-control" name="comp" style="height: 150px;" placeholder="Complaint Here!.." required></textarea>
							<br>
							<center>
							<input type="submit" value="Submit" name="comp_submit" class="btn btn-success w-50">
							<span style="color:black"><?php echo $msg; ?></span>
							</center>
							</form>
							</td>
						</tr>
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
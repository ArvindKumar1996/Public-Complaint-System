<?php
include("../connection.php");
if(!isset($_COOKIE["admin"]))
{
	//header("location:index.php");
}
 if(isset($_REQUEST["m1"]))
{
	$e=$_REQUEST["m1"];
	$q=mysql_query("delete from public_signup where Email='$e'");
}
if(isset($_REQUEST["btnupdate"]))
{
	$a=$_REQUEST["edtname"];
	$b=$_REQUEST["edtcontact"];
	$e=$_REQUEST["m2"];
	$q=mysql_query("update public_signup set Name='$a',Contact='$b' where Email='$e'");
	header("Location:adminwelcome.php");
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
<body>
      <?php include('header.php'); ?>
      <section id="back">
								<div class="container">
								<form method="post">
								<div class="table">
							<table class="table-responsive table-hover table-bordered">
								<tr style="background-color:black;color:white;">
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>S.No.</th>
									<th>NAME</th>
									<th>EMAIL</th>
									<th>Aadhaar</th>
									<th>Contact</th>
									<th>Gender</th>
									<th>Pic</th>
								</tr>
								<?php
									$q=mysql_query("select * from public_signup");
									$i=0;
									while($row=mysql_fetch_array($q))
									{
										$i++;
										if(isset($_REQUEST["m2"]) and $row["Email"]==$_REQUEST["m2"])
										{
									?>
											<tr>
												<td><input type="submit" value="Update" name="btnupdate" class="btn btn-success" /></td>
												<td><a class="btn btn-info" href="adminwelcome.php">Cancel</a></td>
												<td><?php echo $i; ?></td>
												<td><input type="text" name="edtname" value="<?php echo $row["Name"]; ?>" class="form-control" /></td>
												<td><?php echo $row["Email"]; ?></td>
												<td><?php echo $row["Aadhaar"]; ?></td>
												<td><input type="text" name="edtcontact" value="<?php echo $row["Contact"]; ?>" class="form-control" /></td>
												<td><?php echo $row["Gender"]; ?></td>
												<td><img src="../public_userpic/<?php echo $row["Pic"]; ?>"style="width:80px;height:80px;"/></td>
											</tr>
									<?php	
										}
										else
										{
								?>
											<tr>
												<td><a class="btn btn-info" href="adminwelcome.php?m2=<?php echo $row["Email"]; ?>">Edit</a></td>
												<td><a class="btn btn-danger" onclick="return fun()" href="adminwelcome.php?m1=<?php echo $row["Email"]; ?>">Delete</a></td>
												<td><?php echo $i; ?></td>
												<td><?php echo $row["Name"]; ?></td>
												<td><?php echo $row["Email"]; ?></td>
												<td><?php echo $row["Aadhaar"]; ?></td>
												<td><?php echo $row["Contact"]; ?></td>
												<td><?php echo $row["Gender"]; ?></td>
												<td><img src="../public_userpic/<?php echo $row["Pic"]; ?>"style="width:80px;height:80px;"/></td>
											</tr>
								<?php	
										}
									}
								?>
							</table>
							</div>
							</form>
							</div>
						</div>
      </section>
      <?php include('footer.php'); ?>
</body>
</html>
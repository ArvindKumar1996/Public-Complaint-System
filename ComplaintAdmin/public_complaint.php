<?php
include("../connection.php");
 if(isset($_REQUEST["m1"]))
{
    $e=$_REQUEST["m1"];
	$q=mysql_query("delete from public_complaint where Comp_Id='$e'");
}
if(isset($_REQUEST["ver"])){
	$st=$_REQUEST["ver"];
	$cid=$_REQUEST["email"];
	$stat="";
	if($st=="ac")
	{
		$stat="Verified";
	}
	else{
		$stat="Not Verified";
	}
	$q=mysql_query("update public_complaint set Verify='$stat' where Comp_Id='$cid'");
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
								<div class="container-fluid">
								<form method="post">
								<div class="table">
							<table class="table-responsive table-hover table-bordered">
								<tr style="background-color:black;color:white;">
                                <th></th>
                                <th>S.No.</th>
									<th>Complaint_Id</th>
									<th>Email</th>
									
									<th>Complaint_Type</th>
                                    <th>Complaint</th>
									<th>Verify</th>
									<th></th>
								</tr>
								<?php
									$q=mysql_query("select * from public_complaint");
									$i=0;
									while($row=mysql_fetch_array($q))
									{
										$i++;
										if(isset($_REQUEST["m2"]) and $row["Comp_Id"]==$_REQUEST["m2"])
										{
									?>
											<tr>
                                                <td></td>
                                                <td><?php echo $i; ?></td>
												<td><?php echo$row["Comp_Id"]; ?></td>
											
												<td><?php echo$row["Aadhaar"]; ?></td>
												<td><?php echo $row["Comp_Type"]; ?></td>
												<td><?php echo $row["Complaint"]; ?></td>
												<td><?php echo $row["Verify"]; ?></td>
												</tr>
									<?php	
										}
										else
										{
								?>
											<tr>
												<td><a class="btn btn-danger" onclick="return fun()" href="public_complaint.php?m1=<?php echo $row["Comp_Id"]; ?>">Delete</a></td>
												<td><?php echo $i; ?></td>
												<td><?php echo$row["Comp_Id"]; ?></td>
												<td><?php echo$row["Email"]; ?></td>
											
												<td><?php echo $row["Comp_Type"]; ?></td>
												<td><?php echo $row["Complaint"]; ?></td>
												<td><?php echo $row["Verify"]; ?></td>
												<td><a href="public_complaint.php?ver=ac&email=<?php echo $row["Comp_Id"];?>"><input type="button" class="btn btn-success" value="Verify"/></a>&nbsp<a href="public_complaint.php?ver=rej&email=<?php echo $row["Comp_Id"]; ?>"><input class="btn btn-danger" type="button" value="Deny" /></a></td>
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
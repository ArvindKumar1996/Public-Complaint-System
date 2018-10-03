<?php
include("connection.php");
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
            <div class="container-fluid">
            <div class="row">
     <div class="col-sm-3">
	    <?php
					$q=mysql_query("select * from department where Dept_No=(select Dept_No from officer_signup where Email='".$_COOKIE["email2"]."')");
					while($row=mysql_fetch_array($q))
					{
				?>
					<a href="complaint.php?Dept_No=<?php echo $row["Dept_No"]; ?>"><input type="button" value="<?php echo $row["Dept_Name"];?>"class="btn btn-outline-danger w-100"/></a><br><br>
				<?php	
					}
				?>
	 </div>
     <div class="col-sm-9">
	 <?php
	    if(isset($_REQUEST["Dept_No"]))
		{
			$deptno=$_REQUEST["Dept_No"];
					$q=mysql_query("select * from public_complaint where Comp_Type='$deptno'");
					$i=0;
					while($row=mysql_fetch_array($q))
					{
						$i++;
				?>		
						   
                                       <div class="card border-danger mb-5">
                                               <div class="card-header bg-success"><?php echo $row["Email"]; ?></div>
                                               <div class="card-body text-success text-justify">
                                               <p><?php echo $row["Complaint"]; ?> </p>
									</div>
									<div class="card-footer bg-transparent border-warning">
										<?php
											if(isset($_COOKIE["email2"]))
											{
										?>		
											<input type="button" class="btn btn-outline-success" value="Solve"/>
                                                                  <button type="button" class="btn btn-outline-success"><a href="suggestion.php" style="text-decoration:none;">Suggestion</a></button>
											<p class="float-right"><i><?php echo $row["Verify"]; ?></i> </p>
											 <?php
											}
											else
											{
												echo "Please login first.";
											}
										?>
									</div>
								</div>
						   
				<?php	
					}
		}
				?>
	 </div>
            </div>
      </section>
      <?php include('footer.php'); ?>
</body>
</html>
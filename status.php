<?php
if(!isset($_COOKIE["email"]))
{
     header("Location:login.php");
}
include("connection.php");
$em=$_COOKIE["email"];
$q=mysql_query("select * from public_complaint where email='$em'");
$pic="";$adr="";
if($r=mysql_fetch_array($q))
{
	$id=$r["Comp_Id"];
      $email=$r["Email"];
	 $ctype=$r["Comp_Type"];
       $ver=$r["Verify"];
       $comp=$r["Complaint"];
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
            <div class="container-fluid">
               <h3>Welcome </h3>
               <div class="st" style="color: teal;">
               <div class="table-responsive">
                  <table class="table table-hover">
                    <tr>
                         <td>Complaint Id: <b><?php echo $id; ?></b></td>
                         </tr>
                         <tr>
                         <td>Email:<b> <?php echo $email; ?></b></td>
                         
                         </tr>
                         <tr>
                         <td>Complaint Type:<b> <?php echo $ctype; ?></b></td>
                         </tr>
                         
                         <tr>
                         <td>Status:<b> <?php echo $ver; ?></b></td>
                         </tr>
                         <tr>
                         <td><u>Your Complaint:<u><br><br>"<i class="justify" style="color:black"><?php echo $comp; ?><i>"<td>
                         </tr>
                    </table>
                    </div>
                    <a href="welcome1.php"> <input type="button" class="btn btn-outline-success" value="Go To Back"></a>&nbsp;&nbsp;
                    <a  href="index.php"> <input type="button" class="btn btn-outline-success" value="Go To Home"></a>
               </div>
            </div>
      </section>
      <?php include('footer.php'); ?>
</body>
</html>
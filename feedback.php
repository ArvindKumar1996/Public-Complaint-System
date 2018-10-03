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
<script>
         $(document).ready(function(){
             $("#btn").click(function(){
                $(".txts").append("<li>Hi</li><br>");
             });
         });
    </script>
</head>
<body>
      <?php include('header.php'); ?> 
      <section id="back">
       <center><h2></h2></center>
        <div class="container">
        <h3>Feedback</h3>
        <hr>
          <div class="row">
            <div class="col txts">
               
            </div>
            <div class="col"></div>
            <div class="col"></div>
          </div>
        </div>
        <div class="container">
             <form>
               <input type="text" class="form-control w-50" id="txt">
               </br>
               <input type="submit" class="btn btn-info" id="btn">
             </form>
        </div>
      </section>
      <?php include('footer.php'); ?>
</body>
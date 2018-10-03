<?php include("header.php"); ?>	
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
        <section id="faq">
		<div class="container">
                <div class="row">
                  <div class="col-sm-6">
                  <h4>Your Suggestion:<hr></h4>
                       <form>
                            <textarea class="form-control" placeholder="Give your suggestion here..." required></textarea><br>
                            <input type="submit" class="btn btn-success" value="Submit">&nbsp;&nbsp;&nbsp;
                            <a href="complaint.php"><input type="button" class="btn btn-outline-warning"value="Go To Back" ></a>
                       </form>
                  </div>
                  <div class="col-sm-6"></div>
                </div>
			</div>
   </section>
  <?php include("footer.php"); ?>
  </body>
  </html>
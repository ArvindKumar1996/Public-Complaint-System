<?php
   include("connection.php");
   $msg="";
   if(isset($_REQUEST["pbtnsubmit"]))
   {
	   $pname=$_REQUEST["pname"];
	   $email=$_REQUEST["pemail"];
	   $adr=$_REQUEST["aadhaar"];
	   $contact=$_REQUEST["pcontact"];
	   $psw=$_REQUEST["ppassword"];
	   $prsw=$_REQUEST["prpassword"];	 
	   $gen=$_REQUEST["pgen"]; 
	if($pname=="")
	   {
		   $msg="Please enter your name.";
	   }
	   else if($contact=="")
	   {
		   $msg="Please enter your mobile number.";
	   }
	   else if($email=="")
	   {
		   $msg="Please enter your email.";
	   }
	   else if($adr=="")
	   {
		   $msg="Please enter your Aadhar number.";
	   }
	   else if($psw=="")
	   {
		   $msg="Please enter your password.";
	   }
	   else if($psw!=$prsw)
	   {
		   $msg="Both password should be same.";
	   }
	   else
	   {
	   $q=mysql_query("insert into public_signup(Name,Email,Aadhaar,Contact,Password,Gender)values('$pname','$email','$adr','$contact','$psw','$gen')");
	   if($q==true)
	   {
		   $msg="Your account has been successfully created!";
	   }
	   else
	   {
		   $msg="Error while creating account.";
	   }
   }
   }
   //officer database connection
    $msg1="";
   if(isset($_REQUEST["obtnsubmit"]))
   {
	   $oname=$_REQUEST["oname"];
	   $email=$_REQUEST["oemail"];
	   $contact=$_REQUEST["ocontact"];
	   $psw=$_REQUEST["opassword"];	 
	   $gen=$_REQUEST["ogen"]; 
	   $dp=$_REQUEST["odep"]; 
	   $level=$_REQUEST["olevel"]; 
	   if($oname=="")
	   {
		   $msg="Please enter your name.";
	   }
	   else if($contact=="")
	   {
		   $msg="Please enter your mobile number.";
	   }
	   else if($email=="")
	   {
		   $msg="Please enter your email.";
	   }
	   else if($psw=="")
	   {
		   $msg="Please enter your password.";
	   }
	   else
	   {
	   $q=mysql_query("insert into officer_signup(Name,Email,Contact,Password,Gender,Dept_No,Level)values('$oname','$email','$contact','$psw','$gen','$dp','$level')");
	   if($q==true)
	   {
		   $msg="Your account has been successfully created!";
	   }
	   else
	   {
		   $msg="Error while creating account.";
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
<title>Public Compalint System</title>
<script  type="text/javascript">
function fun()
			{
				var pname=document.getElementById("pname").value;
				var pemail=document.getElementById("pemail").value;
				var paadhar=document.getElementById("aadhar").value;
				var pcontact=document.getElementById("pcontact").value;
				var psw=document.getElementById("pass").value;
				var cpsw=document.getElementById("con_pass").value;
				if(pname=="")
				{
					alert("Please enter name..");
					document.getElementById("pname").focus();
					return false;
				}
				if(pemail=="")
				{
					alert("Please enter email..");
					document.getElementById("pemail").focus();
					return false;
		        }
				if(paadhar=="")
				{
					alert("Please enter aadhar no..");
					document.getElementById("aadhar").focus();
					return false;
				}
				if(pcontact=="")
				{
					alert("Please enter mobile no..");
					document.getElementById("pcontact").focus();
					return false;
				}
				else if(psw=="")
				{
					alert("Please enter password..");
					return false;
				}
				else if(cpsw=="")
				{
					alert("Please enter confirm password..");
					return false;
				}
				else if(psw!=cpsw)
				{
					alert("Both password are not same...");
					return false;
				}
			}
 //officer validation javascript......................................
             
 function fun1()
			{
				var oname=document.getElementById("oname").value;
				var oemail=document.getElementById("oemail").value;
				var ocontact=document.getElementById("ocontact").value;
				var opsw=document.getElementById("opass").value;
				var ocpsw=document.getElementById("ocon_pass").value;
				if(oname=="")
				{
					alert("Please enter name..");
					document.getElementById("oname").focus();
					return false;
				}
				if(oemail=="")
				{
					alert("Please enter email..");
					document.getElementById("oemail").focus();
					return false;
		        }
				if(ocontact=="")
				{
					alert("Please enter mobile no..");
					document.getElementById("ocontact").focus();
					return false;
				}
				else if(opsw=="")
				{
					alert("Please enter password..");
					return false;
				}
				else if(ocpsw=="")
				{
					alert("Please enter confirm password..");
					return false;
				}
				else if(opsw!=ocpsw)
				{
					alert("Both password are not same...");
					return false;
				}
			}      

</script>

 <script  type="text/javascript">
      function checkValidName(nameID){
		$(nameID).blur(function(){
		var name=$(nameID).val();
			if(validatename(name))
		$(this).css("border","1px solid green");
		else
			$(this).css("border","1px solid red");
		});
		}
		
		
		
		function validatename(name){
			if(name.match(/[a-zA-Z]/))
				return true;
			else
				return false;
		}
		
		
		
		function checkValidEmail(emailID){
		$(emailID).blur(function(){
		var email=$(emailID).val();
		if(validateemail(email))
			{
				$(this).css("border","1px solid green");
		}
		else
		$(this).css("border","1px solid red");
		
		});
		}
		
		
		
		function validateemail(email){
		if(email.match(/[a-zA-Z0-9.-_]+@[a-zA_Z.-]+\.[a-zA-Z]{2,6}/))
		return true;
		else
		return false;
		}
		
		
		
		function checkValidPhone(phoneID){
		$(phoneID).blur(function(){
			var phone=$(this).val();
		if(validatephone(phone))
		$(this).css("border","1px solid green");
		else
		$(this).css("border","1px solid red");
		});
		
		}
		
		
		
		function validatephone(phone){
		//re=/^[0-9]{10}$/;
		if(phone.match(/[0-9]{10}/))
			return true;
		else 
			return false;
		
		}


		function checkValidAadhar(aadharID){
		$(aadharID).blur(function(){
			var aadhar=$(this).val();
		if(validateaadhar(aadhar))
		$(this).css("border","1px solid green");
		else
		$(this).css("border","1px solid red");
		});
		
		}
		
		
		
		function validateaadhar(aadhar){
		if(aadhar.match(/[0-9]{14}/))
			return true;
		else 
			return false;
		
		}
		
		
		
		
			$(document).ready(function(){
				checkValidName("#pname");
				checkValidEmail("#pemail");
				checkValidPhone("#pcontact");
				checkValidAadhar("#aadhar");
		
		});

$(document).ready(function(){
	
	
	var check=0;

	$("#pass").on("focus",function(){
		$("#pass_info").show();

	});



	$("#pass").on("blur",function(){
		$("#pass_info").hide();
});



	$("#pass").on("keyup",function(){
var pass=$("#pass").val();

//validate length
if(pass.length<8)
{
$("#length").addClass("invalid").removeClass("valid");

}
else
{
$("#length").addClass("valid").removeClass("invalid");

}
//validate lowercase
if(pass.match(/[a-z]/))
{
	$("#lowercase").addClass("valid").removeClass("invalid");
	
}
else
{$("#lowercase").addClass("invalid").removeClass("valid");
}

//validate uppercase
if(pass.match(/[A-Z]/))
{
	$("#uppercase").addClass("valid").removeClass("invalid");
	}
else
{$("#uppercase").addClass("invalid").removeClass("valid");
}

//validate number
if(pass.match(/[0-9]/))
{
	$("#number").addClass("valid").removeClass("invalid");

}
else
{$("#number").addClass("invalid").removeClass("valid");
}


	});
//checking confirm password
	$("#con_pass").on("keyup",function(){
var con_pass=$(this).val();
var pass=$("#pass").val();
if(pass==con_pass){
$("#right").css("display","block");
$("#wrong").css("display","none");
check=1;
}
else{
	$("#right").css("display","none");
$("#wrong").css("display","block");
check=0;
}


	});


$("#myForm").on("submit",function(){
if($("li").hasClass("invalid"))
	{
$("#pass_info").show();
return false;		
	}

else{

	if(check==1)
	return true;
	else 
	{
			return false;
	}
}
	
});

	});


 </script>
 	<style>
#pass_info li{
	list-style: none;
}

#pass_info {
	display:none;
	margin-top:10px;
	margin-left:5px;
	border:1px solid;
	border-radius:10px;
	height:125px;
	width:350px;
	font-size: 14px;
	text-align: left;
	padding-right:20px;
}

.valid{
background:url('images/right.png');
	background-repeat:no-repeat;
	padding-left: 20px;
	color:white;
}
.invalid{
	background:url('images/wrong.png');
	background-repeat:no-repeat;
	padding-left: 20px;
	color:red;
}

#right{display:none;}
#wrong{display:none;}
	</style>
	   </head>
   <body>
	<?php include("header.php"); ?>	
   <section id="login">
       <div class="container">
           <div class="loginform">
                <div class="row">
                        <div class="col login-header">
                            <h2>Sign Up Form</h2>
                            <hr class="light">
                        </div>
                   </div>
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
                       <label>Full Name</label>
                       <input type="text" class="form-control form-control-sm" placeholder="Full name" name="pname" id="pname"/>
                     <label>Email</label>
                     <input type="email" class="form-control form-control-sm" placeholder="Your Email" name="pemail" id="pemail"/>
					 <label>Aadhaar Number</label>
                     <input type="number" class="form-control form-control-sm" placeholder="Aadhaar Number" name="aadhaar" id="aadhar"/>
                     <label>Contact Number</label>
                     <input type="number" class="form-control form-control-sm" placeholder="Mobile Number" name="pcontact" id="pcontact"/>
                     <label>Password</label>
                     <input type="password" class="form-control form-control-sm" placeholder="Password" name="ppassword" id="pass"/>
                     <div id="pass_info">
						<ul>
							<li id="lowercase" class="invalid">Password Must have <b>atleast one Lower case</b></li>
							<li id="uppercase" class="invalid">Password Must have <b>atleast one Upper case</b></li>
							<li id="number" class="invalid">Password Must have <b>atleast one Number</b></li>
							<li id="length" class="invalid">Password Must have <b>atleast 8 characters</b></li>
						</ul>
					</div>
					 <label>Re-enter Password</label>
                     <input type="password" class="form-control form-control-sm" placeholder="Re-enter Password" name="prpassword" id="con_pass"/>
		             <img id="right" src="right.png">
	                 <img id="wrong" src="wrong.png">
					 <br>
                     <div class="row">
                            <div class="col-sm-4">
                                <label>Gender</label>
                            </div>
                            <div class="col-sm-8" style="color:white;">
							<input type="radio" name="pgen" value="male" checked/>&nbsp; Male
							<input type="radio" name="pgen" value="female"/>&nbsp; Female
                            </div>
                            </div>
                     <br>
                     <input type="submit" onclick="return fun()" class="btn btn-success form-control" value="Sign Up" name="pbtnsubmit" />
					 <span style="color:red;"><?php echo $msg; ?></span>
					 </div>



               </form>
					 <div class="tab-pane" id="officer" role="tabpanel">
				<br>
				<form method="post">
                       <label>Full Name</label>
                       <input type="text" class="form-control form-control-sm" placeholder="Full name" name="oname" id="oname"/>
                     <label>Email</label>
                     <input type="email" class="form-control form-control-sm" placeholder="Your Email" name="oemail" id="oemail"/>
                     <label>Contact Number</label>
                     <input type="number" class="form-control form-control-sm" placeholder="Mobile Number" name="ocontact" id="ocontact"/>
                     <label>Password</label>
                     <input type="password" class="form-control form-control-sm" placeholder="Password" name="opassword" id="opassword"/>
                     <label>Re-enter Password</label>
                     <input type="password" class="form-control form-control-sm" placeholder="Re-enter Password" id="reopassword"/>
                     <br>
                     <div class="row">
                            <div class="col-sm-4">
                                <label>Gender</label>
                            </div>
                            <div class="col-sm-8" style="color:white;">
							<input type="radio" name="ogen" value="male" checked/>&nbsp; Male
							<input type="radio" name="ogen" value="female"/>&nbsp; Female
                            </div>
                            </div>
                     <br>
					 <label>Department</label>
							<select name="odep" class="form-control">
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
							<br>
							</select>
							<label>Officer Level</label>
							<select name="olevel" class="form-control">
							    <option disable>--select type--</option>
								<?php
								$q=mysql_query("select * from level_officer");
								while($row=mysql_fetch_array($q))
								{
							?>
									<option value="<?php echo $row["Level_Id"]; ?>"><?php echo $row["Level_Name"]; ?></option>
							<?php	
								}
							?>
							</select>
							   <br>
                     <input type="submit" onclick="return fun1()" class="btn btn-info form-control" value="Sign Up" name="obtnsubmit"/>
					 <span style="color:red">
					 <?php echo $msg1; ?>
					 </span>
					 </div>
</form>
					 </div>
					 </br>
					 <p class="text-center" style="color:white;">
                      Already have an account? <a href="login.php">Login Now</a>
                     </p>
</div>
       
       </div>
   </section> 
  <?php include("footer.php"); ?>
   </body>
</html>
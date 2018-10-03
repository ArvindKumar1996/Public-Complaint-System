<?php 
include("connection.php");
$msg="";
if(isset($_REQUEST["btnsubmit"]))
{
	$name=$_REQUEST("aname");
	$gender=$_REQUEST("gen");
	$addhaar=$_REQUEST("aaddhaar");
	$email=$_REQUEST("aemail");
	$pincode=$_REQUEST("pcode");
	$address=$_REQUEST("aaddress");
	$department=$_REQUEST("Department");
	$type=$_REQUEST("atype");
	$complain=$_REQUEST("ycomplain");
	
	if($name=="")
	   {
		   $msg="Please enter your name.";
	   }
	   else if($gender=="")
	   {
		   $msg="Please select your gender.";
	   }
	   else if($addhaar=="")
	   {
		   $msg="Please enter your 12 digit addhaar number.";
	   }
	   else if($email=="")
	   {
		   $msg="Please enter your password.";
	   } else if($pincode=="")
	   {
		   $msg="Please enter your six digit pincode.";
	   }
	    else if($address=="")
	   {
		   $msg="Please enter your address.";
	   }
	    else if($department=="")
	   {
		   $msg="Please select your department.";
	   }
	    else if($type=="")
	   {
		   $msg="Please select your complaint type.";
	   }
	    else if($complaint=="")
	   {
		   $msg="Please write your complain.";
	   }
	   else
	   {
	   $q=mysql_query("insert into register_complain(name,gender,addhaar,email,pincode,address,department,type,complain)values('$name','$gender','$addhaar''$email','$pincode','$address','$department','$type','$complain')");
	   if($q==true)
	   {
		   $msg="Your complain has successfully registerd!";
	   }
	   else
	   {
		   $msg="Error while register a complain.";
	   }
   }
   }
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="style.css" type="text/css" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="style.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title></title>
	<style>
	c
	{color:white;
	}
	</style>
	<script>
      // Create a method for Exception handling
	  window.onerror=function(msg,url,line,col)
	  {
	  alert("Error Message : "+msg+" File Location :"+url+" Line Number :"+line+" Column Number :"+col);
	  }
     var ucity=["Misbehave of Officer","Drain Problem","House Tax Problem","Corruption"];
     var mcity=["Electricity Bill","Misbehave of Officer","Transformer Fuse","Electicity Problem"];
     var bcity=["Water Supply Problem","Water bill Problem","Misbehave of Officer","Corruption"];
     var dcity=["Officer not take strict action","working in Factory","Illegal Activity","Work in Hotel,Shop and other "];
	 var wcity=["Misbehave of Officer","Related to scheme of government","Corruption "];
	
	 function SelectState(){
	       var v1=document.getElementById("ddlstate").value;
		   if(v1=="0")
		   {
		   alert("Plz select any state.");
		   document.getElementById("department").innerHTML="";
		   }
		   else if(v1=="M"){
		       var s1="<select><option value='0'>--Select Problem--</option>";
			   for(var i=0;i<ucity.length;i++){
			   s1+="<option value="+ucity[i]+">"+ucity[i]+"</option>";
			   }
			   s1+="</select>";
			   document.getElementById("depart").innerHTML=s1;
		   }
		   else if(v1=="E"){
		       var s1="<select><option value='0'>--Select Problem--</option>";
			   for(var i=0;i<mcity.length;i++){
			   s1+="<option value="+mcity[i]+">"+mcity[i]+"</option>";
			   }
			   s1+="</select>";
			   document.getElementById("depart").innerHTML=s1;
		   }
		   else if(v1=="J"){
		       var s1="<select><option value='0'>--Select Problem--</option>";
			   for(var i=0;i<bcity.length;i++){
			   s1+="<option value="+bcity[i]+">"+bcity[i]+"</option>";
			   }
			   s1+="</select>";
			   document.getElementById("depart").innerHTML=s1;
		   }
		     else if(v1=="C"){
		       var s1="<select><option value='0'>--Select Problem--</option>";
			   for(var i=0;i<dcity.length;i++){
			   s1+="<option value="+dcity[i]+">"+dcity[i]+"</option>";
			   }
			   s1+="</select>";
			   document.getElementById("depart").innerHTML=s1;
		   }
		   else if(v1=="W"){
		       var s1="<select><option value='0'>--Select Problem--</option>";
			   for(var i=0;i<dcity.length;i++){
			   s1+="<option value="+wcity[i]+">"+wcity[i]+"</option>";
			   }
			   s1+="</select>";
			   document.getElementById("depart").innerHTML=s1;
		   }
	 }
</script>
	
	
	
	
</head>
<body>
<?php include('header.php');?>
   <section id="login">
       <div class="container-fluid">
           <form class="loginform" method="post" action="welcome.php">
               <div class="row">
                    <div class="col login-header">
                        <h5>Registeration Form</h5>
                        <hr class="light">
                    </div>
               </div>
               <div class="row">
                   <div class="col">
               Name Of Applicant:<input type="textbox" class="form-control form-control-sm" name="aname" placeholder="Please enter your full name"/>
			   
                Gender:<c>	Male</c>&nbsp;<input type="radio" value="Male" id="r1"  name="gen" checked />&nbsp;&nbsp;&nbsp;&nbsp;
						<c>Female</c>&nbsp;<input type="radio" value="Female" id="r2" name="gen" /><br>
						
						Addhaar Number:<input type="textbox" class="form-control form-control-sm" name="aaddhaar" placeholder="Please enter your addhaar mumber"/>
						
						Email id:   <input type="email" class="form-control form-control-sm" name="aemail"placeholder="Please enter your email"/>
						
                        Pin Code:   <input type="textbox"name="pcode"class="form-control form-control-sm" placeholder="Please enter your six digit pin code  "/>
						 Address:   <input type="textbox" name="aaddress" class="form-control form-control-sm" placeholder="Please enter your address  "/>
						
					
						Department:<select id="ddlstate"name="Department" class="form-control"onchange="SelectState()">
                                     <option value="M">Municipality</option>
                                     <option value="E">Electricity</option>
                                    <option value="J">Jal Nigam</option>
                                     <option value="C">Child Labour</option>
									   <option value="W">Women Empowerment</option>
                         </select>
						 Complain Type:<select id="depart" name="atype" class="form-control form-control-sm"></select>      
                                  
                     Your Complain: <textarea name="ycomplain"class="form-control" placeholder="Complain here.."></textarea>
							   <input type="checkbox"/> <span style="color:darkblue;"> &nbsp;Are you agree with our terms and conditions.</span><br><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit"name="btnsubmit" class="btn btn-info btn-form-control"/>
					<?php $msg="";?>	
                  
					
				   </div>
               </div>
            </form>
       </div>
   </section> 
   
</body>
</html>

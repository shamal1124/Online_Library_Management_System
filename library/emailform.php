<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Email Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
   
	<!-- header -->
    <div class="container-fluid">
        <div class="row" style="background-color: darkblue; height:25px; ">
            <div class="col-sm-12">
                <label style="color: white; margin-left: 500px; margin-top: 3px;"> DTE Code:601</label>
                <label style="color: white; margin-left: 200px;"> MSBTE Code:0011</label>
            </div>
        </div>
        <div class="row " style="border: 1px solid darkblue; height:130px;">
            
           
            <div class="col-12">
                <center><label style="color: darkblue;  font-size: 28px;padding-top: 20px;"> Government Polytechnic Kolhapur </label></center> <!-- <br> -->
                <center><label style="color: darkblue; font-family: serif; font-size: 18px;"> ( First Autonomous Institude of Government of Maharastra )</label></center>

            </div>
            
        </div>
    </div>
<!-- marquee -->
    <div class="container-fluid">
        <div class="row" style="background-color: darkblue; height:25px;">
            <div class="col-sm-12">
                <marquee direction="right" style="color: white;font-size: 18px;">Departmental Library ( Information Technology )</marquee>
            </div>
        </div>
    </div>
<!-- marquee -->
    <!-- header -->


    <!-- back button -->
      
      <div class="row">
      	<div class="col-12">
      		<a href="dashboard.php"class="btn btn-primary"
      		                        style="margin-left: 90%;
      		                             margin-top: 10px;
      		                             width: 80px;">Back</a>
      	</div>
      </div>

     <!-- back button -->

    

	<?php 	
     
     if (isset($_REQUEST['email'])) {
     	$admin_email="vishvalfadatare@gmail.com";
     	$email=$_REQUEST['email'];
     	$subject=$_REQUEST['subject'];
     	$message=$_REQUEST['message'];
     	

     	mail($admin_email,$subject,$message,"From:".$email);

     	echo"<div class='alert alert-success' style='margin-top:10px'>Email Send Successfully</div>";
     }
     else{

	 ?>

	

	<form method="post" style="border: 2px solid darkblue;margin:100px 500px 100px 500px">
         <center><h3 style="color: darkblue;">Email Form</h3></center>
         <hr style="color: royalblue;border-width: 3px;">
		<div class="row"  style="padding:15px 15px 0px 15px">
			<div class="col-6">
				<label><b>Enter your Email</b></label>
			</div>
			<div class="col-6">
				<input type="text" name="email">
			</div>
		</div>

		<div class="row" style="padding:15px 15px 0px 15px">
			<div class="col-6">
				<label><b>Enter Student ID:</b></label>
			</div>
			<div class="col-6">
				<input type="text" name="subject">
			</div>
		</div>

		<div class="row" style="padding:15px 15px 15px 15px">
			<div class="col-6">
				<label><b>Enter Message:</b></label>
			</div>
			<div class="col-6">
				<input type="text" name="message">
			</div>
		</div>

		<div class="row" style="padding:15px 15px 15px 15px">
        
		<div class="col-12" style="margin-left: 35%;">
				<input type="submit" value="Submit" class=" btn btn-outline-primary">
			</div>	
		</div>
		
	</form>

	<?php 	
      }
	 ?>
     
     
</body>
</html>
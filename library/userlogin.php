
<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['login']!=''){
$_SESSION['login']='';
}
if(isset($_POST['login']))
{

$email=$_POST['emailid'];
$password=md5($_POST['password']);
$sql ="SELECT EmailId,Password,StudentId,Status FROM tblstudents WHERE EmailId=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

if($query->rowCount() > 0)
{
 foreach ($results as $result) {
 $_SESSION['stdid']=$result->StudentId;
if($result->Status==1)
{
$_SESSION['login']=$_POST['emailid'];
echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
} else {
echo "<script>alert('Your Account Has been blocked .Please contact admin');</script>";

}
}

} 

else{
echo "<script>alert('Invalid Details');</script>";
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

    <!-- header -->
    <div class="container-fluid">
        <div class="row" style="background-color: darkblue; height:25px; ">
            <div class="col-sm-12">
                <label style="color: white; margin-left: 500px; "> DTE Code:601</label>
                <label style="color: white; margin-left: 200px;"> MSBTE Code:0011</label>
            </div>
        </div>
        <div class="row " style="border: 1px solid darkblue; height:130px;">
            
           
            <div class="col-8">
                <center><label style="color: darkblue;  font-size: 28px; margin-top: 23px; margin-left: 500px;"> Government Polytechnic Kolhapur </label></center> 
                <center><label style="color: darkblue; font-family: serif; font-size: 18px; margin-left: 500px;"> ( First Autonomous Institude of Government of Maharastra )</label></center>

            </div>
            
        </div>
    </div>
<!-- marquee -->
    <div class="container-fluid">
        <div class="row" style="background-color: darkblue; height:28px;">
            <div class="col-sm-12">
                <marquee direction="right" style="color: white;font-size: 18px; margin-bottom: 10px;">Departmental Library ( Information Technology )</marquee>
            </div>
        </div>
    </div>
<!-- marquee -->
    <!-- header -->
   
	<style type="text/css">
		   
           *{
            padding: 2px;
           }

           div.login-form form{
               padding-top: 10px;
               padding: 0px;
               margin: 20px;

               box-sizing: border-box;
           }

           /*body{
            margin: 10%;
           }*/

           div.login-form{
            
             margin-left:500px;
             width: 400px;
             background-color: white;
             box-shadow: 0PX 5PX 10px black;
             border: 1px solid darkblue;

           }
           

           div.login-form h2{
            text-align: center;
            background-color: rgb(43, 84, 126);
            padding: 6px 0px;
            color: white;
           }

           div.login-form form{
            padding: 10px 10px;
           }

           

           


           

           
	</style>

    
    


	<div class="login-form" style="margin-left: 550px; margin-top: 60px;">
		<h2 style="height: 50px;">User Login</h2>
		
        <form  method="post">
        	
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col">
                        <label style="margin-left: 0px; font-family:sans-serif;">Enter Email Id</label><br>
                        <input type="text" name="emailid" placeholder="Enter Email" style="height: 35px; width: 100%; border: 1px solid darkblue;">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label style="margin-left: 0px;font-family:sans-serif;">Password</label><br>
                        <input type="password" name="password" placeholder="Enter Password"  style="height: 35px; width: 100%; border: 1px solid darkblue;">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">

                        <center><button type="submit" name="login" class="btn btn-info">LOGIN </button> | <a href="signup.php">Not Register Yet</a></center>
                        
                    </div>
                </div>


            </div>
             <input type="hidden" name="page_action" value="admin_login">
        </form>

	</div>


	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

     
     


</body>
</html>
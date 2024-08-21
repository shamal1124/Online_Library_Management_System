<div class="container-fluid">
        <div class="row" style="background-color: darkblue; height:25px; ">
            <div class="col-sm-12">
                <label style="color: white; margin-left: 500px; margin-top: 3px;"> DTE Code:601</label>
                <label style="color: white; margin-left: 200px;"> MSBTE Code:0011</label>
            </div>
        </div>
        <div class="row " style="border: 1px solid darkblue; height:130px;">
            
           
            <div class="col-8">
                <center><label style="color: darkblue;  font-size: 28px; margin-top: 23px;"> Government Polytechnic Kolhapur </label></center> <!-- <br> -->
                <center><label style="color: darkblue; font-family: serif; font-size: 18px; "> ( First Autonomous Institude of Government of Maharastra )</label></center>

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
<div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            
<?php if($_SESSION['login'])
{
?> 
            <div class="right-div">
                <a href="logout.php" class="btn btn-danger pull-right">LOG ME OUT</a>
            </div>
            <?php }?>
        </div>
    </div>
    <!-- LOGO HEADER END-->
<?php if($_SESSION['login'])
{
?>    
<section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="dashboard.php" class="menu-top-active">DASHBOARD</a></li>
                            <!-- <li><a href="issued-books.php">Issued Books</a></li> -->
                            <!-- Email -->
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">Issued Books <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="issued-books.php">Issued Books</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="emailform.php">Send Request To Issuse</a></li>
                                </ul>
                            </li>
                            <!-- Email -->
                             <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Account <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="my-profile.php">My Profile</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="change-password.php">Change Password</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php } else { ?>
        <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">                        
                          
      <li><a href="index.php">Home</a></li>
      <li><a href="userlogin.php">User Login</a></li><!-- index.php#ulogin -->
                            <li><a href="signup.php">User Signup</a></li>
                         
                            <li><a href="adminlogin.php">Admin Login</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php } ?>
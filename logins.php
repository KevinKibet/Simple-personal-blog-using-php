<?php

require_once("include/DB.php");


?>
<?php

require_once("include/Sessions.php");


?>

<?php

require_once("include/Functions.php");


?>
<?php
if(isset($_POST["submit"])){
	
	$Username=mysqli_real_escape_string($Connection,$_POST["Username"]);
	$Password=mysqli_real_escape_string($Connection,$_POST["Password"]);
	
	date_default_timezone_set("Africa/Nairobi");
$CurrentTime=time();
//$DateTime=strftime("%Y-%m-%d %H:%M:%S",$CurrentTime);

	if(empty($Username)||empty($Password)){
		
		$_SESSION["ErrorMessage"]= "all fields must be filled out";
		Redirect_to("logins.php");
	}
	else{
	 $Find_Account=Login_Atempt($Username,$Password);
	 $_SESSION['User_id']=$Find_Account['id'];
	 $_SESSION['username']=$Find_Account['username'];
	 if($Find_Account){
		 $_SESSION["SuccessMessage"]="logged in successfully {$_SESSION['username']}";
	    Redirect_to("dashboard.php");
	 }else{
		$_SESSION["ErrorMessage"]= "wrong password Try again";
		Redirect_to("logins.php");
	 }
	}
	 
	 
}
//fghjjhghjh
?>
<!DOCTYPE>

<html>
<head>


<title>Admin Login</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootsrap.min.js"></script>
<link rel="stylesheet" href="css/adminstyles.css">

<style>
.Fieldinfo{
	
	color: rgb(251,174,44);
	font-family: Bitter,Georgia,'Times Nw Roman',Times,serif;
	font-size: 1.2em;
}
body{
	
	background-color:#ffffe6;
}
.hj{
	background-color:#b3b3b3;
	
}
h4{
	
	color:#ffffff;
}
</style>

</head>
<body>
<div  style="height: 10px; background: #27aae1"></div>  
<nav  class="navbar navbar-inverse" role="navigation">

<div class="container">
<div class="navbar-header">

<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
<span class="sr-only">Toggle Navigaton</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<!--
<a class="navbar-brand" href="blog.php">
<img src="" width="200px" height="30px">
</a>
-->

</div>
       <div class="collapse navbar-collapse" id="collapse">

       
      <h4>Kevin</h4>   
</div>	  
</div>

</nav>
<div class="Line"  style="height: 10px; background: #27aae1"></div>

<div class="container-fluid">
<div class="row">


<div class="col-sm-offset-4 col-sm-4">
<br></br>
<br></br>
<br></br>
<?php  echo Message();
       echo SuccessMessage();
?>
<h3>WELCOME !</h3>

<div>
<form action="logins.php" method="post">

<fieldset>

         <div class="form-group">
		 
        <label for="Username"><span class="Fieldinfo">User Name:</span></label>
		<div class="input-group input-group">
		 <span  class="input-group-addon">
		
		 <span class="glyphicon glyphicon-user"></span>
		 </span>
        <input class="form-control" type="text" name="Username" id="Username" placeholder=" User Name">
		</div>
        </div>
		<div class="form-group">
        <label for="Password"><span class="Fieldinfo"> Password:</span></label>
		<div class="input-group input-group">
		<span  class="input-group-addon">
		<span class="glyphicon glyphicon-lock"></span>
		</span>
        <input class="form-control" type="Password" name="Password" id="Password" placeholder="Password">
		</div>
		</div>
		 <br>
          <input class="hj btn btn-block" type="submit" name="submit" value="Login">
</fieldset>
       </br>    
</form>



</div><!---side area-->
</div><!---side area-->

</div>


</body>

</html> 
<?php

require_once("include/DB.php");


?>
<?php

require_once("include/Sessions.php");


?>

<?php

require_once("include/Functions.php");


?>
<?php  Confirm_Login(); ?>
<?php
if(isset($_POST["submit"])){
	
	$Category=mysqli_real_escape_string($Connection,$_POST["Category"]);
	date_default_timezone_set("Africa/Nairobi");
$CurrentTime=time();
//$DateTime=strftime("%Y-%m-%d %H:%M:%S",$CurrentTime);
$DateTime=strftime("%B-%d-%Y   %H:%M:%S",$CurrentTime);
 $DateTime;
 $Admin=$_SESSION["Username"];
	if(empty($Category)){
		
		$_SESSION["ErrorMessage"]= "all fields must be filled out";
		Redirect_to("Categories.php");
	}elseif(strlen($Category)>99){
	 
	 $_SESSION["ErrorMessage"]="Too long Name";
	Redirect_to("Categories.php");
	}else{
	 
	 global $Connection;
	 $Query="INSERT INTO category(datetime,name,creatorname)
	 VALUES('$DateTime','$Category','$Admin')";
	 $Execute=mysqli_query($Connection,$Query);
	 if($Execute){
		 $_SESSION["SuccessMessage"]="Category added successfully";
	 Redirect_to("categories.php");
	 }else{
	$_SESSION["ErrorMessage"]="Category failed to add";
	 Redirect_to("categories.php"); 
	 }
	 
	 }
}
//fghjjhghjh
?>
<!DOCTYPE>

<html>
<head>


<title>Adnin Dashboard</title>

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


</style>

</head>
<body>
<div class="container-fluid">
<div class="row">

<div class="col-sm-2">
<h1></h1>
<ul class="nav nav-pills nav-stacked">
<li><a href="dashboard.php"><span class="glyphicon glyphicon-th"></span>&nbsp;Dashboard</a></li>
<li class="active"><a href="Categories.php"><span class="glyphicon glyphicon-tags"></span>&nbsp;Categories</a></li>
<li><a href="Addnewpost.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Add New Post</a></li>
<li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;Manage Admin</a></li>
<li><a href="#"><span class="glyphicon glyphicon-comment"></span>&nbsp;Comments</a></li>
<li><a href="#"><span class="glyphicon glyphicon-equalizer"></span>&nbsp;Live blog</a></li>
<li><a href="#"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>

</ul>



</div>
<div class="col-sm-10">
<h1>Manage Categories</h1>
<?php  echo Message();
       echo SuccessMessage();
?>
<div>
<form action="Categories.php" method="post">

<fieldset>

         <div class="form-group">
        <label for="categoryname"><span class="Fieldinfo"> Name:</span></label>
        <input class="form-control" type="text" name="Category" id="categoryname" placeholder="Name">
         </div>
		 <br>
          <input class="btn btn-success btn-block " type="submit" name="submit" value="Add New Category">
</fieldset>
       </br>    
</form>

</div>
<div class="table-responsive">
<table class="table table-striped  table-hover"  >
<tr>
<th>Sr No</th>
<th>Date & Time</th>
<th>Category Name</th>
<th>Creator Name</th>
<th>Action</th>
</tr>
<?php
global $Connection;
$ViewQuery="SELECT * FROM category ORDER BY datetime desc";
$Execute=mysqli_query($Connection,$ViewQuery);
$SrNo=0;
while($DataRows=mysqli_fetch_array($Execute)){
	$id=$DataRows['id'];
	$DateTime=$DataRows['datetime'];
	$CategoryName=$DataRows['name'];
	$CreatorName=$DataRows['creatorname'];
	$SrNo++;


?>

<tr>
<td><?php echo $SrNo;  ?></td>
<td><?php echo $DateTime;  ?></td>
<td><?php echo $CategoryName;  ?></td>
<td><?php echo $CreatorName;  ?></td>
<td><a href="deletecategory.php?id=<?php echo $id; ?>"><span  class="btn btn-danger">Delete</span><a/> </td>
</tr>
<?php } ?>
</table>
</div>


</div><!---side area-->
</div><!---side area-->

</div>
<div id="Footer">
<hr><p>Theme by | Kevin Kibet | &copy ;2018-2020 ----All rights Reserved</p>
<a style="color: white; text-decoration: none; cursor: pointer; font-weight: bold;" href="#"> 

<p>thhhen eeheh thhtrj jfjjvvjfvjv jjdjjjjffjhfhvhfhv jjdfvjjjfjvfjvjff<br>hdhhdddhdhdhdhhddh

</p>
<hr>
</a>

</div>
<div  style="height: 10px; background: #27aae1">
</body>

</html> 
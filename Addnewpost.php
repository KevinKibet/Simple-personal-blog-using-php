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
	
	$Title=mysqli_real_escape_string($Connection,$_POST["Title"]);
	$Category=mysqli_real_escape_string($Connection,$_POST["Category"]);
        $Post=mysqli_real_escape_string($Connection,$_POST["Post"]);
	date_default_timezone_set("Africa/Nairobi");
$CurrentTime=time();
//$DateTime=strftime("%Y-%m-%d %H:%M:%S",$CurrentTime);
$DateTime=strftime("%B-%d-%Y   %H:%M:%S",$CurrentTime);
 $DateTime;
 $Admin=$_SESSION["Username"];
 $Image=$_FILES["Image"]["name"];
 $Target="Upload/".basename($_FILES["Image"]["name"]);
 
	if(empty($Title)){
	 
	 $_SESSION["ErrorMessage"]="Title can't be empty";
	 Redirect_to("Addnewpost.php");
	}elseif(strlen($Title)<2){
	 
	 $_SESSION["ErrorMessage"]="Title should be atleast 2 characters";
	Redirect_to("Addnewpost.php");
	}else{
	 
	 global $Connection;
	 $Query="INSERT INTO admin_panel(datetime,title,category,author,image,post)
	 VALUES('$DateTime','$Title','$Category','$Admin','$Image','$Post')";
	 $Execute=mysqli_query($Connection,$Query);
	 move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);
	 if($Execute){
		 $_SESSION["SuccessMessage"]="post added successfully";
	 Redirect_to("Addnewpost.php");
	 }else{
	$_SESSION["ErrorMessage"]="something went wrong";
	 Redirect_to("Addnewpost.php"); 
	 }
	 
	 }
}
?>
<!DOCTYPE>

<html>
<head>


<title>Add New Post</title>

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
<li><a href="Categories.php"><span class="glyphicon glyphicon-tags"></span>&nbsp;Categories</a></li>
<li class="active"><a href="Addnewpost.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Add New Post</a></li>
<li><a href="admins.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Manage Admin</a></li>
<li><a href="#"><span class="glyphicon glyphicon-comment"></span>&nbsp;Comments</a></li>
<li><a href="#"><span class="glyphicon glyphicon-equalizer"></span>&nbsp;Live blog</a></li>
<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>

</ul>



</div>
<div class="col-sm-10">
<h1>Add New Post</h1>
<?php  echo Message();
       echo SuccessMessage();
?>
<div>
<form action="Addnewpost.php" method="post" enctype="multipart/form-data">

<fieldset>
         
         <div class="form-group">
        <label for="categoryname"><span class="Fieldinfo"> Name:</span></label>
        <input class="form-control" type="text" name="Title" id="title" placeholder="Title">
         </div>
		 <div class="form-group">
         <label for="categoryset"><span class="Fieldinfo"> Category</span></label>
		 
		 <select class="form-control" id="categoryselect" name="Category">
		 
		     <?php
        global $Connection;
        $ViewQuery="SELECT * FROM category ORDER BY datetime desc";
        $Execute=mysqli_query($Connection,$ViewQuery);

        while($DataRows=mysqli_fetch_array($Execute)){
	    $id=$DataRows['id'];
	
	     $CategoryName=$DataRows['name'];

?>

<option><?php echo $CategoryName ?></option>
<?php  } ?>
		 
		 
		 </select>
		 </div>
		 
		 <div class="form-group">
<label for="imageselect"><span class="Fieldinfo"> Select Image:</span></label>
<input type="file" class="form-control" name="Image" id="imageselect">
</div>
<div class="form-group">
<label for="postarea"><span class="Fieldinfo"> Post:</span></label>
<textarea class="form-control" name="Post" id="postarea"></textarea>
</div>
		 
		 
		 <br>
          <input class="btn btn-success btn-block " type="submit" name="submit" value="Add New Post">
</fieldset>
       </br>    
</form>

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
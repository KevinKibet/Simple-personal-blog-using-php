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
 $Admin="Kevin Kibet";
 $Image=$_FILES["Image"]["name"];
 $Target="Upload/".basename($_FILES["Image"]["name"]);
 
	
	
	 
	 global $Connection;
	 $Deletefromurl=$_GET['Delete'];
	 $Query="DELETE FROM admin_panel WHERE id='$Deletefromurl'";
	 $Execute=mysqli_query($Connection,$Query);
	 move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);
	 if($Execute){
		 $_SESSION["SuccessMessage"]="post deleted successfully";
	 Redirect_to("dashboard.php");
	 }else{
	$_SESSION["ErrorMessage"]="something went wrong";
	 Redirect_to("dashboard.php"); 
	 }
	 
	 
}
//fghjjhghjh
?>
<!DOCTYPE>

<html>
<head>


<title>Delete Post</title>

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
<li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;Manage Admin</a></li>
<li><a href="#"><span class="glyphicon glyphicon-comment"></span>&nbsp;Comments</a></li>
<li><a href="#"><span class="glyphicon glyphicon-equalizer"></span>&nbsp;Live blog</a></li>
<li><a href="#"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>

</ul>



</div>
<div class="col-sm-10">
<h1>Delete Post</h1>
<?php  echo Message();
       echo SuccessMessage();
?>
<div>

<?php
     $SearchQueryParameter=$_GET['Delete'];
     global $Connection;
	 $Query="SELECT * FROM admin_panel WHERE id='$SearchQueryParameter'";
	 $Execute=mysqli_query($Connection,$Query);
	 while($DataRows=mysqli_fetch_array($Execute)){
		 $Titletoupdate=$DataRows['title'];
		 $Categorytoupdate=$DataRows['category'];
		 $Imagetoupdate=$DataRows['image'];
		 $Posttoupdate=$DataRows['post'];
		 
	 }
	 

?>

<form action="deletepost.php?Delete=<?php echo $SearchQueryParameter;?>" method="post" enctype="multipart/form-data">

<fieldset>
         
         <div class="form-group">
        <label for="categoryname"><span class="Fieldinfo"> Name:</span></label>
        <input disabled value="<?php echo $Titletoupdate; ?>" class="form-control" type="text" name="Title" id="title" placeholder="Title">
         </div>
		 <div class="form-group">
		 <span class="Fieldinfo">Existing Category:</span>
		 <?php
		 echo $Categorytoupdate;
		 
		 ?>
		 </br>
		 
         <label for="categoryset"><span class="Fieldinfo"> Category</span></label>
		 
		 <select disabled class="form-control" id="categoryselect" name="Category">
		 
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
		   <span class="Fieldinfo">Existing Image:</span>
		<img src="Upload/<?php
	echo $Imagetoupdate;
		 
		 ?>" width="170px" height="70px">
		 <br>
		 
		 
<label for="imageselect"><span class="Fieldinfo"> Select Image:</span></label>
<input disabled type="file" class="form-control" name="Image" id="imageselect">
</div>
<div class="form-group">
<label for="postarea"><span class="Fieldinfo"> Post:</span></label>
<textarea  disabled class="form-control" name="Post" id="postarea">

<?php  echo $Posttoupdate; ?>
</textarea>
</div>
		 
		 
		 <br>
          <input class="btn btn-danger btn-block " type="submit" name="submit" value="Delete Post">
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
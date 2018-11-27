
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

<!DOCTYPE>

<html>
<head>

<title>Admin Dashboard</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootsrap.min.js"></script>
<link rel="stylesheet" href="css/adminstyles.css">

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

       <ul class="nav navbar-nav">

       <li><a href="#">Home</a></li>
       <li class="active"><a href="blog.php"  target="_blank">Blog</a></li>
       <li><a href="#">About Us</a></li>
       <li><a href="#">Services</a></li>
       <li><a href="#">Contact Us</a></li>
       <li><a href="#">Feature</a></li>
       </ul>
	   
      <form action="blog.php" class="navbar-form navbar-right">
           <div class="form-group">

           <input type="text" class="form-control" placeholder="search" name="Search"></input>
           </div>
          <button class="btn btn-default" name="SearchButton">Go</button>

      </form>   
</div>	  
</div>

</nav>
<div class="Line"  style="height: 10px; background: #27aae1"></div>




<div class="container-fluid">
<div class="row">

<div class="col-sm-2">
<h1></h1>
<ul class="nav nav-pills nav-stacked">
<li class="active"><a href="dashboard.php"><span class="glyphicon glyphicon-th"></span>&nbsp;Dashboard</a></li>
<li><a href="Categories.php"><span class="glyphicon glyphicon-tags"></span>&nbsp;Categories</a></li>
<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Add New Post</a></li>
<li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;Manage Admin</a></li>
<li><a href="#"><span class="glyphicon glyphicon-comment"></span>&nbsp;Comments</a></li>
<li><a href="#"><span class="glyphicon glyphicon-equalizer"></span>&nbsp;Live blog</a></li>
<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>

</ul>



</div>
<div class="col-sm-10"><!--main area--> 

<?php  echo Message();
echo SuccessMessage();
?>
<h1>Admin Dashboard</h1>
<div class="table-responsive">
<table class="table table-striped table-hover">
       <tr>
	   <th>No</th>
	   <th>Post Title</th>
	   <th>Date & Time</th>
	   <th>Author</th>
	   <th>Category</th>
	   <th>Banner</th>
	   <th>Comments</th>
	   <th>Action</th>
	   <th>Details</th>
       </tr>
   <?php  
global $Connection;
$ViewQuery="SELECT * FROM admin_panel ORDER BY datetime desc";
$Execute=mysqli_query($Connection,$ViewQuery); 
$SrNo=0;
while($DataRows=mysqli_fetch_array($Execute)){
	
	$Id=$DataRows['id'];
	$DateTime=$DataRows['datetime'];
	$Title=$DataRows['title'];
	$Category=$DataRows['category'];
	
	$Admin=$DataRows['author'];
	$Image=$DataRows['image'];
	$Post=$DataRows['post'];
    $SrNo++;
   ?>
   
   <tr>
     <td><?php  echo  $SrNo;  ?></td>
     <td style="color:blue;"><?php 
      if(strlen($Title)>20){
		  $Title=substr($Title,0,20).'..';
	  }
	 echo  $Title;  ?></td>
	 <td><?php 
        if(strlen($DateTime)>11){
		  $DateTime=substr($DateTime,0,11).'..';
	  }

	 echo  $DateTime;  ?></td>
	 <td><?php   
      if(strlen($Admin)>6){
		  $Admin=substr($Admin,0,6).'..';
	  }

	    echo $Admin;  ?></td>
	 <td><?php 

       if(strlen($Category)>8){
		  $Category=substr($Category,0,8).'..';
	  }
	 echo  $Category;  ?></td>
	 <td><img src="Upload/<?php echo  $Image;?>" width="170px"; height="50px";></td>
	 <td>Processing</td>
	 <td><a href="editpost.php?Edit=<?php echo $Id;?>"><span class="btn btn-success">Edit</span></a> 
	     <a href="deletepost.php?Delete=<?php echo $Id;?>"><span class="btn btn-danger">Delete<span></a>
	 </td>
	 <td><a href="fullpost.php?id=<?php echo $Id;?>" target="_blank"> <span class="btn btn-primary">Live Preview</span></a></td>
   </tr>
   
   
   
   
<?php } ?>
</table>
</div>
</div>
</div>

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
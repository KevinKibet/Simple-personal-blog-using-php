
<?php

require_once("include/DB.php");


?>
<?php

require_once("include/Sessions.php");


?>

<?php

require_once("include/Functions.php");


?>




<!DOCTYPE>

<html>
<head>

             <title>Full Blog Post</title>
             <link rel="stylesheet" href="css/bootstrap.min.css">
             <script src="js/jquery-3.3.1.min.js"></script>
             <script src="js/bootsrap.min.js"></script>
			 <link rel="stylesheet" href="css/publicstyles.css">
			 <style>
		
.col-sm-3{
	
background-color: #e6f2ff;
}

.Fieldinfo{
	
	color:rgb(251, 174, 44);
	font-family:Bitter,Georgia,'Times Nw Roman',Times,serif; 
	font-siz:1.2em;
	
}
.col-sm-8{
	

}
#Footer{
	padding: 10px;
	border-top: 1px solid black;
	color: #eeeeee;

	background-color: #000013;
	text-align: center;
	
	
}
			 
			 </style>
</head>

<body>

<div  style="height: 10px; background: #ffffff"></div>  
<nav id="home" class="navbar navbar-default" role="navigation">

<div class="container">
<div class="navbar-header">

<!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
<span class="sr-only">Toggle Navigaton</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>-->

<a class="navbar-brand" href="home.php">
<img style="margin-left:-15px; margin-top:-16.495px;" src="images/a.png" width="60px" height="50px">
</a>

</div>
      <!-- <div class="collapse navbar-collapse" id="collapse">-->

       <ul class="nav navbar-nav">

       <li><a href="home.php">Home</a></li>
       <li class="active"><a href="blog.php">Blog</a></li>
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
<div class="lines"  style="height: 10px; background: #ffffff"></div>

<div class="container"><!--start container area-->
<div class="blog-header">
<h1></h1>
<p class="lead"></p>
</div>
          <div class="row"><!--row area-->
          <div class="col-sm-8"><!--main blog area-->
		  
		 <?php
		 
		 global $Connection;
		     if(isset($_GET["SearchButton"])){
			  $Search=$_GET["Search"];
              $ViewQuery="SELECT * FROM admin_panel WHERE datetime LIKE '%$Search%' 
			  OR title LIKE '%$Search%' OR category LIKE '%$Search%' OR post LIKE '%$Search%'";		  
			   
		   }else{
			   $PostIdFromULR=$_GET['id'];;
			   
			   
		   $ViewQuery="SELECT * FROM admin_panel WHERE id='$PostIdFromULR' ORDER BY datetime desc";}
		 $Execute=mysqli_query($Connection,$ViewQuery);
		 while($DataRows=mysqli_fetch_array($Execute)){
			 
			$PostId=$DataRows["id"];
			$DateTime=$DataRows["datetime"];
			$Title=$DataRows["title"];
			$Category=$DataRows["category"];
			$Admin=$DataRows["author"];
			$Image =$DataRows["image"];
			
			$Post=$DataRows["post"];
			 
		 
		   
		 ?> 
		 <div class="blogpost thumbnail">
		 
		 <img class="img-responsive img-rounded" src="Upload/<?php echo $Image;   ?>">
		 <div class="caption">
		    <h1 id="heading"> <?php echo htmlentities($Title); ?></h1>
		    <p class="description">Category:<?php  echo htmlentities($Category);?>Published on:<?php  echo htmlentities($DateTime); ?></p>
			<p class="post">   <?php 
			

              	echo nl2br($Post);  ?></p>
		 </div>
		    
		 </div>
		 
		 <?php } ?>
		 <br></br>
		 <br></br>
		 <span class="Fieldinfo">Share your thoughts about this post</span>
		 <br></br>
		 <span  class="Fieldinfo">Comment</span>
          
		  <div>
<form action="fullpost.php?id=<?php echo $Postid; ?>" method="post" enctype="multipart/form-data">
<!---->


<?php
if(isset($_POST["submit"])){
	
	$Name=mysqli_real_escape_string($Connection,$_POST["Name"]);
	$Email=mysqli_real_escape_string($Connection,$_POST["Email"]);
    $Comment=mysqli_real_escape_string($Connection,$_POST["Comment"]);
	date_default_timezone_set("Africa/Nairobi");
$CurrentTime=time();
//$DateTime=strftime("%Y-%m-%d %H:%M:%S",$CurrentTime);
$DateTime=strftime("%B-%d-%Y   %H:%M:%S",$CurrentTime);
 $DateTime;
 $PostId=$_GET['id'];
 
	if(empty($Name)||empty($Email)||empty($Comment)){
	 
	 $_SESSION["ErrorMessage"]="Fields can't be empty";
	 Redirect_to("fullpost.php?id={$PostId}");
	}elseif(strlen($Comment)>500){
	 
	 $_SESSION["ErrorMessage"]="Title should be atleast 2 characters";
	Redirect_to("fullpost.php?id={$PostId}");
	}else{
	 
	 global $Connection;
	 $Query="INSERT INTO comment(datetime,name,email,comment,status)
	 VALUES('$DateTime','$Name','$Email','$Comment','OFF')";
	 $Execute=mysqli_query($Connection,$Query);
	 if($Execute){
		 $_SESSION["SuccessMessage"]="Comment submitted successfully";
	 Redirect_to("fullpost.php?id={$PostId}");
	 }else{
	$_SESSION["ErrorMessage"]="something went wrong";
	 Redirect_to("fullpost.php?id={$PostId}"); 
	 }
	 
	 }
}


?>




<!----->
<fieldset>
         
         <div class="form-group">
        <label for="name"><span class="Fieldinfo"> Name:</span></label>
        <input class="form-control" type="text" name="Name" id="name" placeholder="Name">
         </div>
		 
		 <div class="form-group">
        <label for="email"><span class="Fieldinfo"> Email:</span></label>
        <input class="form-control" type="email" name="Email" id="email" placeholder="Email">
         </div>
		 
<div class="form-group">
<label for="commentarea"><span class="Fieldinfo"> Comment:</span></label>
<textarea class="form-control" name="Comment" id="commentarea"></textarea>
</div>
		 
		 
		 <br>
          <button class="btn btn-primary  " type="Submit" name="submit" >Submit </button>
</fieldset>
       </br>    
</form>

</div>
		  
		  
          </div><!-- end main blog area-->
		  
            <div  class="col-sm-offset-1 col-sm-3">
			
			
			
               <h2>About Me</h2>
				<img class="img-responsive img-circle imgicon" src="images/b.jpg">
            <p> mnxnndnxdhjjhkjkdskjjlkj hjjklskbn gkslkjk bnmxakjs jsaklaksb ghjskksjd jasksj
              mksnm,smcn mcc,mc ncm,,cm knc zncsdnc,fnc,,kjkjm,dfkvlkml
             klclcm,mfnvknvb.,mnd,,.,mnkvjjfj kjjfbdndhdnhjnhhssnsnshddnmdkjkdsnnd
               jddnndnddnndndddjdjjdjdjjdjjcdjdjjdjd</p>  
        <div class="panel panel-primary">
			 <div class="panel-heading">
			 <h2 class="panel-title">Categories<h2>
			 
			 </div >
			 <div class="panel-body" >
			 <?php
			 global $Connection;
			 $ViewQuery="SELECT * FROM category ORDER BY datetime desc";
			 $Execute=mysqli_query($Connection,$ViewQuery);
			 while($DataRows=mysqli_fetch_array($Execute)){
				 $Id=$DataRows['id'];
				 $Category=$DataRows['name'];
				 ?>
				 <a href="blog.php?Category=<?php echo $Category;?>">
				 <span id="heading"><?php echo $Category."<br>"; ?></span>
				 </a>
			 <?php }?>
			 
			 
			 
			 </div>
			 <div class="panel-footer">
			 </div>
			 </div>
			 
			 
			 
			 
			 
			 <div class="panel panel-primary">
			 <div class="panel-heading">
			 <h2 class="panel-title">Recent Posts<h2>
			 
			 </div >
			 <div class="panel-body" >
			 <?php
			 
		     global $Connection;
			 $ViewQuery="SELECT * FROM admin_panel ORDER BY datetime  desc LIMIT 0,5";
			 $Execute=mysqli_query($Connection,$ViewQuery);
			 while($DataRows=mysqli_fetch_array($Execute)){
		 $Id=$DataRows['id'];
		 $Title=$DataRows['title'];
		 $DateTime=$DataRows['datetime'];
		 $Image=$DataRows['image'];
		 if(strlen($DateTime)>11){$DateTime=substr($DateTime,0,11);}
			 ?>
			
			 <div>
			     <img class="pull-left" style="margin-top:10px; margin-left:10px;" src="Upload/<?php echo htmlentities($Image); ?>" width="70px" height="70px">
				   <a href="fullpost.php?id=<?php echo $Id;?>">
				   <p id="heading" style="margin-left:90px"> <?php echo htmlentities($Title); ?></p>
				   </a>
				   <p class="description" style="margin-left:90px"> <?php echo htmlentities($DateTime); ?></p>
				   <hr>
			 </div>
			 
			 
			 <?php } ?>
			 
			 </div>
			 <div class="panel-footer">
			 </div>
			 </div>


			   
			   </div>    <!--sidebar-->
			   
            </div> <!--ending-->

            </div><!--nding container-->
 
        <div id="Footer" style="height:300px;">
<p>Theme by | Kevin Kibet | &copy ;2018-2020 ----All rights Reserved</p>
<a href="#home"><button class="btn btn-default">Home</button></a>
<a style="color: white; text-decoration: none; cursor: pointer; font-weight: bold;" href="#">
<div>
<p><br>
  <a><img src="images/r.png" style="width:30px; margin-left:-100px;"></a>
  <img src="images/t.png" style="width:30px; margin-left:-100px;">
</p>
</div>



</a>
</div>
<div  style="height: 10px; background: #ffffff;"> </div>
 

</body>

</html>
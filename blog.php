
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

             <title>Blog Page</title>
             <link rel="stylesheet" href="css/bootstrap.min.css">
             <script src="js/jquery-3.3.1.min.js"></script>
             <script src="js/bootsrap.min.js"></script>
			 <link rel="stylesheet" href="css/publicstyles.css">
			 <style>
	.imgicon{
	max-width: 150px;
	margin: 0 auto;
	display: block;
	
      } 
	  
	  .col-sm-3{
	
background-color: #e6f2ff;
}
.col-sm-8{
	

}
.background{
	
	
	background-color:#f6f7f9;
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
       <li class="active"><a href="blog.php?Page=0">Blog</a></li>
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
			     //run when pagination is activation i.e blog.php?Page=1
			 } 
				 //query when category is active
		   elseif(isset($_GET['Category'])){
$Category=$_GET['Category'];
$ViewQuery="SELECT * FROM admin_panel WHERE category='$Category' 
          ORDER BY datetime desc";
		   } 
		   
		   
		   elseif(isset($_GET["Page"])){
			   $Page=$_GET["Page"];
			   if($Page==0||$Page<1){
				 $Showpost=0;  
			   }else{$Showpost=($Page+$Page+$Page+$Page+$Page)-5;}
			   
			  // echo $Showpost;
		   $ViewQuery="SELECT * FROM admin_panel ORDER BY datetime desc LIMIT $Showpost,3";
		   }else{
		   $ViewQuery="SELECT * FROM admin_panel ORDER BY datetime desc LIMIT 0,8";}
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
			
			               if(strlen($Post)>150){
							   
							       $Post= substr($Post,0,150).'...';
						   }

              			echo $Post;  ?></p>
		 </div>
		     <a href="fullpost.php?id=<?php  echo $PostId;?>"><span class="btn btn-info">
			 Read More &rsaquo;&rsaquo;
			 
			 </span></a>
		 </div>
		 
		 <?php } ?>
          <nav >
	      <ul class="pagination pull-left pagination-lg">
		  
		  <?php
		  if(isset($Page)){
		  if($Page>1){
			  ?>
			  <li><a href="blog.php?Page=<?php echo $Page-1; ?>">&laquo </a></li>
		  <?php } }?>
		  
		  
		  
		  
		  <?php
		  global $Connection;
		      $Querypaginations="SELECT COUNT(*) FROM admin_panel";
		      $ExecutePaginations=mysqli_query($Connection,$Querypaginations);
			  $RowPagination=mysqli_fetch_array($ExecutePaginations);
			  $Totalposts=array_shift($RowPagination);
			  //echo $Totalposts;
			  $Postperpage=$Totalposts/3;
			  $Postperpage=ceil($Postperpage);
		  //echo $Postperpage;
		  
		  for($i=1;$i<=$Postperpage;$i++){
			  if(isset($Page)){
			  
			 if($i==$Page){
				  
		  ?>
		  
		<li class="active">  <a href="blog.php?Page=<?php echo $i;?>"><?php echo $i; ?></a></li>
		  
			  <?php 
			 }else{?>
				 
		<li>  <a href="blog.php?Page=<?php echo $i;?>"><?php echo $i; ?></a></li>
          <?php		
			 }
			  }
			  
			  } 
				  
			  ?>
			  
			  
			<?php
		  if(isset($Page)){
		  if($Page+1<=$Postperpage){
			  ?>
			  <li><a href="blog.php?Page=<?php echo $Page+1; ?>">&raquo </a></li>
		  <?php } }?>  
			  
			  
			  
		 </ul>
		  </nav>
		  
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
			 <div class="panel-body "  class="background">
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
<div  style="height: 10px; background: #ffffff"> </div>
 

</body>

</html>
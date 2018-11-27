
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
			 .footer{
				 
				position: fixed;
                left: 0;
                bottom: 0;	
                width: 100%;				
				 
			 }
			 
			 #Footer{
	padding: 10px;
	border-top: 1px solid black;
	color: #eeeeee;

	background-color: #000013;
	text-align: center;
	
	
}
			 
			 
	.imgicon{
	max-width: 150px;
	margin: 0 auto;
	display: block;
	
      } 
	  
	  
.col-sm-8{
	
background-color: #e6f2ff;
}
.background{
	
	
	background-color:#f6f7f9;
	
}


section{
	width:100vw;
	height:100vh;
	margin-left:-121px;
	padding:50px;
}
#m:hover{
	opacity: .5;
	
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

       <li class="active"><a href="home.php">Home</a></li>
       <li><a href="blog.php?Page=0">Blog</a></li>
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
<section  style="background:url(images/c.jpg); background-size:100% 100%;" class=" text-center">

<h1 style="color:white;">My portfolio</h1>
<p class="lead">Read my portfolio and Contact Me</p>


<a href="#work"> <button class="btn btn-default">what i do !</button></a>
</section>
 <section id="work" class="container">
 <div class="row">
 <div class="col-sm-7">
 <div class="header">
 <h1 class="text-center" style="margin-top:-15px;">What i can do for you</h1>
 
 </div>
 <div>
 <img id="m" src="images/d.jpg" class="img-thumbnail" style="height:300px; margin-left:47px;">
 <h3 class="text-center">Cyber Security and Penetration testing</h3>
 </div>
 <div>
 <img id="m" src="images/f.jpg" class="img-thumbnail" style="height:300px; width:470px; margin-left:50px;">
 <h3 class="text-center">All Round Graphic Design</h3>
 
 </div>
 <div>
 <img id="m" src="images/h.png" class="img-thumbnail" style="height:300px; width:470px; margin-left:50px;">
 <h3 class="text-center">Web Development and Design</h3>
 </div>
 <div>
 <img id="m" src="images/i.jpg" class="img-thumbnail" style="height:300px; width:470px; margin-left:50px;">
 <h3 class="text-center">Computer Networking</h3>
 </div>
 </div>
 <div class="col-sm-4">
 <p style="margin-top:50px;">Programmers have a number of third-party tools to create networked servers and clients in Python, but the core module for all of those tools is socket. This module exposes all of the necessary pieces to quickly write TCP and UDP clients and servers, use raw sockets, and so forth. For the purposes of breaking in or maintaining access to target machines, this module is all you really need. Let’s start by creating some simple clients and servers, the two most common quick network scripts you’ll write.</p>
 
 <br>
 <div class="progress">
 <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:98%">
 98% Proficient
 </div>
 </div>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 
 <p style="margin-top:-90px;">>Programmers have a number of third-party tools to create networked servers and clients in Python, but the core module for all of those tools is socket. This module exposes all of the necessary pieces to quickly write TCP and UDP clients and servers, use raw sockets, and so forth. For the purposes of breaking in or maintaining access to target machines, this module is all you really need. Let’s start by creating some simple clients and servers, the two most common quick network scripts you’ll write.</p>
 
 <br>
 
 <div class="progress">
 <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:75%">
 75% Proficient
 </div>
 </div>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <p style="margin-top:-120px;">Programmers have a number of third-party tools to create networked servers and clients in Python, but the core module for all of those tools is socket. This module exposes all of the necessary pieces to quickly write TCP and UDP clients and servers, use raw sockets, and so forth. For the purposes of breaking in or maintaining access to target machines, this module is all you really need. Let’s start by creating some simple clients and servers, the two most common quick network scripts you’ll write.</p>
 
 <br>
 <div class="progress">
 <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
 70% Proficient
 </div>
 </div>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <p style="margin-top:-90px;">Programmers have a number of third-party 
 tools to create networked servers and clients in Python,
 but the core module for all of those tools is socket. Th
 is module exposes all of the necessary pieces to quickly 
 write TCP and UDP clients and servers, use raw sockets, and
 so forth. For the purposes of breaking in or maintaining 
 access to target machines, this module is all you really 
 need. Let’s start by creating some simple clients and
 servers, the two most common quick network scripts you’ll write.</p>
 <br>
 
 <div class="progress">
 <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:98%">
 98% Proficient
 </div>
 </div>
 </div>
 </div>

 
</section>





                           <!--ending-->

 </div><!--nding container-->
 
<div id="Footer"  style="height:300px">
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
</div>

</body>

</html>
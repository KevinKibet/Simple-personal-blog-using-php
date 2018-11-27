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

if(isset($_GET['id'])){
	global $Connection;
	$Idfromurl=$_GET['id'];
	$Query="DELETE FROM category WHERE id='$Idfromurl'";
	$Execute=mysqli_query($Connection,$Query);
	if($Execute){
		
	 $_SESSION["SuccessMessage"]="category deleted successfully";
	 Redirect_to("Categories.php");
	}
		
		

	
}




?>
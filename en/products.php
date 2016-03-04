<?php 
	  $lang = "en";	
	  $slider = "mini";
	  $name = "products";	
?>

<?php 
	if ($lang == "tr") {
	  include("includes/layouts/header.php");
	  include("includes/layouts/section.php");
	  include("includes/layouts/footer.php");
	} else {
	  include("../includes/layouts/header.php");
	  include("../includes/layouts/section.php");	  
	  include("../includes/layouts/footer.php");
	  } 
?>       
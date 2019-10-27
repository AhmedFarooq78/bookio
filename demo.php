<?php  

	include("functions.php");

	include("views/header.php");
	
	
	if (empty($_GET['page']) == 'timeline') {
		
		include("views/timeline.php");

	} else if ($_GET['page'] == 'tweets') {
		
		include("views/yourtweets.php");

	} else if ($_GET['page'] == 'search') {
		
		include("views/search.php");

	} else if ($_GET['page'] == 'profile') {
		
		include("views/profile.php");

	} else {

		include("views/home.php");

	}

	include("views/footer.php"); 

?>
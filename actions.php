<?php 

	include("functions.php");

	// this allows user to signup and enters their information in the database or login

	if ($_GET['action'] == "loginSignup") {
		
		$error = "";

		// check for empty fields

		if ($_POST['loginActive'] == "1"){
			if (!$_POST['name']){
				$error = "A name is required";
			} else if (!$_POST['contact']){
				$_POST['contact'] = "n/a";
			}
		} else if (!$_POST['email']) {
			$error = "An email is required";
		} else if (!$_POST['password']){
			$error = "A password is required";
		} else if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false) {
  			echo("Email is not a valid email address");
		}

		if ($error != "") {
			echo $error;
			exit();
		}

		if ($_POST['loginActive'] == "1") { // if the user is signing up

			$query = "SELECT * FROM user WHERE email = '".mysqli_real_escape_string($con, $_POST['email'])."' LIMIT 1";
			$result = mysqli_query($con, $query);

			if (mysqli_num_rows($result) > 0) 
				$error = "That email address is already taken";
		

			else{
			
				$query = "INSERT INTO user (`email`, `password`, `name`, `contact_no`, `city`, `institute`) VALUES ('".mysqli_real_escape_string($con, $_POST['email'])."', '".mysqli_real_escape_string($con, $_POST['password'])."', '".mysqli_real_escape_string($con, $_POST['name'])."', '".mysqli_real_escape_string($con, $_POST['contact'])."', '".mysqli_real_escape_string($con, $_POST['city'])."', '".mysqli_real_escape_string($con, $_POST['institute'])."')";


				if (mysqli_query($con, $query)){

					$_SESSION['id'] = mysqli_insert_id($con);

					// encrypt the password

					$query = "UPDATE user SET password = '".md5(md5($_SESSION['id']).$_POST['password'])."' WHERE id = ".$_SESSION['id']." LIMIT 1";

					mysqli_query($con, $query);

		 			echo 1;
		 		}
		 		else{
		 			$error = "Couldn't create usere - please try again later";
				}

	 	}
	 } else {

	 	$query = "SELECT * FROM user WHERE email = '".mysqli_real_escape_string($con, $_POST['email'])."' LIMIT 1";
			$result = mysqli_query($con, $query);

			$row = mysqli_fetch_assoc($result);

				/*if ($row['password'] == md5(md5($row['user_id']).$_POST['password'])){*/
				    
				if($row['password'] == $_POST['password'] || $row['password'] == md5(md5($row['user_id']).$_POST['password'])){
					echo 1;

					$_SESSION['id'] = $row['user_id'];
				} 
				else
				{
					$error = "Couldn't find email/password combination please try again";
				}
			
	 }

		if ($error != "") {
			echo $error;
			exit();
		}
	}

	if ($_GET['action'] == 'toggleFollow'){

		 $query =  "SELECT * FROM isFollowing WHERE follower = '".mysqli_real_escape_string($con, $_SESSION['id'])."' AND isFollowing = '".mysqli_real_escape_string($con, $_POST['userId'])."' LIMIT 1";
			
			$result = mysqli_query($con, $query);

			if (mysqli_num_rows($result) > 0) {

				$row = mysqli_fetch_assoc($result);

				mysqli_query($con, "DELETE FROM isFollowing WHERE id = '".mysqli_real_escape_string($con, $row['id'])."' LIMIT 1");

				echo "1";

			} else {
				$row = mysqli_fetch_assoc($result);

				mysqli_query($con, "INSERT INTO isFollowing (follower, isFollowing) VALUES (".mysqli_real_escape_string($con, $_SESSION['id']).", ".mysqli_real_escape_string($con, $_POST['userId']).")");

				echo "2";
			}
	}

	if($_GET['action'] == 'postBook'){


		if (!$_POST['bookTitle'])	{
			
			echo "Invalid Book Title";
		
		} else if (!$_POST['bookAuthor']){
		
			echo "Invalid Book Author";
		
		}  else if (!$_POST['bookPublisher']){
		
			echo "Invalid Publisher";
		
		} else {
				
				mysqli_query($con, "INSERT INTO books (`book_name`, `user_id`, `datetime`, `book_author`, `book_publisher`, `book_condition`) VALUES ('".mysqli_real_escape_string($con, $_POST['bookTitle'])."', ".mysqli_real_escape_string($con, $_SESSION['id']).", NOW(), '".mysqli_real_escape_string($con, $_POST['bookAuthor'])."', '".mysqli_real_escape_string($con, $_POST['bookPublisher'])."', '".mysqli_real_escape_string($con, $_POST['bookCondition'])."')");

				echo "1";
		}

	}

?>
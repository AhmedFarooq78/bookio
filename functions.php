<?php  

	session_start();

	$host='localhost';
	$username='bookiopk_idrees';
	$pwd='I_dreamU@541';
	$db="bookiopk_database";

	$con=mysqli_connect($host,$username,$pwd,$db);

	if (mysqli_connect_errno()) {
		
		print_r(mysqli_connect_error());
		exit();
	}

	if (isset($_GET['func'])) {
			if ($_GET['func'] == "logout") {
	   			session_unset();
			}
	}

	function time_since($since) {
	    $chunks = array(
	        array(60 * 60 * 24 * 365 , 'year'),
	        array(60 * 60 * 24 * 30 , 'month'),
	        array(60 * 60 * 24 * 7, 'week'),
	        array(60 * 60 * 24 , 'day'),
	        array(60 * 60 , 'hour'),
	        array(60 , 'min'),
	        array(1 , 's')
	    );

	    for ($i = 0, $j = count($chunks); $i < $j; $i++) {
	        $seconds = $chunks[$i][0];
	        $name = $chunks[$i][1];
	        if (($count = floor($since / $seconds)) != 0) {
	            break;
	        }
	    }

	    $print = ($count == 1) ? '1 '.$name : "$count {$name}";
	    return $print;
	}


	function displayBooks($type){

		global $con;

		$isID = false;

		if ($type == 'public') {	
			
			$whereClause = "";
		
		} else if ($type == 'isFollowing') {

			$isID = true;
			
			$query =  "SELECT * FROM isFollowing WHERE follower = '".mysqli_real_escape_string($con, $_SESSION['id'])."'";
			
			$result = mysqli_query($con, $query);

			$whereClause = "";
			
			while ($row = mysqli_fetch_assoc($result)) {

				if ($whereClause == "") {
					
					$whereClause = "WHERE ";

				} else {
					
					$whereClause .= " OR ";
				
				}

				$whereClause .= " user_id = ".$row['isFollowing'];
				
			}
		} else if ($type == 'yourBooks'){

			$whereClause = "WHERE user_id = ".mysqli_real_escape_string($con, $_SESSION['id']);
				
		} else if ($type == 'search'){

			echo "<p>Showing results for '".mysqli_real_escape_string($con, $_GET['q'])."':</p>";

			$whereClause = "WHERE book_name LIKE '%".mysqli_real_escape_string($con, $_GET['q'])."%'";
				
		}

		$query = "SELECT * FROM books ".$whereClause." ORDER BY `datetime` DESC LIMIT 10";

		$result = mysqli_query($con, $query);

		if (mysqli_num_rows($result) == 0) {
			echo "There are no books to display";
		} else {

			while ($row = mysqli_fetch_assoc($result)) {
				
				$userQuery = "SELECT * FROM user WHERE user_id = ".mysqli_real_escape_string($con, $row['user_id'])." LIMIT 1";

				$userQueryResult = mysqli_query($con, $userQuery);


				$user = mysqli_fetch_assoc($userQueryResult);

				echo "<div class='post card'>";

				echo "<p><span id='bookName'>".$row['book_name']."</span> by ".$row['book_author']."<span class ='time pull-right'>".time_since(abs(abs(time() - strtotime($row['datetime'])) - 17980))." ago</span></p>";

				echo "<table class='table borderless'>";

				echo "<tr class='row'>";
				
				echo "<td class='col-6'>Publisher: ".$row['book_publisher']."</td>";
				echo "<td class='col-6'>Condition: ".$row['book_condition']."</td>";

				echo "<tr>";

				echo "</table>";


				// echo "<p><a id='toggleFollow' class='toggleFollow' data-userId='".$row['book_id']."'>";


				// if ($_SESSION['id'] > 0){

				// 	$isFollowingQuery =  "SELECT * FROM isFollowing WHERE follower = '".mysqli_real_escape_string($con, $_SESSION['id'])."' AND isFollowing = '".mysqli_real_escape_string($con, $row['user_id'])."' LIMIT 1";
				
				// 	$isFollowingResult = mysqli_query($con, $isFollowingQuery);

				// 	if (mysqli_num_rows($isFollowingResult) > 0){

				// 		echo "Cancel";

				// 	} else {

				// 		echo "Request";
					
				// 	}
				// }

				// to open signup on contact info
				if (isset($_SESSION['id'])) {
					$chay = 'data-toggle="collapse" data-target="#'.$row["book_id"];
				} else {
					$chay = 'data-toggle="modal" data-target="#exampleModal"';
				}

				echo '<button class="btn btn-primary col-lg-3 button" type="button" '.$chay.'">Contact Info</button>';

				echo '<div class="collapse mt-2" id="'.$row["book_id"].'">
						  <div class="card card-body">
							  <div class="row">
							  	<p class="col-4">Name:</p> <p class="col-8">'.$user['name'].'</p>
							  </div>
							  <div class="row">
							  	<p class="col-4">City:</p> <p class="col-8">'.$user['city'].'</p>
							  </div>
							  <div class="row">
							  	<p class="col-4">Contact:</p> <p class="col-8">'.$user['contact_no'].'</p>
							  </div>
							  <div class="row">
							  	<p class="col-4">Email:</p> <p class="col-8">'.$user['email'].'</p>
							  </div>
						  </div>
					</div>';

				/*echo "</a></p>*/
				echo "</div>";
					
			}
		}

	}

	function displaySearch(){

		echo '<form>
				  <div class="container">
				    <div class="col-au">
				      <div class="input-group mb-2">
				        <input type="hidden" name="page" value="search">
				        <input type="text" name="q" class="form-control" id="search" placeholder="eg. ABC">
				        <div class="input-group-append">
    						<button class="btn btn-secondary">Search</button>
  						</div>
				      </div>
				    </div>
				  </div>
			</form>';

	}

	function displayPostBook() {

		if (isset($_SESSION['id']) > 0) {
			
			echo '<div class="container card postBox">
				<div id="tweetSuccess" class="alert alert-success">Your book was posted successfully (If you cannot see your book try refreshing your browser page)</div>
				<div id="tweetFail" class="alert alert-danger">Sorry we had a problem posting your book</div>

				<div class="form-group">
					<label for="bookTitle">Book Title: </label>
					<input type="text" required="true" class="form-control" id="bookTitle" placeholder="eg. And then there were none">
				</div>
				<div class="form-group">
					<label for="bookAuthor">Book Author: </label>
					<input type="text" required="true" class="form-control" id="bookAuthor" placeholder="eg. Agatha Christie">
				</div>
				<div class="form-group">
					<label for="bookPublisher">Book Publisher: </label>
					<input type="text" required="true" class="form-control" id="bookPublisher" placeholder="eg. Pengiun UK">
				</div>
				<div class="form-group">
			    	<label for="bookCondition">Condition</label>
			    	<select class="form-control" id="bookCondition">
			    		<option>Good</option>
			   			<option>Bad</option>
			   			<option>Average</option>
			      	</select>
			    </div>

				<div class="col-auto">
					<button type="button" class="btn btn-secondary btn-lg btn-block"  id="postBookButton">POST</button>
				</div>
				</div>
				</div>
				</div>';

		}

	}

	function displayUsers() {}

?>
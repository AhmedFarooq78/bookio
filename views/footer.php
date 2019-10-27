<footer class="footer">
	
	<div class="container">
		<p>Copyright &copy; 2018 - IDreamU | All Rights Reserverd</p>
	</div>

</footer>
   

   <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!--Modal-->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="modalLogInTitle">Log In</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>

<!-- Modal for logIn and SignUp -->

	<div class="modal-body">
	    
	    <div class="alert alert-danger" id="loginAlert" style="display: none"></div>
	        
	    <form>
	       	
	       	<!-- to toggle between signup and login later on described in JS -->
	       	<!-- signupField class is used to make the fields appear and disappear -->
	       	
	       	<input type="hidden" name="loginActive" id="loginActive" value="0">
	  
			<!-- Input field for Name -->
			
			<div class="form-group signupField">
				<label for="inputName">Name</label>
				<input type="text" required="true" class="form-control" id="inputName" placeholder="Your Name">
			</div>

		    <!--Row containing the contact and email fields -->
		    
		    <div class="form-row"> 
			    <div class="form-group col-md-4 signupField">
			    	<label for="inputContactNo">Contact No.</label>
			    	<input class="form-control" id="inputContactNo" placeholder="Optional">
			    </div>
			    
			    <div class="form-group col-md-12" id="divEmail">
			    	<label for="email">Email address</label>
		    		<input type="email" required="true" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
			    </div>
			</div>

			<!--Row containing the University and City fields -->
		    
		    <!--<div class="form-row">-->
			    <div class="form-group signupField">
			    	<label for="inputCity">City</label>
			    	<select class="form-control selectpicker" id="inputCity" data-size="8">
			    		<option value="0" selected disabled="true">Your City</option><option value="Abbottabad">Abbottabad</option><option value="Adezai">Adezai</option><option value="Ahmadpur East">Ahmadpur East</option><option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option><option value="Alipur">Alipur</option><option value="Alpuri">Alpuri</option><option value="Arifwala">Arifwala</option><option value="Attock">Attock</option><option value="Ayubia">Ayubia</option><option value="Badin">Badin</option><option value="Bahawalnagar">Bahawalnagar</option><option value="Bahawalpur">Bahawalpur</option><option value="Banda Daud Shah">Banda Daud Shah</option><option value="Bannu">Bannu</option><option value="Batkhela">Batkhela</option><option value="Battagram">Battagram</option><option value="Bhakkar">Bhakkar</option><option value="Bhalwal">Bhalwal</option><option value="Birote">Birote</option><option value="Burewala">Burewala</option><option value="Chakdara">Chakdara</option><option value="Chakwal">Chakwal</option><option value="Chaman">Chaman</option><option value="Charsadda">Charsadda</option><option value="Chichawatni">Chichawatni</option><option value="Chillianwala">Chillianwala</option><option value="Chiniot">Chiniot</option><option value="Chishtian">Chishtian</option><option value="Chitral">Chitral</option><option value="Dadu">Dadu</option><option value="Daggar">Daggar</option><option value="Dargai">Dargai</option><option value="Darya Khan">Darya Khan</option><option value="Daska">Daska</option><option value="Dera Allah Yar">Dera Allah Yar</option><option value="Dera Ghazi Khan">Dera Ghazi Khan</option><option value="Dera Ismail Khan">Dera Ismail Khan</option><option value="Dera Murad Jamali">Dera Murad Jamali</option><option value="Dhaular">Dhaular</option><option value="Digri">Digri</option><option value="Dina">Dina</option><option value="Dinga">Dinga</option><option value="Dipalpur">Dipalpur</option><option value="Diplo">Diplo</option><option value="Dir">Dir</option><option value="Dokri">Dokri</option><option value="Drosh">Drosh</option><option value="Faisalabad">Faisalabad</option><option value="Fateh Jang">Fateh Jang</option><option value="Ghakhar Mandi">Ghakhar Mandi</option><option value="Ghotki">Ghotki</option><option value="Gilgit">Gilgit</option><option value="Gojra">Gojra</option><option value="Gujar Khan">Gujar Khan</option><option value="Gujranwala">Gujranwala</option><option value="Gujrat">Gujrat</option><option value="Gwadar">Gwadar</option><option value="Haala">Haala</option><option value="Hafizabad">Hafizabad</option><option value="Hangu">Hangu</option><option value="Haripur">Haripur</option><option value="Haroonabad">Haroonabad</option><option value="Hasilpur">Hasilpur</option><option value="Haveli Lakha">Haveli Lakha</option><option value="Hub">Hub</option><option value="Hyderabad">Hyderabad</option><option value="Islamabad">Islamabad</option><option value="Islamkot">Islamkot</option><option value="Jacobabad">Jacobabad</option><option value="Jalalpur Jattan">Jalalpur Jattan</option><option value="Jampur">Jampur</option><option value="Jamshoro">Jamshoro</option><option value="Jaranwala">Jaranwala</option><option value="Jauharabad">Jauharabad</option><option value="Jhang">Jhang</option><option value="Jhelum">Jhelum</option><option value="Jungshahi">Jungshahi</option><option value="Kalabagh">Kalabagh</option><option value="Kalat">Kalat</option><option value="Kamalia">Kamalia</option><option value="Kamoke">Kamoke</option><option value="Kandiaro">Kandiaro</option><option value="Karachi">Karachi</option><option value="Karak">Karak</option><option value="Karor Lal Esan">Karor Lal Esan</option><option value="Kashmore">Kashmore</option><option value="Kasur">Kasur</option><option value="Keti Bandar">Keti Bandar</option><option value="Khairpur">Khairpur</option><option value="Khanewal">Khanewal</option><option value="Khanpur">Khanpur</option><option value="Kharan">Kharan</option><option value="Kharian">Kharian</option><option value="Khushab">Khushab</option><option value="Khuzdar">Khuzdar</option><option value="Kohat">Kohat</option><option value="Kot Adu">Kot Adu</option><option value="Kotri">Kotri</option><option value="Lahore">Lahore</option><option value="Lakki Marwat">Lakki Marwat</option><option value="Lalamusa">Lalamusa</option><option value="Larkana">Larkana</option><option value="Latamber">Latamber</option><option value="Layyah">Layyah</option><option value="Liaquat Pur">Liaquat Pur</option><option value="Lodhran">Lodhran</option><option value="Loralai">Loralai</option><option value="Madyan">Madyan</option><option value="Mailsi">Mailsi</option><option value="Mamoori">Mamoori</option><option value="Mandi Bahauddin">Mandi Bahauddin</option><option value="Mansehra">Mansehra</option><option value="Mardan">Mardan</option><option value="Mastuj">Mastuj</option><option value="Mastung">Mastung</option><option value="Matiari">Matiari</option><option value="Mehar">Mehar</option><option value="Mehrabpur">Mehrabpur</option><option value="Mian Channu">Mian Channu</option><option value="Mianwali">Mianwali</option><option value="Mingora">Mingora</option><option value="Mirpur Khas">Mirpur Khas</option><option value="Mithani">Mithani</option><option value="Mithi">Mithi</option><option value="Moro">Moro</option><option value="Multan">Multan</option><option value="Muridke">Muridke</option><option value="Murree">Murree</option><option value="Muzaffarabad">Muzaffarabad</option><option value="Muzaffargarh">Muzaffargarh</option><option value="Nagarparkar">Nagarparkar</option><option value="Narowal">Narowal</option><option value="Naudero">Naudero</option><option value="Naushahro Feroze">Naushahro Feroze</option><option value="Naushara">Naushara</option><option value="Nawabshah">Nawabshah</option><option value="Nazimabad">Nazimabad</option><option value="Nowshera">Nowshera</option><option value="Nushki">Nushki</option><option value="Okara">Okara</option><option value="Paharpur">Paharpur</option><option value="Pakpattan">Pakpattan</option><option value="Pasni">Pasni</option><option value="Pattoki">Pattoki</option><option value="Peshawar">Peshawar</option><option value="Pir Mahal">Pir Mahal</option><option value="Qila Didar Singh">Qila Didar Singh</option><option value="Quetta">Quetta</option><option value="Rabwah">Rabwah</option><option value="Rahim Yar Khan">Rahim Yar Khan</option><option value="Raiwind">Raiwind</option><option value="Rajanpur">Rajanpur</option><option value="Rajo Khanani">Rajo Khanani</option><option value="Ranipur">Ranipur</option><option value="Ratodero">Ratodero</option><option value="Rawalpindi">Rawalpindi</option><option value="Renala Khurd">Renala Khurd</option><option value="Rohri">Rohri</option><option value="Sadiqabad">Sadiqabad</option><option value="Safdarabad">Safdarabad</option><option value="Sahiwal">Sahiwal</option><option value="Saidu Sharif">Saidu Sharif</option><option value="Sakrand">Sakrand</option><option value="Sanghar">Sanghar</option><option value="Sangla Hill">Sangla Hill</option><option value="Sarai Alamgir">Sarai Alamgir</option><option value="Sargodha">Sargodha</option><option value="Shahbandar">Shahbandar</option><option value="Shahdadkot">Shahdadkot</option><option value="Shahdadpur">Shahdadpur</option><option value="Shahpur Chakar">Shahpur Chakar</option><option value="Shakargarh">Shakargarh</option><option value="Sheikhupura">Sheikhupura</option><option value="Shikarpaur">Shikarpaur</option><option value="Sialkot">Sialkot</option><option value="Sibi">Sibi</option><option value="Sohawa">Sohawa</option><option value="Soianwala">Soianwala</option><option value="Sukkur">Sukkur</option><option value="Swabi">Swabi</option><option value="Swat">Swat</option><option value="Talagang">Talagang</option><option value="Tando Adam Khan">Tando Adam Khan</option><option value="Tando Allahyar">Tando Allahyar</option><option value="Tangi">Tangi</option><option value="Tank">Tank</option><option value="Taxila">Taxila</option><option value="Thall">Thall</option><option value="Thatta">Thatta</option><option value="Timergara">Timergara</option><option value="Toba Tek Singh">Toba Tek Singh</option><option value="Tordher">Tordher</option><option value="Turbat">Turbat</option><option value="Umerkot">Umerkot</option><option value="Usta Mohammad">Usta Mohammad</option><option value="Vehari">Vehari</option><option value="Wah Cantonment">Wah Cantonment</option><option value="Warah">Warah</option><option value="Wazirabad">Wazirabad</option><option value="Zhob">Zhob</option><option value="Other">Other</option>
			      	</select>
			    </div>
			    
			    <!--<div class="form-group col-md-8 signupField">
			    	<label for="inputUniversity">University</label>
			    	<select id="inputUniversity" class="form-control">
			        	<option selected>Mehran University of Engineering and Technology</option>
			        	<option>University of Sindh</option>
			      	</select>
			    </div>-->
			<!--</div>-->

			<!-- Input field for Password -->
			
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" placeholder="Password" required="true">
			</div>

		</form>

	</div>

	<div class="modal-footer">
		<a id="toggleLogIn">Sign Up</a>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	    <button type="button" class="btn btn-primary" id="logInSignUpButton">Log In</button>
	    </div>
	    </div>
	  </div>
	</div>

<script type="text/javascript">
	
	$("#toggleLogIn").click(function () {
		

		if ($("#loginActive").val() == "0"){
			$("#loginActive").val("1");					
			$(".signupField").css("display","block");
			$("#divEmail").removeClass("col-md-12");		// email field width class
			$("#divEmail").addClass("col-md-8");
			$("#modalLogInTitle").html("Sign Up");
			$("#logInSignUpButton").html("Sign Up");
			$("#logInSignUpButton").html("Sign Up");
			$("#toggleLogIn").html("Log In");
		}
		
		else{
			$("#loginActive").val("0");
			$("#modalLogInTitle").html("Log In");
			$("#divEmail").removeClass("col-md-8");
			$("#divEmail").addClass("col-md-12");
			$(".signupField").css("display","none");
			$("#logInSignUpButton").html("Log In");
			$("#logInSignUpButton").html("Log In");
			$("#toggleLogIn").html("Sign Up");			
		}

	})

	$("#logInSignUpButton").click(function () {
		
		$.ajax({
			type: "POST",
			url : "actions.php?action=loginSignup",
			data: "email=" + $("#email").val() + "&name=" + $("#inputName").val() + "&city=" + $("#inputCity").val() + "&institute=" + $("#inputUniversity").val() + "&contact=" + $("#inputContactNo").val() + "&password=" + $("#password").val() + "&loginActive=" + $("#loginActive").val(),
			success: function (result) {
				
				if (result == "1") {
					window.location.assign("https://www.bookio.pk/demo.php")	
				} else {
					$("#loginAlert").html(result).show();
				}
			}
		});
	})

	$(".toggleFollow").click(function(){

		var id = $(this).attr("data-userId");

		$.ajax({
			type: "POST",
			url : "actions.php?action=toggleFollow",
			data: "userId=" + id,
			success: function (result) {
				
				if (result == "1") {

					$("a[data-userId ='" + id + "' ]").html("Request");
				
				} else if (result == "2"){

					$("a[data-userId ='" + id + "' ]").html("Cancel");
				
				}
			}
		});

	})

	$("#postBookButton").click(function(){

		 $.ajax({
			type: "POST",
			url : "actions.php?action=postBook",
			data: "bookTitle=" + $("#bookTitle").val() + "&bookAuthor=" + $("#bookAuthor").val() + "&bookPublisher=" + $("#bookPublisher").val() + "&bookCondition=" + $("#bookCondition").val(),
			success: function (result) {
				
				if (result == "1") {

					$("#tweetSuccess").show();
					$("#tweetFail").hide();
				
				} else if (result != "") {

					$("#tweetFail").html(result).show();
					$("#tweetSuccess").hide();

				}
			}
		});

		

	})

</script>

  </body>
</html>
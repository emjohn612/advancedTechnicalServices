<?php include("includes/header.php"); ?>
<script>
	function changeToError($this) {
		$this.removeClass('hasSuccess');
		$this.addClass('hasError');
		$this.attr("aria-invalid", "true");
	}
	
	function validateEmail($e) {
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test($e);
	}
	function validatePhone($p) {
		var re = /^(?:\+?[0-9]?[0-9]?[0-9][-. ]?)?\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
		return re.test($p);
	}
	function checkForErrors() {
		var fName=$.trim($("#firstName").val());
		var lName=$.trim($("#lastName").val());
		var eMail=$.trim($("#email").val());
		var telNum=$.trim($("#tel").val());
		var textMsg=$.trim($("#message").val());

		if (fName.length == 0) {
			changeToError($('#firstName'))
			return false;
		} else if (lName.length == 0) {
			changeToError($('#lastName'))
			return false;
		} else if (eMail.length == 0 || !validateEmail($('#email').val())) {
			changeToError($('#email'))
			console.log('error');
			return false;
		} else if (telNum.length !== 10 || !validatePhone($('#tel').val())) {
			changeToError($('#tel'))
			console.log('error');
			return false;
		} else if (!validateLetter($('#message').val())) {
			console.log('erorrrrrrr')
			changeToError($('#message'))
			return false;
		} 
		// else if ($this.attr('type') == 'checkbox' && $($thisName).length == 0) {
		// 	changeToError($this)
		// }
		else {
			$('input').removeClass('hasError');
			// $('input').addClass('hasSuccess');
			$('textarea').removeClass('hasError');
			// $('textarea').addClass('hasSuccess');
			return true;
		}
	}
</script>
<div id="contact" class="container">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12">
				<h3>Header</h3>

				<?php
					// check for header injection
					function has_header_injection($str) {
						return preg_match("/[\r\n]/", $str );
					}
					
					if (isset ($_POST['submit'])) {
						$firstName = trim($_POST['firstName']);
						$lastName = trim($_POST['lastName']);
						$email = trim($_POST['email']);
						$msg = $_POST['message'];
						$tel = $_POST['tel'];

						if(has_header_injection($firstName) || has_header_injection($email) || has_header_injection($lastName)) {
							die();
						}
						$to = "emjohn612@gmail.com";

						$subject = "$name sent you a message via your contact form";

						$message = "Name: $firstName\r\n";
						$message = "Name: $lastName\r\n";
						$message .= "Email: $email\r\n";
						$message .= "Tele: $tel\r\n";
						$message .= "Message:\r\n$msg";

						$message = wordwrap($message, 72);

						// set mail headers
						$headers = "MIME-Version: 1.0\r\n";
						$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
						$headers .= "From: $firstName <$email> \r\n";
					}
				?>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
		</div>
		<form class="container-fluid" method="post" action="" onsubmit="return checkForErrors()">
				<div class="form-row">
					<div class="col-md-6 mb-3">
						<label for="firstName">First name</label>
						<input type="text" class="form-control hasSuccess" id="firstName" placeholder="First name">
					</div>
					<div class="col-md-6 mb-3">
						<label for="lastName">Last name</label>
						<input type="text" class="form-control hasSuccess" id="lastName" placeholder="Last name">
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-6 mb-3">
						<label for="tel">Phone Number</label>
						<input type="tel" class="form-control hasSuccess" id="tel" placeholder="Phone Number">
					</div>
					<div class="col-md-6 mb-3">
						<label for="email">How can we help?</label>
						<input type="email" class="form-control hasSuccess" id="email" placeholder="Email">
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-12 mb-6">
						<label for="message">How can we help?</label>
						<textarea type="text" class="form-control hasSuccess" id="message" placeholder="Describe Here!" ></textarea>
					</div>
				</div>
			<button class="btn btn-primary" type="submit" value="submit">Submit form</button>
		</form>
	</div>
</div>
<?php include("includes/footer.php"); ?>
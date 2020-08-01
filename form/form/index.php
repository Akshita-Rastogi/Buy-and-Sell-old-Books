<!DOCTYPE html>
<html lang="en">
<head>
	<title>Details</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact2" style="background-image: url('images/bg-01.jpg') ; " >
		<div class="container-contact2" >
			<div class="wrap-contact2">
				<form class="contact2-form validate-form" method='GET' action ="mail.php"  >
					<span class="contact2-form-title">
						Please Fill Your Details
					</span>

					<div class="wrap-input2 validate-input" data-validate="Name is required">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="NAME"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input2" type="text" name="email">
						<span class="focus-input2" data-placeholder="EMAIL"></span>
					</div>
					<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input2" type="text" name="MOB">
						<span class="focus-input2" data-placeholder="MOBILE NUMBER"></span>
					</div>
					<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input2" type="text" name="COLLEGE">
						<span class="focus-input2" data-placeholder="COLLEGE"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Message is required">
						<textarea class="input2" name="COURSE"></textarea>
						<span class="focus-input2" data-placeholder="COURSE"></span>
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn" >
							<div class="contact2-form-bgbtn" ></div>
							<a href="0-5741226442.pdf">
							<button class="contact2-form-btn" href="0-5741226442.pdf">
										Submit
							</button>
							</a>			
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

</body>
</html>


<?php

?>
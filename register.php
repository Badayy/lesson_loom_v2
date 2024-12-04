<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
   <!-- All Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignLab" >
	<meta name="robots" content="" >
	<meta name="keywords" content="school, school admin, education, academy, admin dashboard, college, college management, education management, institute, school management, school management system, student management, teacher management, university, university management" >
	<meta name="description" content="Discover Akademi - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Akademi provides advanced features and an easy-to-use interface for creating a top-quality website with School and Education Dashboard" >
	<meta property="og:title" content="Akademi : School and Education Management Admin Dashboard Template" >
	<meta property="og:description" content="Akademi - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Akademi provides advanced features and an easy-to-use interface for creating a top-quality website with School and Education Dashboard">
	<meta property="og:image" content="https://akademi.dexignlab.com/xhtml/social-image.png" >
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Page Title Here -->
	<title>LessonLoom</title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/logo/logo.png" >
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link href="css/style.css" rel="stylesheet">

	
    <!-- Form step -->
    <link href="vendor/jquery-smartwizard/dist/css/smart_wizard.min.css" rel="stylesheet">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	
	 <link href="vendor/dropzone/dist/dropzone.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="body  h-100">
	<div class="authincation d-flex flex-column flex-lg-row flex-column-fluid">
		<div class="login-aside text-center  d-flex flex-column flex-row-auto">
			<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
				<div class="text-center mb-lg-4 mb-2 pt-5 logo">
					<img src="images/logo-white.png" alt="">
				</div>
				<h3 class="mb-2 text-white">Welcome!</h3>
				<p class="mb-4">Create an account to begin planning your lessons.<br>It’s quick and easy to get started.</p>
			</div>
			<div class="aside-image position-relative" style="background-image:url(images/background/pic-2.png);">
				<img class="img1 move-1" src="images/background/pic3.png" alt="">
				<img class="img2 move-2" src="images/background/pic4.png" alt="">
				<img class="img3 move-3" src="images/background/pic5.png" alt="">
				
			</div>
		</div>
		<div class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
			<div class="d-flex justify-content-center h-100 align-items-center">
				<div id="sign-up" class="auth-form tab-pane fade show active  form-validation">
					<form action="index.html" >
						<div class="text-center mb-4">
							<h3 class="text-center mb-2 text-black">Registration Form</h3>
						</div>
						<div class="row">
							<div class="col-lg-6 mb-2">
								<div class="mb-3">
									<label class="text-label form-label">School ID<span class="required">*</span></label>
									<input type="text" id="school_id" name="school_id" class="form-control" placeholder="0000" required>
								</div>
							</div>
							<div class="col-lg-6 mb-2">
								<div class="mb-3">
									<label class="text-label form-label">School Name<span class="required">*</span></label>
									<input type="text" id="school_name" name="school_name" class="form-control" placeholder="Enter School Name" required>
								</div>
							</div>
							<div class="col-lg-6 mb-2">
								<div class="mb-3">
									<label class="text-label form-label">School Acronym<span class="required">*</span></label>
									<input type="text" id="school_acronym" name="school_acronym" class="form-control" placeholder="Enter School Acronym" required>
								</div>
							</div>
							<div class="col-lg-6 mb-2">
								<div class="mb-3">
									<label class="text-label form-label">School Email Address<span class="required">*</span></label>
									<input type="email" id="email" name="email" class="form-control" id="inputGroupPrepend2" placeholder="Enter Email Address" required>
								</div>
							</div>
							<div class="col-lg-6 mb-2">
								<div class="mb-3">
									<label class="text-label form-label">School Phone Number<span class="required">*</span></label>
									<input type="number" id="phone" name="phone" class="form-control" placeholder="Enter Phone Number" required>
								</div>
							</div>
							<div class="col-lg-6 mb-2">
								<div class="mb-3">
									<label class="text-label form-label">School Address<span class="required">*</span></label>
									<input type="text" id="address" name="address" class="form-control" placeholder="Enter School Address" required>
								</div>
							</div>
							<div class="col-lg-6 mb-2">
								<div class="mb-3">
									<label class="text-label form-label">Password<span class="required">*</span></label>
									<input type="password" id="password" name="password" class="form-control" placeholder="Enter your Password" required>
								</div>
							</div>
							<div class="col-lg-6 mb-2">
								<div class="mb-3">
									<label class="text-label form-label">Confirm Password<span class="required">*</span></label>
									<input type="password" id="confirmpassword" name="confirmpassword" class="form-control" placeholder="Confirm your Passward" required>
								</div>
							</div>
							<div class="col-lg-12 mb-3">
								<label class="text-label form-label">Upload School Certificate<span class="required">*</span></label>
								<div action="#" class="dropzone">
									<div class="fallback">
										<input name="file" type="file" multiple >
									</div>
								</div>
							</div>
							<div class="col	-12 d-flex justify-content-center align-items-center mt-5">
								<button type="submit" class="btn btn-block btn-primary w-25">Register</button>
							</div>
						</div>
					</form>
					<div class="new-account mt-3 text-center">
						<p class="font-w500">Already have an account? <a class="text-primary" href="index.php">Sign in</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>



    <!--**********************************
        Scripts
    ***********************************-->
	

	<!-- Required vendors -->
	<script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>	
    <script src="vendor/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>

    <!-- Form validate init -->
    <script src="js/plugins-init/jquery.validate-init.js"></script>

	<!-- Form Steps -->
	<script src="vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendor/dropzone/dist/dropzone.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
	<script>
		$(document).ready(function(){
			// SmartWizard initialize
			$('#smartwizard').smartWizard(); 
		});
	</script>
	
</body>
</html>
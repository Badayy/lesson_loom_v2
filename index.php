
<?php
	include_once 'src/UserController.php';
	$user_controller = new UserController();
	$user_role = $user_controller->user_role();

	session_start();

	if (isset($_SESSION['login_data'])) {
		header('location:dashboard.php');
	}
?>

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
	<link rel="shortcut icon" type="image/png" href="images/favicon.png" >
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="body  h-100">
	<div class="authincation d-flex flex-column flex-lg-row flex-column-fluid">
		<div class="login-aside text-center  d-flex flex-column flex-row-auto">
			<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
				<div class="text-center mb-lg-4 mb-2 pt-5 logo">
					<img src="images/logo-white.png" alt="">
				</div>
				<h3 class="mb-2 text-white">Welcome back!</h3>
				<p class="mb-4">Your lesson planning journey continues. <br>Log in to start where you left off.</p>
			</div>
			<div class="aside-image position-relative" style="background-image:url(images/background/pic-2.png);">
				<img class="img1 move-1" src="images/background/pic3.png" alt="">
				<img class="img2 move-2" src="images/background/pic4.png" alt="">
				<img class="img3 move-3" src="images/background/pic5.png" alt="">
				
			</div>
		</div>
		<div class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
			<div class="d-flex justify-content-center h-100 align-items-center">
				<div class="authincation-content style-2">
					<div class="row no-gutters">
						<div class="col-xl-12 tab-content">
							<div id="sign-up" class="auth-form tab-pane fade show active  form-validation">
								<form method="POST" action="src/actions/login.php">
									<div class="text-center mb-4">
										<h3 class="text-center mb-2 text-black">Sign In</h3>
									</div>
									<?php if (isset($_SESSION['invalid']) && $_SESSION['invalid']) : ?>
										<div class="alert alert-danger">Invalid Account</div>
									<?php endif; ?>

									<div class="mb-3">
										<label for="exampleFormControlInput1" class="form-label mb-2 fs-13 label-color font-w500">Email</label>
									  	<input type="email" name="email" class="form-control" id="exampleFormControlInput1" required/>
									</div>
									<div class="mb-3">
										<label for="exampleFormControlInput1" class="form-label mb-2 fs-13 label-color font-w500">Password</label>
									  	<input type="password" name="password" class="form-control" id="exampleFormControlInput2" required/>
									</div>
									<div class="col-lg-6 mb-5">
										<label for="exampleFormControlInput1" class="form-label mb-2 fs-13 label-color font-w500">Role</label>
										<select class=" default-select form-control wide" aria-label="Default select example" name="role" required>
											<option disabled selected value="">Select Role</option>
											<?php foreach($user_role['data'] as $role) :?>
												<option value="<?= $role['id']; ?>"><?= ucfirst($role['role']); ?></option>
											<?php endforeach; ?>
										</select>
									</div>
									<a href="forgot-pass.php" class="text-primary float-end mb-4" style="margin-top: -80px">Forgot Password ?</a>
									<button class="btn btn-block btn-primary" type="submit" name="login">Sign In</button>
								</form>
								<div class="new-account mt-3 text-center">
									<p class="font-w500">Don't have an account? <a class="text-primary" href="register.php" data-toggle="tab">Sign Up</a></p>
								</div>
							</div>
						</div>
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
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
	
</body>
</html>
<?php include_once __DIR__ . '/header.php'; ?>
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header">
								<h5 class="mb-0">Teacher Details</h5>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-sm-3">
										<label class="form-label text-primary">Photo<span class="required">*</span></label>
										 <div class="avatar-upload">
											<div class="avatar-preview">
												<div id="imagePreview" style="background-image: url(images/avatar/1.jpg); width: 16rem; height:16rem;"> 			
												</div>
											</div>
											<div class="change-btn mt-2 mb-lg-0 mb-3">
												<input type='file' class="form-control d-none"  id="imageUpload" accept=".png, .jpg, .jpeg">
												<label for="imageUpload" class="dlab-upload mb-0 btn btn-primary btn-sm">Choose File</label>
												<a href="javascript:void" class="btn btn-danger light remove-img ms-2 btn-sm">Remove</a>
											</div>
										</div>	
									</div>
									<div class="col-sm-9">
										<div class="row">
											<div class="col-xl-4 col-sm-4">
												<div class="mb-3">
												  <label for="exampleFormControlInput1" class="form-label text-primary">First Name<span class="required">*</span></label>
												  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="James" name="firstname">
												</div>
											</div>
											<div class="col-xl-4 col-sm-4">
												<div class="mb-3">
												  <label for="exampleFormControlInput1" class="form-label text-primary">Last Name<span class="required">*</span></label>
												  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="James" name="lastname">
												</div>
											</div>
											<div class="col-xl-4 col-sm-4">
												<div class="mb-3">
												  <label for="exampleFormControlInput1" class="form-label text-primary">Gender<span class="required">*</span></label>
												  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Male" name="gender">
												</div>
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="mb-3">
												  <label for="exampleFormControlInput1" class="form-label text-primary">Birthday<span class="required">*</span></label>
												  <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="" name="birthday">
												</div>
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="mb-3">
												  <label for="exampleFormControlInput1" class="form-label text-primary">Email<span class="required">*</span></label>
												  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="example@.com" name="email">
												</div>
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="mb-3">
												  <label for="exampleFormControlInput1" class="form-label text-primary">Address<span class="required">*</span></label>
												  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Address" name="address">
												</div>
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="mb-3">
												  <label for="exampleFormControlInput1" class="form-label text-primary">Contact<span class="required">*</span></label>
												  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="091237444" name="phone">
												</div>
											</div>
											
											<div class="col-lg-12 mb-3 mt-3">
												<label class="text-label form-label">Upload the front and back of any form of ID, such as a National ID, Passport ID, Teachers ID, and etc.<span class="required">*</span></label>
												<div action="#" class="dropzone">
													<div class="fallback">
														<input name="file" type="file" multiple >
													</div>
												</div>
											</div>
											<div class="col-xl-12 col-sm-12 mt-5">
												<div class="mb-3">
													<button class="btn btn-primary btn-sm float-end me-3" type="button">Save</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
        <!--**********************************
            Content body end
        ***********************************-->

		<div class="footer out-footer style-2">
			<div class="copyright">
				<p>Copyright © Designed &amp; Developed by <a href="" target="_blank">LessonLoom</a> 2024</p>
			</div>
		</div>

	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/moment/moment.min.js"></script>
	<script src="vendor/dropzone/dist/dropzone.js"></script>
	<script src="vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js"></script>
	<script src="vendor/wow-master/dist/wow.min.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>
	
	<script>
		$(function () {
			  $("#datepicker").datepicker({ 
					autoclose: true, 
					todayHighlight: true
			  }).datepicker('update', new Date());
		
		});

	</script>
	
	 <script>
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('#imagePreview').css('background-image', 'url('+e.target.result +')');
					$('#imagePreview').hide();
					$('#imagePreview').fadeIn(650);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$("#imageUpload").change(function() {
			readURL(this);
		});
		$('.remove-img').on('click', function() {
			var imageUrl = "images/no-img-avatar.png";
			$('.avatar-preview, #imagePreview').removeAttr('style');
			$('#imagePreview').css('background-image', 'url(' + imageUrl + ')');
		});



	</script>

</body>
</html>
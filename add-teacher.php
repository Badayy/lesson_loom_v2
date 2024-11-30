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
									<div class="col-xl-6 col-sm-6">
										<div class="mb-3">
										  <label for="exampleFormControlInput1" class="form-label text-primary">First Name<span class="required">*</span></label>
										  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="James">
										</div>
										
										<div class="mb-3">
										  <label for="exampleFormControlInput3" class="form-label text-primary">Email<span class="required">*</span></label>
										  <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="hello@example.com">
										</div>
										<div class="mb-3">
										  <label for="exampleFormControlTextarea1" class="form-label text-primary">Address<span class="required">*</span></label>
										  <textarea class="form-control" id="exampleFormControlTextarea1" rows="6">
											
										  </textarea>
										</div>
										<div class="mb-3">
											  <label for="exampleFormControlInput10" class="form-label">Date of Birth<span class="required">*</span></label>
											 <input class="form-control" type="text" id="datepicker">
										</div>
												
										 
										
									</div>
									<div class="col-xl-6 col-sm-6">
										<div class="mb-3">
										  <label for="exampleFormControlInput4" class="form-label text-primary">Last Name<span class="required">*</span></label>
										  <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="Lee">
										</div>
										<div class="mb-3">
										  <label for="exampleFormControlInput6" class="form-label text-primary">Phone Number<span class="required">*</span></label>
										  <input type="number" class="form-control" id="exampleFormControlInput6" placeholder="+123456789">
										</div>
										<div class="mb-3">
										  <label  class="form-label text-primary">Photo<span class="required">*</span></label>
											<div class="avatar-upload">
												<div class="avatar-preview">
													<div id="imagePreview" style="background-image: url(images/no-img-avatar.png);"> 			
													</div>
												</div>
												<div class="change-btn mt-1">
													<input type='file' class="form-control d-none"  id="imageUpload" accept=".png, .jpg, .jpeg">
													<label for="imageUpload" class="dlab-upload mb-0 btn btn-primary btn-sm">Choose File</label>
													<a href="javascript:void(0);" class="btn btn-danger light remove-img ms-2 btn-sm">Remove</a>
												</div>
											</div>
										</div>
										<div class="mb-3">
										  <label for="exampleFormControlInput8" class="form-label text-primary">Place of Birth<span class="required">*</span></label>
										  <input type="text" class="form-control" id="exampleFormControlInput8" placeholder="USA">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-12">
					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">Education</h5>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-xl-6 col-sm-6">
									<div class="mb-3">
									  <label for="exampleFormControlInput9" class="form-label text-primary">University <span class="required">*</span></label>
									  <input type="text" class="form-control" id="exampleFormControlInput9" placeholder="University of Oxford">
									</div>
									<div class="mb-3">
									  <div class="mb-3">
										  
										  <label class="form-label text-primary">Start & End Date<span class="required">*</span></label>
											<div class="d-flex">
												<input type="text" class="form-control w-50" id="datepicker1">
												<input type="text" class="form-control w-50 ms-3" id="datepicker2">
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-sm-6">
									<div class="mb-3">
									  <label for="exampleFormControlInput14" class="form-label text-primary">Degree<span class="required">*</span></label>
									  <input type="text" class="form-control" id="exampleFormControlInput14" placeholder="B.Tech">
									</div>
									
									<div class="mb-3">
									  <label for="exampleFormControlInput13" class="form-label text-primary">City<span class="required">*</span></label>
									  <input type="number" class="form-control" id="exampleFormControlInput13" placeholder="USA">
									</div>
								</div>
							</div>
							<div class="float-end">
								<button class="btn btn-outline-primary me-3">Save as Draft</button>
								<button class="btn btn-primary" type="button">Save</button>
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
				<p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/" target="_blank">DexignLab</a> 2023</p>
			</div>
		</div> 

      
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->


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
	<script src="vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
	
	<script>
		$(function () {
			  $("#datepicker, #datepicker1, #datepicker2").datepicker({ 
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
<?php include_once __DIR__ ."/header.php"; ?>
	<!--**********************************
            Content body start
        ***********************************-->
	<div class="content-body">
		<div class="container-fluid">
			<!-- row -->
			<div class="row">
				<div class="col-xl-3 col-lg-4">
					<div class="clearfix">
						<div class="card card-bx profile-card author-profile m-b30">
							<div class="card-body">
								<div class="p-5">
									<div class="author-profile">
										<div class="author-media">
											<img src="images/user.jpg" alt="">
											<div class="upload-link" title="" data-toggle="tooltip" data-placement="right" data-original-title="update">
												<input type="file" class="update-flie">
												<i class="fa fa-camera"></i>
											</div>
										</div>
										<div class="author-info">
											<h6 class="title">Cordova Public College</h6>
											<span>CPC</span>
										</div>
									</div>
								</div>
								<div class="info-list">
									<ul>
										<li>School Name<span>Cordova Public College</span></li>
										<li>School ID<span>2024</span></li>
										<li>School Acronym<span>CPC</span></li>
										<li>Email<span>cpc@email.com</span></li>
										<li>Address<span>Cams</span></li>
										<li>Phone<span>091234456</span></li>
									</ul>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="col-xl-9 col-lg-8">
					<div class="card profile-card card-bx">
						<div class="card-header">
							<h6 class="title">Account setup</h6>
						</div>
						<form class="profile-form">
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6 m-b30">
										<label class="form-label">School Name</label>
										<input type="text" class="form-control" value="Cordova Public College" name="school_name">
									</div>
									<div class="col-sm-6 m-b30">
										<label class="form-label">School ID</label>
										<input type="text" class="form-control" value="2024" name="school_id">
									</div>
									<div class="col-sm-6 m-b30">
										<label class="form-label">School Acronym</label>
										<input type="text" class="form-control" name="school_acronym" value="CPC">
									</div>
									<div class="col-sm-6 m-b30">
										<label class="form-label">Phone</label>
										<input type="number" class="form-control" value="0123456789" name="phone">
									</div>
									<div class="col-sm-6 m-b30">
										<label class="form-label">Email</label>
										<input type="text" class="form-control" value="cpc@gmail.com" name="email">
									</div>
									<div class="col-sm-6 m-b30">
										<label class="form-label d-block">Address</label>
										<input type="text" class="form-control" value="cams" name="address">
									</div>
								</div>
							</div>
							<div class="card-footer">
								<button type="submit" class="btn btn-primary btn-lg float-end mt-5 mb-5">UPDATE</button>
							</div>
						</form>
					</div>
				</div>				
			</div>	
		</div>
	</div>
	<!--**********************************
		Content body end
	***********************************-->
	
<?php include_once __DIR__ ."/footer.php"; ?>
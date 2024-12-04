<?php include_once __DIR__ . '/header.php'; ?>
		
	<!--**********************************
		Content body start
	***********************************-->
	<div class="content-body">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12">
					<div class="row">
						<div class="col-xl-12">
							<div class="page-title flex-wrap">
								<div class="d-flex align-items-center">
									<h2 class="heading mb-sm-0 ">Calendar</h2>
								</div>
								<div class="d-flex align-items-center flex-wrap">
									<h4 class="mx-5">Class Code</h4>
									<!-- Button trigger modal -->
									<button type="button" class="btn btn-primary ms-sm-2 ms-0 mt-sm-0 mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
										+ New Class Work
									</button>
									
								</div>
							</div>
						</div>
						<div class="col-xl-9">
							<div class="card">
								<div class="card-body">
									<div id="calendar" class="app-fullcalendar"></div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="row">
								<div class="col-xl-12">
									<div class="card">
										<div class="card-body">
											<h3 class="heading text-center">Class Work</h3>
										</div>
									</div>
								</div>
								<div class="col-xl-12 col-sm-6">
									<a href="class-work.php">
										<div class="card schedule-card">
											<div class="card-body">
												<h4 class="mb-0">Title</h4>
												<p>Description</p>
												<div class="d-flex align-items-center justify-content-between">
													<div>
														<ul>
															<li class="mb-2">
																<svg class="me-2 ms-1" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M10 0C8.02219 0 6.08879 0.58649 4.4443 1.6853C2.79981 2.78412 1.51809 4.3459 0.761209 6.17317C0.00433284 8.00043 -0.193701 10.0111 0.192152 11.9509C0.578004 13.8907 1.53041 15.6725 2.92894 17.0711C4.32746 18.4696 6.10929 19.422 8.0491 19.8079C9.98891 20.1937 11.9996 19.9957 13.8268 19.2388C15.6541 18.4819 17.2159 17.2002 18.3147 15.5557C19.4135 13.9112 20 11.9778 20 10C20 8.68678 19.7413 7.38642 19.2388 6.17317C18.7363 4.95991 17.9997 3.85752 17.0711 2.92893C16.1425 2.00035 15.0401 1.26375 13.8268 0.761205C12.6136 0.258658 11.3132 0 10 0V0ZM10 18C8.41775 18 6.87104 17.5308 5.55544 16.6518C4.23985 15.7727 3.21447 14.5233 2.60897 13.0615C2.00347 11.5997 1.84504 9.99113 2.15372 8.43928C2.4624 6.88743 3.22433 5.46197 4.34315 4.34315C5.46197 3.22433 6.88743 2.4624 8.43928 2.15372C9.99113 1.84504 11.5997 2.00346 13.0615 2.60896C14.5233 3.21447 15.7727 4.23984 16.6518 5.55544C17.5308 6.87103 18 8.41775 18 10C18 12.1217 17.1572 14.1566 15.6569 15.6569C14.1566 17.1571 12.1217 18 10 18V18Z" fill="#FCC43E"/>
																<path d="M13 9H11V5C11 4.73478 10.8946 4.48043 10.7071 4.29289C10.5196 4.10536 10.2652 4 10 4C9.73478 4 9.48043 4.10536 9.29289 4.29289C9.10536 4.48043 9 4.73478 9 5V10C9 10.2652 9.10536 10.5196 9.29289 10.7071C9.48043 10.8946 9.73478 11 10 11H13C13.2652 11 13.5196 10.8946 13.7071 10.7071C13.8946 10.5196 14 10.2652 14 10C14 9.73478 13.8946 9.48043 13.7071 9.29289C13.5196 9.10536 13.2652 9 13 9Z" fill="#FCC43E"/>
																</svg>
																Start Date: March 20, 2022
															</li>
															<li>
																<svg class="me-2 ms-1" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M10 0C8.02219 0 6.08879 0.58649 4.4443 1.6853C2.79981 2.78412 1.51809 4.3459 0.761209 6.17317C0.00433284 8.00043 -0.193701 10.0111 0.192152 11.9509C0.578004 13.8907 1.53041 15.6725 2.92894 17.0711C4.32746 18.4696 6.10929 19.422 8.0491 19.8079C9.98891 20.1937 11.9996 19.9957 13.8268 19.2388C15.6541 18.4819 17.2159 17.2002 18.3147 15.5557C19.4135 13.9112 20 11.9778 20 10C20 8.68678 19.7413 7.38642 19.2388 6.17317C18.7363 4.95991 17.9997 3.85752 17.0711 2.92893C16.1425 2.00035 15.0401 1.26375 13.8268 0.761205C12.6136 0.258658 11.3132 0 10 0V0ZM10 18C8.41775 18 6.87104 17.5308 5.55544 16.6518C4.23985 15.7727 3.21447 14.5233 2.60897 13.0615C2.00347 11.5997 1.84504 9.99113 2.15372 8.43928C2.4624 6.88743 3.22433 5.46197 4.34315 4.34315C5.46197 3.22433 6.88743 2.4624 8.43928 2.15372C9.99113 1.84504 11.5997 2.00346 13.0615 2.60896C14.5233 3.21447 15.7727 4.23984 16.6518 5.55544C17.5308 6.87103 18 8.41775 18 10C18 12.1217 17.1572 14.1566 15.6569 15.6569C14.1566 17.1571 12.1217 18 10 18V18Z" fill="#FCC43E"/>
																<path d="M13 9H11V5C11 4.73478 10.8946 4.48043 10.7071 4.29289C10.5196 4.10536 10.2652 4 10 4C9.73478 4 9.48043 4.10536 9.29289 4.29289C9.10536 4.48043 9 4.73478 9 5V10C9 10.2652 9.10536 10.5196 9.29289 10.7071C9.48043 10.8946 9.73478 11 10 11H13C13.2652 11 13.5196 10.8946 13.7071 10.7071C13.8946 10.5196 14 10.2652 14 10C14 9.73478 13.8946 9.48043 13.7071 9.29289C13.5196 9.10536 13.2652 9 13 9Z" fill="#FCC43E"/>
																</svg>
																Due Date: March 20, 2022
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>	
									</a>
								</div>
								<div class="col-xl-12">
									<button type="button" class="btn btn-primary light btn-rounded btn-block mb-5">View More</button>
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

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-center">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">New Class Work</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-xl-12">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Title</label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Class Work Title">
							</div>
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Description</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="6" style="height: 230px;"></textarea>
							</div>	
						</div>
						<div class="col-xl-6">
							<div class="col mb-3">
								<label for="exampleFormControlInput2" class="form-label">Start Date</label>
								<input type="date" class="form-control" id="exampleFormControlInput2">
							</div>
						</div>	
						<div class="col-xl-6">
							<div class="col mb-3">
								<label for="exampleFormControlInput2" class="form-label">End Date</label>
								<input type="date" class="form-control" id="exampleFormControlInput2">
							</div>
						</div>		
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-sm btn-danger light" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-sm btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>

<?php include_once __DIR__ . '/footer.php'; ?>
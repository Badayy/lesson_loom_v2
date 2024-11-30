<?php include_once __DIR__ . '/header.php'; ?>
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body message-body mh-auto">
            <!-- row -->
			<div class="container-fluid mh-auto p-0">
				<div class="row gx-0">
					<div class="col-xl-3 col-xxl-4 col-md-5 chat-left-area">
						<div class="card dlab-scroll chat-sidebar rounded-0 mb-0" id="chat-sidebar">
							<div class="card-body">
								<div class="message-box d-flex align-items-center justify-content-between border-0">
									<div class="input-group search-area">
										<input type="text" class="form-control" placeholder="Search here...">
										<span class="input-group-text"><a href="javascript:void(0)">
											<svg width="15" height="15" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M17.5605 15.4395L13.7527 11.6317C14.5395 10.446 15 9.02625 15 7.5C15 3.3645 11.6355 0 7.5 0C3.3645 0 0 3.3645 0 7.5C0 11.6355 3.3645 15 7.5 15C9.02625 15 10.446 14.5395 11.6317 13.7527L15.4395 17.5605C16.0245 18.1462 16.9755 18.1462 17.5605 17.5605C18.1462 16.9747 18.1462 16.0252 17.5605 15.4395V15.4395ZM2.25 7.5C2.25 4.605 4.605 2.25 7.5 2.25C10.395 2.25 12.75 4.605 12.75 7.5C12.75 10.395 10.395 12.75 7.5 12.75C4.605 12.75 2.25 10.395 2.25 7.5V7.5Z" fill="var(--primary)"></path>
											</svg>
										</a></span>
									</div>
									<button class="add btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
										<svg width="15" height="15	" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.87826 10.0611H0V5.869H5.87826V0H10.0522V5.869H16V10.0611H10.0522V16H5.87826V10.0611Z" fill="white"/>
										</svg>
									</button>
									
								</div>
								<div class="chat-people">
									<div class="d-flex justify-content-between">
										<h4 class="m-0 fs-18 font-w600">Contacts</h4>
										<a href="javascript:void(0);">View All</a>
									</div>
									<ul class="d-flex align-items-center justify-content-between mt-2 contact-list">
										<li><img src="images/contacts/pic-333.jpg" alt=""></li>
										<li><img src="images/contacts/pic444.jpg" alt=""></li>
										<li><img src="images/contacts/pic555.jpg" alt=""></li>
										<li><img src="images/contacts/pic-333.jpg" alt=""></li>
										<li><img src="images/contacts/pic666.jpg" alt=""></li>
										<li><img src="images/contacts/pic444.jpg" alt=""></li>
									</ul>
								</div>

								
								<!--chat-tabs-->
								<div class="chat-tabs">
									<h4>Chats</h4>
									<div class="course-details-tab style-2">
										<ul>
											<li class="chat-bx chats">
												<div class="chat-img">
													<img src="images/coures/5.jpg" alt="">
												</div>
												<div class="mid-info">
													<h4 class="name">Design Team (32)</h4>
													<span>Lorem ipsum dolor sit amet.</span>
												</div>
												<div class="right-info">
													<p>12:45 PM</p>
												</div>
											</li>
											<li class="chat-bx chats">
												<div class="chat-img">
													<img src="images/coures/6.jpg" alt="">
												</div>
												<div class="mid-info">
													<h4 class="name">Tony Soap</h4>
													<span>Lorem ipsum dolor sit amet is the dummy text.</span>
												</div>
												<div class="right-info">
													<p>12:45 PM</p>
													
												</div>
											</li>
											<li class="chat-bx chats active">
												<div class="chat-img">
													<img src="images/coures/7.jpg" alt="">
												</div>
												<div class="mid-info">
													<h4 class="name">Karen Hope</h4>
													<span>Lorem ipsum dolor sit amet is the dummy text.</span>
												</div>
												<div class="right-info">
													<p>12:45 PM</p>
													
												</div>
											</li>
										</ul>
								
									</div>	
								</div>
								<!--chat-tabs-->
								<button type="button" class="btn btn-primary light btn-rounded btn-block"> View More</button>
							</div>
						</div>
					</div>
					<!--column-->
					<div class="col-xl-9 col-xxl-8 col-md-7 chat-mid-area bg-white">
						<div class="message-box style-1 d-flex align-items-center">
							<img src="images/coures/1.jpg" alt="">
							<div class="ms-2 ms-sm-3  flex-1">
								<h4>Jordan</h4>
								<span>
									<svg width="15" height="15" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="8" cy="8" r="8" fill="#4CBC9A"/>
										</svg>
										
									 Online
								</span>
							</div>
							<div class="chat-hamburger ms-auto">
								<div class="chat-toggle">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24"></rect>
											<rect fill="var(--primary)" x="4" y="4" width="7" height="7" rx="1.5"></rect>
											<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="var(--primary)" opacity="0.8"></path>
										</g>
									</svg>
								</div>
								<div class="videos-player">
									<a href="javascript:void(0);" class="videos-btn">
										<svg width="25" height="25" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M19.9997 8H3.99967C2.52691 8 1.33301 9.19391 1.33301 10.6667V21.3333C1.33301 22.8061 2.52691 24 3.99967 24H19.9997C21.4724 24 22.6663 22.8061 22.6663 21.3333V10.6667C22.6663 9.19391 21.4724 8 19.9997 8Z" stroke="#A098AE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M30.666 9.33325V22.6666L22.666 15.9999L30.666 9.33325Z" stroke="#A098AE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											</svg>
											
									</a>	 
								</div>
								<div class="dropdown custom-dropdown">
									<div class="" data-bs-toggle="dropdown">
										<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M12.0012 9.35986C11.6543 9.35986 11.3109 9.42818 10.9904 9.56091C10.67 9.69365 10.3788 9.88819 10.1335 10.1335C9.88829 10.3787 9.69374 10.6699 9.56101 10.9903C9.42828 11.3108 9.35996 11.6542 9.35996 12.0011C9.35996 12.3479 9.42828 12.6914 9.56101 13.0118C9.69374 13.3323 9.88829 13.6234 10.1335 13.8687C10.3788 14.1139 10.67 14.3085 10.9904 14.4412C11.3109 14.5739 11.6543 14.6423 12.0012 14.6423C12.7017 14.6421 13.3734 14.3637 13.8686 13.8682C14.3638 13.3728 14.6419 12.701 14.6418 12.0005C14.6416 11.3 14.3632 10.6282 13.8677 10.133C13.3723 9.63782 12.7004 9.3597 12 9.35986H12.0012ZM3.60116 9.35986C3.25431 9.35986 2.91086 9.42818 2.59042 9.56091C2.26997 9.69365 1.97881 9.88819 1.73355 10.1335C1.48829 10.3787 1.29374 10.6699 1.16101 10.9903C1.02828 11.3108 0.959961 11.6542 0.959961 12.0011C0.959961 12.3479 1.02828 12.6914 1.16101 13.0118C1.29374 13.3323 1.48829 13.6234 1.73355 13.8687C1.97881 14.1139 2.26997 14.3085 2.59042 14.4412C2.91086 14.5739 3.25431 14.6423 3.60116 14.6423C4.30165 14.6421 4.97339 14.3637 5.4686 13.8682C5.9638 13.3728 6.24192 12.701 6.24176 12.0005C6.2416 11.3 5.96318 10.6282 5.46775 10.133C4.97231 9.63782 4.30045 9.3597 3.59996 9.35986H3.60116ZM20.4012 9.35986C20.0543 9.35986 19.7109 9.42818 19.3904 9.56091C19.07 9.69365 18.7788 9.88819 18.5336 10.1335C18.2883 10.3787 18.0937 10.6699 17.961 10.9903C17.8283 11.3108 17.76 11.6542 17.76 12.0011C17.76 12.3479 17.8283 12.6914 17.961 13.0118C18.0937 13.3323 18.2883 13.6234 18.5336 13.8687C18.7788 14.1139 19.07 14.3085 19.3904 14.4412C19.7109 14.5739 20.0543 14.6423 20.4012 14.6423C21.1017 14.6421 21.7734 14.3637 22.2686 13.8682C22.7638 13.3728 23.0419 12.701 23.0418 12.0005C23.0416 11.3 22.7632 10.6282 22.2677 10.133C21.7723 9.63782 21.1005 9.3597 20.4 9.35986H20.4012Z" fill="#A098AE"/>
											</svg>
											
									</div>
									<div class="dropdown-menu dropdown-menu-end">
										<a class="dropdown-item" href="javascript:void(0);">Option 1</a>
										<a class="dropdown-item" href="javascript:void(0);">Option 2</a>
										<a class="dropdown-item" href="javascript:void(0);">Option 3</a>
									</div>
								</div>
							</div>
						</div>
						<!--/column-->
						<div class="chart-content">
							<div class="chat-box-area dlab-scroll" id="chartBox">
								<div class="media my-4">
									<div class="dz-media">
										<img src="./images/coures/8.jpg" alt="">
									</div>
									<div class="message-received w-auto">
										<h5>Jordan</h5>
										<div>
											<p class="mb-2">
											Hello Nella!
											</p>
										</div>
										<div>
											<p class="mb-2">
												Can you arrange schedule for next meeting?
											</p>
											<span class="fs-14">12:45 PM</span>
										</div>
									</div>
								</div>
								<div class="media mb-4 justify-content-end align-items-start">
									<div class="message-sent w-auto">
										<h5>Natasha</h5>
										<div>
											<p class="mb-2">
											Hello Karen!
											</p>
											<span class="fs-12">9.30 AM</span>
										</div>
										<div>
											<p class="mb-2">
												Okay, I’ll arrange it soon. i noftify you when it’s done
											</p>
											<span class="fs-12">9.30 AM</span>
										</div>
									</div>
									<div class="dz-media ms-2">
										<img src="./images/coures/9.jpg" alt="">
									</div>
								</div>
								<div class="media mb-4 justify-content-end align-items-start">
									<div class="message-sent">
										<h5>Natasha</h5>
										<div>
											<p class="mb-2">
												Okay, I’ll arrange it soon. i noftify you when it’s done
												<br>
												+91-235 2574 2566
												<br>
												kk Sharma
												<br>
												pan card eeer2063i
											</p>
											<span class="fs-12">9.30 AM</span>
										</div>
									</div>
									<div class="dz-media ms-2">
										<img src="./images/coures/9.jpg" alt="">
									</div>
								</div>
								<div class="media my-4">
									<div class="dz-media">
										<img src="./images/coures/8.jpg" alt="">
									</div>
									<div class="message-received w-auto">
										<h5>Jordan</h5>
										<div>
											<p class="mb-2">
											Hello Nella!
											</p>
										</div>
										<div >
											<p class="mb-2">
												Can you arrange schedule for next meeting?
											</p>
											<div class="dz-media">
												<img src="./images/coures/9.png" alt="">
											</div>
											<span class="fs-14">12:45 PM</span>
										</div>
									</div>
								</div>							
							</div>
							<div class="type-massage">
								<div class="input-group">
									<textarea class="form-control" placeholder="Write your message..."></textarea>
									<div class="input-group-append">
										<button type="button" class="btn share-btn">
											<svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14.3251 34.2002C13.0909 34.1974 11.8852 33.8294 10.86 33.1424C9.83471 32.4555 9.03576 31.4804 8.56385 30.3401C8.09194 29.1997 7.96819 27.9452 8.20821 26.7346C8.44823 25.5241 9.04126 24.4117 9.91256 23.5377L20.5126 12.9252C20.8614 12.5763 21.2755 12.2996 21.7313 12.1108C22.187 11.9221 22.6755 11.8249 23.1688 11.8249C23.6621 11.8249 24.1506 11.9221 24.6064 12.1108C25.0621 12.2996 25.4762 12.5763 25.8251 12.9252C26.1739 13.274 26.4506 13.6881 26.6394 14.1439C26.8282 14.5996 26.9253 15.0881 26.9253 15.5814C26.9253 16.0747 26.8282 16.5632 26.6394 17.019C26.4506 17.4747 26.1739 17.8888 25.8251 18.2377L15.2126 28.8377C15.1005 28.9685 14.9626 29.0748 14.8075 29.1498C14.6524 29.2248 14.4835 29.267 14.3114 29.2736C14.1392 29.2803 13.9676 29.2513 13.8072 29.1884C13.6468 29.1256 13.5011 29.0303 13.3792 28.9085C13.2574 28.7866 13.1621 28.641 13.0993 28.4806C13.0364 28.3201 13.0074 28.1485 13.0141 27.9763C13.0207 27.8042 13.0629 27.6353 13.1379 27.4802C13.2129 27.3251 13.3192 27.1872 13.4501 27.0752L24.0501 16.4627C24.2548 16.2235 24.3619 15.9159 24.3497 15.6013C24.3375 15.2867 24.2071 14.9883 23.9845 14.7657C23.7619 14.5431 23.4635 14.4127 23.1489 14.4005C22.8343 14.3884 22.5267 14.4954 22.2876 14.7002L11.6751 25.3002C10.9706 26.0046 10.5748 26.9601 10.5748 27.9564C10.5748 28.9527 10.9706 29.9082 11.6751 30.6127C12.3795 31.3171 13.335 31.7129 14.3313 31.7129C15.3276 31.7129 16.2831 31.3171 16.9876 30.6127L27.5876 20.0002C28.726 18.8214 29.356 17.2426 29.3418 15.6039C29.3275 13.9652 28.6702 12.3976 27.5114 11.2388C26.3526 10.08 24.785 9.42268 23.1463 9.40844C21.5076 9.3942 19.9288 10.0242 18.7501 11.1627L12.5626 17.4127C12.3284 17.6455 12.0115 17.7761 11.6813 17.7761C11.3511 17.7761 11.0343 17.6455 10.8001 17.4127C10.6829 17.2964 10.5899 17.1582 10.5264 17.0059C10.463 16.8535 10.4303 16.6902 10.4303 16.5252C10.4303 16.3601 10.463 16.1968 10.5264 16.0444C10.5899 15.8921 10.6829 15.7539 10.8001 15.6377L16.9876 9.38765C18.6286 7.74663 20.8543 6.82471 23.1751 6.82471C25.4958 6.82471 27.7215 7.74663 29.3626 9.38765C31.0036 11.0287 31.9255 13.2544 31.9255 15.5752C31.9255 17.8959 31.0036 20.1216 29.3626 21.7627L18.7501 32.3752C18.1686 32.9552 17.4785 33.4149 16.7192 33.728C15.9599 34.0412 15.1464 34.2016 14.3251 34.2002Z" fill="#01A3FF"/>
											</svg>
										</button>
										
										<button type="button" class="btn btn-primary rounded text-white">
											
											Send
											<svg width="24" height="24" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M4.52444 5.34375L4.96144 7.21875L6.90044 15.9998L4.96044 24.7808L4.52344 26.6558L6.30444 25.9378L28.3044 16.9378L30.5864 15.9998L28.3054 15.0618L6.30544 6.06175L4.52444 5.34375ZM7.30544 8.65575L22.8364 14.9998H8.71144L7.30544 8.65575ZM8.71144 16.9998H22.8364L7.30544 23.3438L8.71144 16.9998Z" fill="white"/>
												</svg>
												
										</button>
									</div>
								</div>
							</div>
						</div>

					</div>
					<!--/column-->
					
				</div>
			</div>
		</div>	
        <!--**********************************
            Content body end
        ***********************************-->

      
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
	Modal
***********************************-->
	<!--**********************************
		Modal
***********************************-->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-center">
	  <div class="modal-content">
		<div class="modal-header">
		  <h1 class="modal-title fs-5" id="exampleModalLabel">New Chat</h1>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-xl-6">
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Chat Title</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Food">
					  </div>
				</div>
				<div class="col-xl-6">
					<div class="mb-3">
						<label for="exampleFormControlInput2" class="form-label">Chat Position</label>
						<input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Food">
					  </div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save changes</button>
		</div>
	  </div>
	</div>
  </div>

<!--**********************************
	Modal
***********************************-->
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	
	<!-- wow.js -->
	<script src="vendor/wow-master/dist/wow.min.js"></script>
	
    <script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
	<script>
		//$(".nav-control").on('click', function() {
		$(".chat-toggle").on('click', function(){
		$(' .chat-left-area ,.chat-toggle').toggleClass("active");
	  });
	</script>

</body>
</html>
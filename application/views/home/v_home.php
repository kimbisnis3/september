<!DOCTYPE html>
<html class="no-js">
<?php $this->load->view('_partials/head') ?>
<body>
	<div class="theme-layout">
		<?php $this->load->view('_partials/topbar') ?>

		<section>
			<div class="block no-padding">
				<div class="row">
					<div class="col-md-12">
						<div class="creative-slider">
							<div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1">
								<div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;">
									<ul>
										<?php foreach ($slider as $i => $v): ?>
											<li data-index="rs-1" data-transition="fade" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="500" data-title="Slide 1">
												<!-- MAIN IMAGE -->
												<img src="<?php echo base_url().$v->image ?>"  alt=""  data-bgposition="center center"  data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="4" class="rev-slidebg" data-no-retina>
												<!-- LAYER NR. 1 -->
												<div class="tp-caption layer1 tp-resizeme"
												id="slide-1-layer-1"
												data-x="center" data-hoffset=""
												data-y="center" data-voffset="-110"
												data-width="['auto','auto','auto','auto']"
												data-height="['auto','auto','auto','auto']"
												data-transform_idle="o:1;"
												data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:-90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
												data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
												data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
												data-start="1500"
												data-splitin="chars"
												data-splitout="none"
												data-responsive_offset="on"
												data-elementdelay="0.05"
												style="font-size:18px;letter-spacing:0.3px; display: none;">Education Needs Complete Solution
												</div>

												<!-- LAYER NR. 2 -->
												<div class="tp-caption layer2 tp-resizeme"
												id="slide-1-layer-2"
												data-x="center" data-hoffset=""
												data-y="center" data-voffset="-65"
												data-width="['auto','auto','auto','auto']"
												data-height="['auto','auto','auto','auto']"
												data-transform_idle="o:1;"
												data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;"
												data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
												data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
												data-start="2000"
												data-splitin="none"
												data-splitout="none"
												data-responsive_offset="on"
												data-elementdelay="0.05"
												style="font-size:42px;letter-spacing:0.3px;line-height:45px; display: none;">START LEARNING <span>TODAY!</span>
												</div>

												<!-- LAYER NR. 3 -->
												<div title="" class="tp-caption layer3 tp-resizeme"
												id="slide-1-layer-3"
												data-x="center" data-hoffset=""
												data-y="center" data-voffset=""
												data-width="['auto','auto','auto','auto']"
												data-height="['auto','auto','auto','auto']"
												data-transform_idle="o:1;"
												data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;"
												data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
												data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
												data-start="2200"
												data-splitin="none"
												data-splitout="none"
												data-responsive_offset="on"
												data-elementdelay="0.05"
												style="font-size:16px;letter-spacing:0.3; line-height:28px; display: none;">Join our community to get Updates and Special Offers. You can <br> unsubscribe at any time (we can still be friends)!”
												</div>

												<!-- LAYER NR. 4 -->
												<a href="#" title="" class="tp-caption layer4 tp-resizeme"
												id="slide-1-layer-4"
												data-x="center" data-hoffset=""
												data-y="center" data-voffset="90"
												data-width="['auto','auto','auto','auto']"
												data-height="['auto','auto','auto','auto']"
												data-transform_idle="o:1;"
												data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;"
												data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
												data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
												data-start="2500"
												data-splitin="none"
												data-splitout="none"
												data-responsive_offset="on"
												data-elementdelay="0.05"
												style="font-size:12px;letter-spacing:0.3;padding:8px 35px; display: none;">Classes Schdule
												</a>
	 										</li>
										<?php endforeach; ?>

									</ul>
								</div>
							</div>
						</div><!-- Creative Slider  -->
					</div>
				</div>
			</div>
		</section>


		<section>
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="title" style="margin-bottom: 30px;">
								<h2><?php echo $elhome->judul; ?></h2>
								<span><?php echo $elhome->subjudul; ?></span>
								<p><?php echo $elhome->teks; ?></p>
							</div>

							<div class="easyedu-services" style="display: none">
								<div class="row">
									<div class="col-md-4">
										<div class="edu-service">
											<img src="images/resource/service1.png" alt="" />
											<h3>Update My Information</h3>
											<p>Mauris eleifend nisi justo, in volutpat magna nterdum et male suada fames. </p>
										</div><!-- Edu Service -->
									</div>
									<div class="col-md-4">
										<div class="edu-service">
											<img src="images/resource/service2.png" alt="" />
											<h3>Courses Management </h3>
											<p>Mauris eleifend nisi justo, in volutpat magna nterdum et male suada fames. </p>
										</div><!-- Edu Service -->
									</div>
									<div class="col-md-4">
										<div class="edu-service">
											<img src="images/resource/service3.png" alt="" />
											<h3>Books And Library</h3>
											<p>Mauris eleifend nisi justo, in volutpat magna nterdum et male suada fames. </p>
										</div><!-- Edu Service -->
									</div>
								</div>
							</div><!-- Edu Services -->
							<div class="button-set">
								<a class="button active" href="contact.html" title="">Learn more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section>
			<div class="block gray">
				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<div class="edu-tabs">
								<div class="row">
									<div class="col-md-9" style="display: none">
										<div class="tab-carousel">
											<div data-hash="tab1" class="tab-content">
												<h4>Institue Mission</h4>
												<span>Our Institute Has To Offer</span>
												<p>Vestibulum at magna tellus. Vivamus sagittis et nunc ut in orci aliquam, ac vulputa leo vehicula. Mauris porttit magna tellus vivamus sagittis et nunc. Duis aute irure dolor in reprehe nderit in voluptate velit esse cillum dolore eu.</p>
												<p>Fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
											</div>
											<div data-hash="tab2" class="tab-content">
												<h4>Register Now </h4>
												<span>ONLINE COURSES FOR FREE</span>
												<p>Vestibulum at magna tellus. Vivamus sagittis et nunc ut in orci aliquam, ac vulputa leo vehicula. Mauris porttit magna tellus vivamus sagittis et nunc. Duis aute irure dolor in reprehe nderit in voluptate velit esse cillum dolore eu.</p>
												<p>Fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
											</div>
											<div data-hash="tab3" class="tab-content">
												<h4>Our Teachers</h4>
												<span>Best Chef In Our School</span>
												<p>Vestibulum at magna tellus. Vivamus sagittis et nunc ut in orci aliquam, ac vulputa leo vehicula. Mauris porttit magna tellus vivamus sagittis et nunc. Duis aute irure dolor in reprehe nderit in voluptate velit esse cillum dolore eu.</p>
												<p>Fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
											</div>
										</div>
									</div>
									<div class="col-md-3" style="display: none">
										<div class="selectors-wrapper">
											<div class="tabs-selectors">
												<div class="selectors-inner">
													<a class="url active" href="#tab1" title="">01</a>
													<a class="url" href="#tab2" title="">02</a>
													<a class="url" href="#tab3" title="">03</a>
												</div>
											</div><!-- Tabs Selectors -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-5" style="display: none">
							<div class="explore-edu">
								<i>Explore What Our Institute Has To Offer</i>
								<h2>We are <i>EASY EDU</i> <strong>Learning System</strong>  <span>Since <i>1920</i></span></h2>
								<a class="button active" href="contact.html" title="">Get Free Quote</a>
							</div><!-- Explore Edu -->
						</div>
						<div class="col-md-12">
							<div class="gap" style="display: none"></div>
							<div class="easyedu-counter">
								<div class="row">
									<div class="col-md-3">
										<div class="counter">
											<img src="images/resource/edu-counter1.png" alt="" />
											<div class="counter-inner">
												<strong><i class="count">1000</i> +</strong>
												<span>Students</span>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="counter">
											<img src="images/resource/edu-counter2.png" alt="" />
											<div class="counter-inner">
												<strong><i class="count">18</i></strong>
												<span>Teachers</span>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="counter">
											<img src="images/resource/edu-counter3.png" alt="" />
											<div class="counter-inner">
												<strong><i class="count">15</i> </strong>
												<span>Facilities</span>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="counter">
											<img src="images/resource/edu-counter4.png" alt="" />
											<div class="counter-inner">
												<strong><i class="count">30</i></strong>
												<span>Wining Awards</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="block">
				<div class="container">
					<div class="col-md-8">
						<div class="side-title">
							<span><?php echo $elhome2->judul; ?></span>
							<h2><?php echo $elhome2->subjudul; ?></i></h2>
						</div>
						<div class="educational-programs">
							<p><?php echo $elhome2->teks; ?></p>
							<div class="row">
								<div class="col-md-6">
									<div class="program">
										<div class="prog-icon"><span><img src="images/resource/prog1.png" alt="" /></span></div>
										<div class="prog-detail">
											<h4>Early Learning Center</h4>
											<p>Early Learning Centre Curriculum (18 Months – 5 Years Old).</p>
										</div>
									</div><!-- Program -->
								</div>
								<div class="col-md-6">
									<div class="program">
										<div class="prog-icon"><span><img src="images/resource/prog2.png" alt="" /></span></div>
										<div class="prog-detail">
											<h4>Primary School</h4>
											<p>Primary School Curriculum (6-12 Years Old).</p>
										</div>
									</div><!-- Program -->
								</div>
								<div class="col-md-6">
									<div class="program">
										<div class="prog-icon"><span><img src="images/resource/prog3.png" alt="" /></span></div>
										<div class="prog-detail">
											<h4>Secondary School</h4>
											<p>Secondary Sschool Curriculum (12-16 Years Old)</p>
										</div>
									</div><!-- Program -->
								</div>
								<div class="col-md-6">
									<div class="program">
										<div class="prog-icon"><span><img src="images/resource/prog4.png" alt="" /></span></div>
										<div class="prog-detail">
											<h4>Junior College</h4>
											<p>Junior College Curriculum (16 Years Old And Above)</p>
										</div>
									</div><!-- Program -->
								</div>
							</div>
						</div><!-- Educational Programs -->
					</div>

					<div class="col-md-4">
						<div class="mockup"><img src="images/resource/books-mockup.png" alt="" /></div>
					</div>
				</div>
			</div>
		</section>

		<section style="display: none">
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="title">
								<h2>OUR FEATURED COURSES</h2>
								<span>Choose Your Courses</span>
								<p>Vestibulum at magna tellus. Vivamus sagittis et nunc ut in orci aliquam, ac vulputa leo vehicula. Mauris porttit magna tellus. Vivamus sagittis et nunc.</p>
							</div>

							<div class="featured-courses">
								<div class="row">
									<div class="col-md-4">
										<div class="edu-course">
											<div class="edu-img"><img src="images/resource/course1.jpg" alt="" /></div>
											<div class="edu-detail">
												<h3><a href="course-detail.html" title="">Objectives Should Be Stated Clearly</a></h3>
												<p>Vestibulum at magna tellus. Vivamus sag ittis et nunc ut in orci aliquam, ac vulputa leo vehicula sagittis et nunc.</p>
												<div class="course-bar">
													<span>$450.00</span>
													<div class="admin-name"><i>Carla Simpson</i> <img src="images/resource/admin1.jpg" alt="" /></div>
												</div>
											</div>
										</div><!-- Edu Course -->
									</div>
									<div class="col-md-4">
										<div class="edu-course">
											<div class="edu-img"><img src="images/resource/course2.jpg" alt="" /></div>
											<div class="edu-detail">
												<h3><a href="course-detail.html" title="">Elizabethan Theater is adipiscing elit</a></h3>
												<p>Vestibulum at magna tellus. Vivamus sag ittis et nunc ut in orci aliquam, ac vulputa leo vehicula sagittis et nunc.</p>
												<div class="course-bar">
													<span>$290.00</span>
													<div class="admin-name"><i>Jane Taylor</i> <img src="images/resource/admin2.jpg" alt="" /></div>
												</div>
											</div>
										</div><!-- Edu Course -->
									</div>
									<div class="col-md-4">
										<div class="edu-course">
											<div class="edu-img"><img src="images/resource/course3.jpg" alt="" /></div>
											<div class="edu-detail">
												<h3><a href="course-detail.html" title="">Informatic Course Be Stated Clearly</a></h3>
												<p>Vestibulum at magna tellus. Vivamus sag ittis et nunc ut in orci aliquam, ac vulputa leo vehicula sagittis et nunc.</p>
												<div class="course-bar">
													<span>$381.00</span>
													<div class="admin-name"><i>Gwen Jones</i> <img src="images/resource/admin3.jpg" alt="" /></div>
												</div>
											</div>
										</div><!-- Edu Course -->
									</div>
								</div>
							</div><!-- Featured Courses -->
							<div class="button-set">
								<a class="button active" href="courses.html" title="">View All Classes</a>
								<a class="button" href="courses2.html" title="">Search Courses</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section>
			<div class="block blackish" style="display: none">
			<div class="fixed-bg bg1"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="parallax-title">
								<i>Its time to change in yourself</i>
								<h2>Find Next Course To</h2>
								<span>Boot Your Career</span>
								<p>Vestibulum at magna tellus nunc utin orci aliquam, new equipment digest delivers <br> the latest industrial product information ac vulputate ipsmcon.</p>
							</div>

							<div class="search-course">
								<form>
									<div class="row">
										<div class="col-md-8"><input type="text" placeholder="Enter Your Course Name" /></div>
										<div class="col-md-4"><button class="button active">Search Now</button></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section style="display: none">
			<div class="block remove-gap">
			<div class="fixed-bg stop bg2"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="title">
								<h2>Our Education staff</h2>
								<span>Learn From Best Staff</span>
								<p>Vestibulum at magna tellus. Vivamus sagittis et nunc ut in orci aliquam, ac vulputa leo vehicula. Mauris porttit magna tellus. Vivamus sagittis et nunc.</p>
							</div>

							<div class="educational-staff">
								<div class="row">
									<div class="col-md-4">
										<div class="staff">
											<div class="staff-img"><img src="images/resource/staff1.jpg" alt="" /></div>
											<div class="staff-detail">
												<h4><a href="team-detail.html" title="">Jeremy Remark</a></h4>
												<span>Multi Teacher</span>
												<div class="connected">
													<strong>Stay Connected</strong>
													<a href="#" title=""><i class="fa fa-facebook"></i></a>
													<a href="#" title=""><i class="fa fa-twitter"></i></a>
													<a href="#" title=""><i class="fa fa-linkedin"></i></a>
												</div>
											</div>
										</div><!-- Staff -->
									</div>
									<div class="col-md-4">
										<div class="staff">
											<div class="staff-img"><img src="images/resource/staff2.jpg" alt="" /></div>
											<div class="staff-detail">
												<h4><a href="team-detail.html" title="">Maria Lehman</a></h4>
												<span>IT Expert & Teacher</span>
												<div class="connected">
													<strong>Stay Connected</strong>
													<a href="#" title=""><i class="fa fa-facebook"></i></a>
													<a href="#" title=""><i class="fa fa-twitter"></i></a>
													<a href="#" title=""><i class="fa fa-linkedin"></i></a>
												</div>
											</div>
										</div><!-- Staff -->
									</div>
									<div class="col-md-4">
										<div class="staff">
											<div class="staff-img"><img src="images/resource/staff3.jpg" alt="" /></div>
											<div class="staff-detail">
												<h4><a href="team-detail.html" title="">Arnold Chesku</a></h4>
												<span>Accounting and Finance</span>
												<div class="connected">
													<strong>Stay Connected</strong>
													<a href="#" title=""><i class="fa fa-facebook"></i></a>
													<a href="#" title=""><i class="fa fa-twitter"></i></a>
													<a href="#" title=""><i class="fa fa-linkedin"></i></a>
												</div>
											</div>
										</div><!-- Staff -->
									</div>
								</div>
							</div><!-- Educational Staff -->

							<div class="button-set">
								<a class="button active" href="contact.html" title="">Get In Touch</a>
								<a class="button" href="team.html" title="">All Teachers</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section>
			<div class="block no-padding blackish">
			<div class="fixed-bg bg3"></div>
				<div class="row">
					<div class="col-md-12">
						<div class="edu-event">
							<div class="event-img"><img src="images/resource/upcoming-event.jpg" alt="" /></div>
							<div class="event-detail">
								<div class="event-date"><span>15</span> September</div>
								<div class="event-description">
									<i>Upcoming Event</i>
									<h3><a href="event-detail.html" title="">Annual Meetup And Scholarship Presentation</a></h3>
									<span class="loc"><i class="fa fa-map-marker"></i> S.P.A. Solo Raya, Solo Baru</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
								<a class="event-btn" href="event-detail.html" title="">View more Event</a>
							</div>
						</div><!-- Edu Event -->
					</div>
				</div>
			</div>
		</section>


		<section>
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="title">
								<h2><?php echo $ellastest->judul; ?></h2>
								<span><?php echo $ellastest->subjudul; ?></span>
								<p><?php echo $ellastest->teks; ?></p>
							</div>

							<div class="edu-blog">
								<div class="row">
									<div class="col-md-4">
										<div class="edu-post">
											<div class="post-img"><img src="images/resource/post1.jpg" alt="" /></div>
											<div class="post-detail">
												<span>02 November 2016</span>
												<h3><a href="blog-details.html" title="">The Surprising Reason College Tuition Is Crazy Expensive</a></h3>
												<ul class="meta" style="display: none;">
													<li><a href="#" title="">03 Comment</a></li>
													<li>By: Addam Smith</li>
												</ul>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											</div>
										</div><!-- Edu Post -->
									</div>
									<div class="col-md-4">
										<div class="edu-post">
											<div class="post-img"><img src="images/resource/post2.jpg" alt="" /></div>
											<div class="post-detail">
												<span>02 November 2016</span>
												<h3><a href="blog-details.html" title="">Atiam Ornare Condimentum Massa Sceleri Sque</a></h3>
												<ul class="meta" style="display: none;">
													<li><a href="#" title="">03 Comment</a></li>
													<li>By: Addam Smith</li>
												</ul>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											</div>
										</div><!-- Edu Post -->
									</div>
									<div class="col-md-4">
										<div class="edu-post">
											<div class="post-img"><img src="images/resource/post3.jpg" alt="" /></div>
											<div class="post-detail">
												<span>02 November 2016</span>
												<h3><a href="blog-details.html" title="">Neque porro quisquam est dolorem ipsum dolor</a></h3>
												<ul class="meta" style="display: none;">
													<li><a href="#" title="">03 Comment</a></li>
													<li>By: Addam Smith</li>
												</ul>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											</div>
										</div><!-- Edu Post -->
									</div>
								</div>
							</div><!-- Edu Blog -->
							<div class="button-set">
								<br><br>
								<a class="button active" href="blog.html" title="">View all News & Events</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section>
			<div class="block gray" style="display: none">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<img src="images/resource/cambridge.png" style="height: 100px;">
							<img src="images/resource/diknas.png" style="height: 100px;">
						</div>
					</div>
				</div>
			</div>
		</section>
<?php $this->load->view('_partials/foot') ?>
	</div>
</body>
<?php $this->load->view('_partials/js') ?>

</html>

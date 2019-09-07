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
								<?php foreach ($educational as $i => $v): ?>
								<div class="col-md-6">
									<div class="program">
										<div class="prog-icon"><span><img src="<?php echo base_url().$v->image; ?>" alt="" /></span></div>
										<div class="prog-detail">
											<h4><?php echo $v->judul; ?></h4>
											<p><?php echo $v->artikel; ?></p>
										</div>
									</div><!-- Program -->
								</div>
								<?php endforeach; ?>
							</div>
						</div><!-- Educational Programs -->
					</div>

					<div class="col-md-4">
						<div class="mockup"><img src="<?php echo base_url().$imghome->image; ?>" alt="" /></div>
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

		<section>
			<div class="block no-padding blackish">
			<div class="fixed-bg bg3"></div>
				<div class="row">
					<div class="col-md-12">
						<div class="edu-event">
							<div class="event-img"><img src="<?php echo base_url().$lastnews->image; ?>" alt="" /></div>
							<div class="event-detail">
								<div class="event-date"><span><?php echo indonesian_date_date($lastnews->tgl); ?></span> <?php echo indonesian_date_month($lastnews->tgl); ?></div>
								<div class="event-description">
									<i>Last Event</i>
									<h3><a href="event-detail.html" title=""><?php echo $lastnews->judul; ?></a></h3>
									<span class="loc" style="display:none"><i class="fa fa-map-marker"></i> S.P.A. Solo Raya, Solo Baru</span>
									<p><?php echo $lastnews->artikel; ?></p>
								</div>
								<a class="event-btn" href="<?php echo base_url(); ?>news" title="">View more Event</a>
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
									<?php foreach ($news as $i => $v): ?>
									<div class="col-md-4">
										<div class="edu-post">
											<div class="post-img"><img src="<?php echo base_url().$v->image; ?>" alt="" /></div>
											<div class="post-detail">
												<span><?php echo indonesian_date($v->tgl); ?></span>
												<h3><a href="#" title=""><?php echo $v->judul; ?></a></h3>
												<p><?php echo $v->artikel; ?></p>
											</div>
										</div><!-- Edu Post -->
									</div>
									<?php endforeach; ?>

								</div>
							</div><!-- Edu Blog -->
							<div class="button-set">
								<br><br>
								<a class="button active" href="<?php echo base_url(); ?>news" title="">View all News & Events</a>
							</div>
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

<!DOCTYPE html>
<html class="no-js">
<?php $this->load->view('_partials/head') ?>
<body>
	<div class="theme-layout">
		<?php $this->load->view('_partials/topbar') ?>
		<section>
			<div class="block gray">
				<div class="container">
					<div class="row">
						<div class="col-md-5" style="text-align: right">
							<div class="explore-edu">
								<h2><?php echo $about_1->judul; ?></h2>
								<span><?php echo $about_1->subjudul; ?></span>
								<p><?php echo $about_1->artikel; ?></p>
							</div><!-- Explore Edu -->
						</div>
						<div class="col-md-7">
							<div class="edu-tabs">
								<div class="row">
									<div class="col-md-3">
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
									<div class="col-md-9">
										<div class="tab-carousel">
											<div data-hash="tab1" class="tab-content" style="text-align: left">
												<h4><?php echo $about_2->judul; ?></h4>
												<span><?php echo $about_2->subjudul; ?></span>
												<p><?php echo $about_2->artikel; ?></p>
											</div>
											<div data-hash="tab2" class="tab-content" style="text-align: left">
												<h4><?php echo $about_3->judul; ?></h4>
												<span><?php echo $about_3->subjudul; ?></span>
												<p><?php echo $about_3->artikel; ?></p>
											</div>
											<div data-hash="tab3" class="tab-content" style="text-align: left">
												<h4><?php echo $about_4->judul; ?></h4>
												<span><?php echo $about_4->subjudul; ?></span>
												<p><?php echo $about_4->artikel; ?></p>
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
			<div class="block blackish">
			<div class="fixed-bg bg1"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="parallax-title">
								<i><?php echo $teksaboutus->judul; ?></i>
								<h2><?php echo $teksaboutus->teks; ?></h2>
								<div class="row">
										<div class="col-md-12" style="padding-top: 15px;"><button class="button active">Download </button></div>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="block">
			<div class="fixed-bg stop bg2"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="title">
								<h2><?php echo $teksboardman->judul; ?></h2>
								<span><?php echo $teksboardman->subjudul; ?></span>
								<p><?php echo $teksboardman->teks; ?></p>
							</div>

								<div class="educational-staff">
									<div class="row">
									<?php foreach ($boardman as $i => $v): ?>
										<div class="col-md-4">
											<div class="staff">
												<div class="staff-img"><img src="<?php echo base_url().$v->image ?>" alt="" /></div>
												<div class="staff-detail">
													<h4><?php echo $v->nama ?></h4>
													<span><?php echo $v->jabatan ?></span>
													<div class="connected">
														<strong style="display: none">Stay Connected</strong>
														<a href="<?php echo prep_url($v->fb) ?>" title=""><i class="fa fa-facebook"></i></a>
														<a href="<?php echo prep_url($v->twitter) ?>" title=""><i class="fa fa-twitter"></i></a>
														<a href="<?php echo prep_url($v->linkedin) ?>" title=""><i class="fa fa-linkedin"></i></a>
													</div>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
									</div>
								</div>


							<div class="button-set" style="display: none">
								<a class="button active" href="#" title="">Get In Touch</a>
								<a class="button" href="#" title="">All Teachers</a>
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

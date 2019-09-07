<!DOCTYPE html>
<html class="no-js">
<?php $this->load->view('_partials/head') ?>
<style>
  .contact-input {
    background-color: #fff !important;
  }
</style>
<body>
	<div class="theme-layout">
		<?php $this->load->view('_partials/topbar') ?>
    <div class="pagetop">
    			<img src="<?php echo base_url(); ?>assets/front/images/resource/pagetop.jpg" alt="" />
    			<div class="pagetop-inner">
    				<div class="container">
    					<h1>Contact Us</h1>
    					<ul class="breadcrumbs">
    						<li><a href="#" title=""><i class="fa fa-home"></i> Home</a></li>
    						<li>Contact Us</li>
    					</ul>
    				</div>
    			</div>
    		</div><!-- PageTop -->
    		<section>
    			<div class="block grayish">
    			<div class="fixed-bg bg5"></div>
    				<div class="container">
    					<div class="row">
    						<div class="col-md-5">
    							<h4 class="traditional-title"><?php echo $elcontact1->teks; ?></h4>
    							<div class="touch">
    								<p><?php echo $elcontact2->teks; ?></p>
    								<ul>
    									<li>
    										<span><img src="<?php echo base_url(); ?>assets/front/images/icon1.png" alt="" /></span>
    										<p><?php echo $elalamat ?></p>
    									</li>
    									<li>
    										<span><img src="<?php echo base_url(); ?>assets/front/images/icon2.png" alt="" /></span>
    										<p><strong><?php echo $elnohp ?><i>- Central Office</i></strong><p>
    									</li>
    									<li>
    										<span><img src="<?php echo base_url(); ?>assets/front/images/icon3.png" alt="" /></span>
    										<p><strong><?php echo $elemail ?></strong></p>
    									</li>
    								</ul>
    							</div>
    						</div>

    						<div class="col-md-7">
    							<h4 class="traditional-title contact-box">CONTACT FORM </h4>
                  <h4 class="traditional-title contact-success bounceIn animated" style="color: #38447a;display : none">MESSAGE SEND <i class="fa fa-check"></i></h4>
    							<form class="contact-form contact-box">
    								<div class="row">
    									<div class="col-md-6">
    										<input class="contact-input" placeholder="Full Name" type="text" name="nama">
    										<input class="contact-input" placeholder="Email Address" type="email" name="email">
    										<input class="contact-input" placeholder="Subject" type="text" name="subject">
    									</div>
    									<div class="col-md-6"><textarea class="contact-input" placeholder="Detail" name="detail"></textarea></div>
    									<div class="col-md-12"><button type="button" class="full-btn button active" onclick="savedata()">Send Message</button></div>
    								</div>
    							</form>
    						</div>

    						<div class="col-md-12">
    							<div class="fancy-map">
    								<div class="map">
    										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63279.43957082208!2d110.7398255938388!3d-7.578791767998313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a3e073fac3f0d%3A0xc193906224381a44!2sSingapore+Piaget+Academy!5e0!3m2!1sen!2sid!4v1565957465602!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    								</div>
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
<script type="text/javascript">
  function savedata() {
    $.ajax({
          url: '<?php echo base_url(); ?>contact/savedata',
          type: "POST",
          data: $('.contact-form').serializeArray(),
          dataType: "JSON",
          success: function(data) {
              if (data.sukses == 'success') {
                  console.log('sukses')
                  $('.contact-form')[0].reset();
                  $('.contact-box').css('display','none');
                  $('.contact-success').css('display','inline');
              } else if (data.sukses == 'fail') {
                  console.log('gagal')
              }
          },
          error: function(jqXHR, textStatus, errorThrown) {
              showNotif('Fail', 'Internal Error', 'danger')
          }
      });
  }
</script>

</html>

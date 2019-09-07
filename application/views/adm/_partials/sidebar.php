<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url()?>assets/gambar/logo.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata("nama"); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MENU</li>
      <li class="newsandevents">
        <a href="<?php echo base_url().admin_url() ?>news">
          <i class="fa fa-newspaper-o"></i> <span>News & Events</span>
        </a>
      </li>
      <li class="aboutus">
        <a href="<?php echo base_url().admin_url() ?>about">
          <i class="fa fa-info-circle"></i> <span>About Us</span>
        </a>
      </li>
      <li class="slideshow">
        <a href="<?php echo base_url().admin_url() ?>slide">
          <i class="fa fa-sliders"></i> <span>Slideshow</span>
        </a>
      </li>
      <li class="contactus">
        <a href="<?php echo base_url().admin_url() ?>contact">
          <i class="fa fa-book"></i> <span>Contact Us</span>
        </a>
      </li>
      <li class="elementimage">
        <a href="<?php echo base_url().admin_url() ?>elimage">
          <i class="fa fa-picture-o"></i> <span>Element Image</span>
        </a>
      </li>
      <li class="elementteks">
        <a href="<?php echo base_url().admin_url() ?>elteks">
          <i class="fa fa-file-text-o"></i> <span>Element Teks</span>
        </a>
      </li>
      <li class="boardmanagement">
        <a href="<?php echo base_url().admin_url() ?>boardman">
          <i class="fa fa-users"></i> <span>Board Mangement</span>
        </a>
      </li>
      <li class="educationalprograms">
        <a href="<?php echo base_url().admin_url() ?>educational">
          <i class="fa fa-graduation-cap"></i> <span>Educational Programs</span>
        </a>
      </li>
      <li class="user">
        <a href="<?php echo base_url().admin_url() ?>user">
          <i class="fa fa-key"></i> <span>User</span>
        </a>
      </li>
    </ul>
  </section>
</aside>

<?php
$configtext = 't_config_text';
$configimage = 't_config_image';
$elnohp   = $this->db->get_where($configtext,array('tipe' => 'elnohp' ))->row()->teks;
$ellogo   = $this->db->get_where($configimage,array('tipe' => 'logo' ))->row()->image;
  $menu = '
  <ul>
    <li><a href="'.base_url().'" title="">Home</a></li>
    <li><a href="'.base_url().'about" title="">About Us</a></li>
    <li><a href="#" title="">Academics</a>
      <ul>
        <li><a href="#" title="">Early Learning Center</a></li>
        <li><a href="#" title="">Primary School</a></li>
        <li><a href="#" title="">Secondary School</a></li>
        <li><a href="#" title="">Junior College</a></li>
      </ul>
    </li>
    <li><a href="#" title="">Admissions</a></li>
    <li><a href="gallery.html" title="">Gallery</a></li>
    <li><a href="'.base_url().'news" title="">News & Events</a></li>
    <li><a href="'.base_url().'contact" title="">Contact Us</a></li>
  </ul>';

  $information = '
    <span>More Information: <i>'.$elnohp.'</i></span>
    <span>
      Stay Connected:
      <span class="socials">
        <a href="https://www.facebook.com/spasolorayapage/" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/spasoloraya/" title="Instagram" target="_blank"><i class="fa fa-twitter"></i></a>
      </span>
    </span>
    <div class="registration" style="display : none">
      <a href="login-registration.html" title="">Register</a>
      <a href="login-registration.html" title="">Sign in</a>
    </div>
  '
 ?>
<header>
  <div class="container">
    <div class="logo">
      <a href="<?php echo base_url() ?>" title=""><img src="<?php echo base_url().$ellogo ?>" alt="" /></a></div><!-- Logo -->
    <div class="header-wrap">
      <div class="topbar">
        <?php echo $information; ?>
      </div><!-- Top Bar -->

      <div class="menubar">
        <nav>
          <?php echo $menu; ?>
        </nav>
        <div class="header-search">
          <a class="search-btn" href="#" title=""><i class="icon-magnifier"></i></a>
          <form>
            <input placeholder="Enter Your Keyword and Press Enter" type="text">
          </form>
        </div><!-- Header Search -->
      </div>
    </div><!-- Header Wrap -->
  </div>
</header><!-- Header -->

<div class="responsive-header">
  <div class="topbar">
    <?php echo $information; ?>

  </div><!-- Top Bar -->

  <div class="responsive-logobar">
    <div class="responsive-logo"><a href="<?php echo base_url() ?>" title=""><img src="<?php echo base_url().$ellogo ?>" alt="" /></a></div>
    <a class="menu-button" href="#" title=""><i class="fa fa-bars"></i></a>
  </div><!-- Responsive Logbar -->
  <div class="responsive-menu">
    <a class="close-menu" href="#" title=""><i class="fa fa-remove"></i></a>
    <?php echo $menu; ?>
  </div>
</div><!-- Responsive Header -->

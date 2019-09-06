<?php
$configtext = 't_config_text';
$eltk     = $this->db->get_where($configtext,array('tipe' => 'eltk' ))->row()->teks;
$elnohp   = $this->db->get_where($configtext,array('tipe' => 'elnohp' ))->row()->teks;
$elalamat = $this->db->get_where($configtext,array('tipe' => 'elalamat' ))->row()->teks;
$elemail  = $this->db->get_where($configtext,array('tipe' => 'elemail' ))->row()->teks;

 ?>
<footer>
  <div class="container">
    <div class="footer-widgets">
      <div class="row">
        <div class="col-md-4">
          <div class="widget">
            <div class="about-widget">
              <div class="widget-logo"><a href="index.html" title=""><img src="images/logo-white.png" alt="" /></a></div>
              <p><?php echo $eltk ?></p>
              <ul>
                <li><span><i class="fa fa-map-marker"></i></span> <?php echo $elalamat ?> </li>
                <li><span><i class="fa fa-envelope"></i></span> <?php echo $elemail ?> </li>
                <li><span><i class="fa fa-phone"></i></span> <?php echo $elnohp ?> </li>
              </ul>
            </div>
          </div><!-- Widget -->
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <div class="tg-widget tg-widgettweets">

            <div class="tg-widgetcontent">
              <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fspasolorayapage&tabs=timeline&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId" width="100%" height="485" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
          </div>
        </div>

        <!-- InstaWidget -->
        <a href="https://instawidget.net/v/user/spasoloraya" id="link-694bac9d33802a5ed5059d5c5b4fd2db5946e88a46cedb99a60a99a11281446a">@spasoloraya</a>
        <script src="https://instawidget.net/js/instawidget.js?u=694bac9d33802a5ed5059d5c5b4fd2db5946e88a46cedb99a60a99a11281446a&width=300px"></script>
      </div>
    </div>
  </div>
</footer><!-- Footer -->

<div class="bottom-footer">
  <div class="container" style="text-align: center;">
    <p>COPYRIGHT © 2019 <a href="<?php echo base_url(); ?>" title="">S.P.A. Solo Raya</a>. All rights reserved. Developed by <a href="http://orcadigital.id" target="_blank">ORCA DIGITAL.</a></p>
    <ul style="display: none;">
      <li><a href="index.html" title="">Home</a></li>
      <li><a href="courses.html" title="">Courses</a></li>
      <li><a href="events.html" title="">Events</a></li>
      <li><a href="gallery1.html" title="">Gallery</a></li>
      <li><a href="blog.html" title="">Blog</a></li>
      <li><a href="contact.html" title="">Contact Us</a></li>
    </ul>
  </div>
</div><!-- Bottom Footer -->

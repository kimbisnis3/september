<!DOCTYPE html>
<html class="no-js">
<?php $this->load->view('_partials/head') ?>
<body>
  <div class="theme-layout">
		<?php $this->load->view('_partials/topbar') ?>
    <div class="pagetop">
    <img src="<?php echo base_url(); ?>assets/front/images/resource/pagetop.jpg" alt="" />
    <div class="pagetop-inner">
      <div class="container">
        <h1>News & Events</h1>
        <ul class="breadcrumbs">
          <li><a href="#" title=""><i class="fa fa-home"></i> Home</a></li>
          <li>News & Events</li>
        </ul>
      </div>
    </div>
  </div><!-- PageTop -->

  <section>
    <div class="block">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="edu-blog">
              <div class="row">
                <?php foreach ($news as $i => $v): ?>
                  <div class="col-md-4">
                    <div class="edu-post">
                      <div class="post-img"><img src="images/resource/post1.jpg" alt="" /></div>
                      <div class="post-detail">
                        <span><?php echo indonesian_date($v->tgl) ?></span>
                        <h3>
                          <a href="#" title="">
                            <?php echo $v->judul ?>
                          </a>
                        </h3>
                        <p><?php echo $v->artikel ?></p>
                      </div>
                    </div><!-- Edu Post -->
                  </div>
                <?php endforeach; ?>
              </div>
            </div><!-- Edu Blog -->

            <!-- <ul class="pagination">
              <li><a href="#" title=""><img src="<?php echo base_url(); ?>assets/front/images/arrow2.png" alt="" /></a></li>
              <li><a class="active" href="#" title="">1</a></li>
              <li><a href="#" title="">2</a></li>
              <li><a href="#" title=""><img src="<?php echo base_url(); ?>assets/front/images/arrow2.png" alt="" /></a></li>
            </ul> -->

            <?php
  					if (($currentpage < $numofpage)) {
  						$nextpage =  $currentpage + 1;
  						$prevpage =  $currentpage - 1;
  						$visible = 'inline';
  					} if (($currentpage == 1)) {
  						$nextpage =  $currentpage + 1;
  						$prevpage =  $currentpage;
  						$visible = 'inline';
  					} elseif ($currentpage == $numofpage) {
  						$nextpage = $numofpage;
  						$prevpage =  $currentpage - 1;
  						$visible = 'none';
  					}
  					?>

            <ul class="pagination">
              <li style="display : 'inline'"><a href="<?php echo $menu ?>?page=<?php echo $prevpage; ?>" ><img src="<?php echo base_url(); ?>assets/front/images/arrow2.png" alt="" /></a></li>
							<?php
							for( $no = 1; $no <= ($numofpage) ; $no++ ) { ?>

              <li><a class="<?php echo ($no == $currentpage) ? 'active' : ''; ?>" href="<?php echo $menu ?>?page=<?php echo $no; ?>"><?php echo $no; ?></a></li>
              <?php } ?>
              <li style="display: <?php echo $visible; ?>"><a href="<?php echo $menu ?>?page=<?php echo $nextpage; ?>"><img src="<?php echo base_url(); ?>assets/front/images/arrow2.png" alt="" /></a></li>

              <li style="display : 'inline'"><a href="<?php echo $menu ?>?page=<?php echo $nextpage; ?>"><img src="<?php echo base_url(); ?>assets/front/images/arrow2.png" /></a></li>
            </ul><!-- Pagination -->

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

<!DOCTYPE html>
<html>
  <?php $this->load->view(api_url().'_partials/head'); ?>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper" id="app">
      <?php $this->load->view(api_url().'_partials/topbar'); ?>
      <?php $this->load->view(api_url().'_partials/sidebar'); ?>
      <div class="content-wrapper">
        <section class="content-header">
          <h1 class="title"></h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active title"></li>
          </ol>
        </section>
      </div>
      <?php $this->load->view(api_url().'_partials/foot'); ?>
    </div>
  </body>
</html>
<?php $this->load->view(api_url().'_partials/js'); ?>
<script type="text/javascript">
  var title = 'Welcome';
  activemenu(title);
</script>
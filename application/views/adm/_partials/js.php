<div class="control-sidebar-bg"></div>
<script src="<?php echo base_url()?>assets/lte/plugins/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/lte/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/lte/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/lte/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/lte/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url()?>assets/lte/dist/js/demo_custom.js"></script>
<script src="<?php echo base_url()?>assets/lte/plugins/notify/bootstrap-notify.js"></script>
<script src="<?php echo base_url()?>assets/lte/plugins/select2/dist/js/select2.full.min.js"></script>
<script src="<?php echo base_url()?>assets/lte/plugins/ajaxupload/jquery.ajaxfileupload.js"></script>
<script src="<?php echo base_url()?>assets/lte/plugins/pace/pace.js"></script>
<script src="<?php echo base_url()?>assets/lte/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript">

	var php_base_url = '<?php echo base_url() ?>';

	$(function() {
	    if ($('#artikelx').length) {
	        CKEDITOR.replace('artikelx')
	    }
	})

	function dpicker() {
	    $('.datepicker').datepicker({
	        autoclose: true,
	        format: 'dd M yyyy'
	    })
	}

	function showimage(url) {
	    return `<img onerror="this.onerror=null; this.src='${php_base_url}assets/gambar/noimage.png'" style="max-width : 60px;" src="${php_base_url}${url}" >`
	}

	function aktiflabel(text) {
	    if (text == '0' || text == 'NULL' || text =='') {
            return '<span class="label label-danger">Tidak Aktif</span>';
        }
        else {
            return '<span class="label label-success">Aktif</span>';
        }
	}

	function select2() {
	    $('.select2').select2({
	        placeholder: 'Select an option',
	        allowClear: true
	    });
	}

	function showNotif(title, msg, jenis) {
	    $.notify({
	        title: '<strong>' + title + '</strong>',
	        message: msg
	    }, {
	        type: jenis,
	        z_index: 2000,
	        allow_dismiss: true,
	        delay: 10,
	        animate: {
	            enter: 'animated bounceIn',
				exit: 'animated bounceOut'
	        },
	    }, );
	};

	function activemenu(menu) {
  		$("."+menu.toLowerCase()).addClass("active");
  		$(".title").html(title);
	}

</script>

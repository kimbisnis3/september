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
            <li><a href="<?php echo base_url().admin_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active title"></li>
          </ol>
        </section>
          <div id="modal-konfirmasi" class="modal fade" role="dialog">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <center><h4 class="modal-title"></h4></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning btn-flat" data-dismiss="modal">Tidak</button>
                  <button type="button" id="btnHapus" class="btn btn-danger btn-flat">Ya</button>
                </div>
              </div>
            </div>
          </div>
          <section class="content">
            <div class="row">
              <div class="col-xs-12">
                <div class="box box-info">
                  <div class="box-header">
                    <div class="pull-left">
                      <button class="btn btn-success btn-flat refresh-btn" onclick="refresh()"><i class="fa fa-refresh"></i> Refresh</button>
                    </div>
                  </div>
                  <div class="box-body">
                    <div class="table-responsive mailbox-messages">
                      <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th width="5%">No</th>
                            <th>id</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Detail</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th width="12%">Opsi</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          </div><!-- /.content-wrapper -->
          <?php $this->load->view(api_url().'_partials/foot'); ?>
        </div>
      </body>
    </html>
  <?php $this->load->view(api_url().'_partials/js'); ?>
  <script type="text/javascript">
  var path = 'contact';
  var title = 'Contact Us';
  var apiurl = "<?php echo base_url().api_url() ?>" + path;
  var state;
  var idx     = -1;
  var table ;
  activemenu(title);

  $(document).ready(function() {

      table = $('#table').DataTable({
          "processing": true,
          "ajax": {
              "url": `${apiurl}/getall`,
              "type": "POST",
              "data": {},
          },
          "columns": [
          { "render" : (data,type,row,meta) => {return meta.row + 1} },
          { "data": "id" , "visible" : false},
          { "data": "datei" },
          { "data": "nama" },
          { "data": "detail" },
          { "data": "email" },
          { "data": "subject" },
          { "render" : (data,type,row,meta) => {return btnd(row.id)} },
          ]
      });
  });

  function refresh() {
      table.ajax.reload(null, false);
      idx = -1;
  }

  function hapus_data(id) {
      $('#modal-konfirmasi').modal('show');
      $(' #modal-konfirmasi .modal-title').text('Yakin Hapus Data ?');
      $('#btnHapus').attr('onclick', 'delete_data(' + id + ')');
  }

  function delete_data(id) {
      $.ajax({
          url: `${apiurl}/deletedata`,
          type: "POST",
          dataType: "JSON",
          data: {
              id: id,
          },
          success: function(data) {
              $('#modal-konfirmasi').modal('hide');
              if (data.sukses == 'success') {
                  refresh();
                  showNotif('Sukses', 'Data Berhasil Dihapus', 'success')
              } else if (data.sukses == 'fail') {
                  $('#modal-data').modal('hide');
                  refresh();
                  showNotif('Gagal', 'Data Gagal Dihapus', 'danger')
              }
          },
          error: function(jqXHR, textStatus, errorThrown) {
              showNotif('Fail', 'Internal Error', 'danger');
          }
      });
  }

  </script>
</body>
</html>

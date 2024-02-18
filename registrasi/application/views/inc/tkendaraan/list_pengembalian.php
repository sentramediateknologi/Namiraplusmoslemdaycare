<!DOCTYPE html>
<html lang="en" dir="/">

    <?php $this->load->view('layout/head') ?>

    <body class="text-left">
        <div class="app-admin-wrap layout-sidebar-compact sidebar-dark-purple sidenav-open clearfix">
            <?php $this->load->view('layout/navigation') ?>

            <div class="main-content-wrap d-flex flex-column">
                <?php $this->load->view('layout/header') ?>
                <!-- ============ Body content start ============= -->
                <div class="main-content">
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="#">Pengembalian</a></li>
                            <li><?= $title ?></li>
                        </ul>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12 mb-4">
                            <div class="card text-left">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <!-- <th>#</th> -->
                                                    <th>Peminjam</th>
                                                    <th>Kendaraan</th>
                                                    <th>Waktu</th>
                                                    <th>Tanggal</th>
                                                    <th>Status</th>
                                                    <th>Nota</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                             <tbody>
                                                <?php 
                                                $i = 1 ;
                                                foreach ($list as $key =>$row) { ?>
                                                    <tr>
                                                        <!-- <td><?= $i++ ?></td> -->
                                                        <td><?= ucwords($row->peminjam) ?></td>
                                                        <td><?= ucwords($row->merk.' #'.$row->nomor.' '.$row->tahun) ?></td>
                                                        <td>
                                                            <?= date("H:i", strtotime($row->waktu_peminjaman_mulai)) ?> - 
                                                            <?= date("H:i", strtotime($row->waktu_peminjaman_selesai)) ?>
                                                        </td>

                                                        <td>
                                                            <?= date("d", strtotime($row->tanggal_peminjaman_mulai)) ?> - 
                                                            <?= date("d M Y", strtotime($row->tanggal_peminjaman_selesai)) ?>
                                                        </td>

                                                        <td align="center"> 
                                                            <?php
                                                                switch ($row->status) {
                                                                    case 1:
                                                                        echo '<span class="badge badge-pill p-2 m-1 badge-primary">
                                                                            pengajuan
                                                                        </span>';
                                                                        break;
                                                                    case 2:
                                                                        echo '<span class="badge badge-pill p-2 m-1 badge-info">
                                                                            pending
                                                                        </span>';
                                                                    break;

                                                                    case 3:
                                                                        echo '<span class="badge badge-pill p-2 m-1 badge-danger">
                                                                            ditolak
                                                                        </span>';
                                                                    break;

                                                                    case 4:
                                                                        echo '<span class="badge badge-pill p-2 m-1 badge-success">
                                                                            disetujui
                                                                        </span>';
                                                                    break;
                                                                    
                                                                    default:
                                                                        echo '<span class="badge badge-pill p-2 m-1 badge-dark  ">
                                                                            selesai
                                                                        </span>';
                                                                        break;
                                                                }
                                                            ?>
                                                        </td>
                                                        <td align="center">
                                                            <?php if (!empty($row->nota)) { ?>
                                                                <a href="<?= base_url().'uploads/'.$row->nota?>" target="_blank">
                                                                    <span class="ul-btn__icon">
                                                                        <i class="i-Folder-Open"></i>
                                                                    </span>
                                                                </a>
                                                            <?php } else { 
                                                                    echo '-';
                                                            } ?>
                                                            
                                                        </td>

                                                        <td align="center">
                                                            <?php if ($this->session->userdata('auth')->id_role != 2) { ?>
                                                                <?php if ($row->status == 1 || $row->status == 2 || $row->status == 4) { ?>
                                                                     <button class="btn btn-info btn-icon detail mb-1" type="button" data-id="<?= $row->id; ?>">
                                                                        <span class="ul-btn__icon">
                                                                            <i class="i-Inbox-Out"></i>
                                                                        </span>
                                                                    </button>  
                                                                    <button class="btn btn-warning btn-icon edit mb-1" type="button" data-id="<?= $row->id; ?>">
                                                                        <span class="ul-btn__icon">
                                                                            <i class="i-Pen-3"></i>
                                                                        </span>
                                                                    </button>   
                                                                 
                                                                <?php } else { ?>
                                                                    <button class="btn btn-info btn-icon detail mb-1" type="button" data-id="<?= $row->id; ?>">
                                                                        <span class="ul-btn__icon">
                                                                            <i class="i-Inbox-Out"></i>
                                                                        </span>
                                                                    </button>  
                                                                <?php } ?>
                                                            <?php } else { ?>
                                                                <?php if ($row->status == 1) { ?>
                                                                    <button class="btn btn-info btn-icon detail mb-1" type="button" data-id="<?= $row->id; ?>">
                                                                        <span class="ul-btn__icon">
                                                                            <i class="i-Inbox-Out"></i>
                                                                        </span>
                                                                    </button>  
                                                                    <button class="btn btn-warning btn-icon edit mb-1" type="button" data-id="<?= $row->id; ?>">
                                                                        <span class="ul-btn__icon">
                                                                            <i class="i-Pen-3"></i>
                                                                        </span>
                                                                    </button>    
                                                                <?php } else { ?>
                                                                    <button class="btn btn-info btn-icon detail mb-1" type="button" data-id="<?= $row->id; ?>">
                                                                        <span class="ul-btn__icon">
                                                                            <i class="i-Inbox-Out"></i>
                                                                        </span>
                                                                    </button>  
                                                                <?php } ?>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <!-- <th>#</th> -->
                                                    <th>Peminjam</th>
                                                    <th>Kendaraan</th>
                                                    <th>Waktu</th>
                                                    <th>Tanggal</th>
                                                    <th>Status</th>
                                                    <th>Nota</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of col-->
                    </div>
                    <!-- end of main-content -->
                </div><!-- Footer Start -->

                <div class="modal fade" id="updating-modal" tabindex="-1" role="dialog" aria-labelledby="updating" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <?php echo form_open_multipart($controller.'/update_pengembalian'); ?>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Perbaharuan Data</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <fieldset>
                                        <div class="form-group">
                                            <label>Kendaraan</label>
                                            <select class="form-control" required name="id_kendaraan" id="id_kendaraan" disabled>
                                                <?php foreach ($kendaraan as $key => $d): ?>
                                                    <option value="<?= $d->id ?>" > <?= ucwords($d->name) ?> </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Tanggal Mulai</label>
                                                    <input class="form-control" type="date" name="tanggal_peminjaman_mulai" required id="tanggal_peminjaman_mulai" disabled>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Tanggal Selesai</label>
                                                    <input class="form-control" type="date" name="tanggal_peminjaman_selesai" required id="tanggal_peminjaman_selesai" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Waktu Mulai</label>
                                                    <input class="form-control" type="time" name="waktu_peminjaman_mulai" required id="waktu_peminjaman_mulai" disabled>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Waktu Selesai</label>
                                                    <input class="form-control" type="time" name="waktu_peminjaman_selesai" required id="waktu_peminjaman_selesai" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tujuan</label>
                                            <input class="form-control" type="text" name="tujuan" required id="tujuan" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Keperluan</label>
                                            <textarea class="form-control" type="text" name="keperluan" required id="keperluan" disabled> </textarea>
                                        </div>
                                      

                                        <?php if ($this->session->userdata('auth')->id_role != 2) { ?>
                                        
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" required name="status" id="status">
                                                <option value="4"> Disetujui </option>
                                                <option value="5"> Selesai </option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" type="text" name="keterangan" id="keterangan" required> </textarea>
                                        </div>

                                        <?php } ?>

                                        <input type="hidden" name="id" id="id">
                                    </fieldset>                                     
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                    <button class="btn btn-primary ml-2" type="submit">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="modal fade" id="detail-modal" tabindex="-1" role="dialog" aria-labelledby="updating" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Detail Peminjaman</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <fieldset>
                                        <div class="form-group">
                                            <label>Kendaraan</label>
                                            <p class="id_kendaraan"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Peminjam</label>
                                            <p class="peminjam"></p>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Tanggal Mulai</label>
                                                    <p class="tanggal_peminjaman_mulai"></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Tanggal Selesai</label>
                                                    <p class="tanggal_peminjaman_selesai"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Waktu Mulai</label>
                                                    <p class="waktu_peminjaman_mulai"></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Waktu Selesai</label>
                                                    <p class="waktu_peminjaman_selesai"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tujuan</label>
                                            <p class="tujuan"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Keperluan</label>
                                            <p class="keperluan">
                                        </div> 

                                        <div class="form-group">
                                            <label>Status</label>
                                            <p class="status">
                                        </div>

                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <p class="detail-keterangan">
                                        </div>

                                    </fieldset>                                     
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                    </div>
                </div>
                <!--  Modal -->
                <?php $this->load->view('layout/footer') ?>
            </div>            
        </div>
    </body>

    <?php $this->load->view('layout/custom') ?>
    <script src="<?= base_url().'dist-assets/'?>js/plugins/datatables.min.js"></script>
    <script src="<?= base_url().'dist-assets/'?>js/scripts/datatables.script.min.js"></script>
    <script type="text/javascript">
        var url = "<?= base_url().$controller ?>";

        $('.edit').click(function(){
            $.ajax({
                url: url + '/edit/' + $(this).data('id'),
                type:'GET',
                dataType: 'json',
                success: function(data){
                    
                    $("#id").val(data['list_edit']['id']);  
                    $("#id_kendaraan").val(data['list_edit']['id_kendaraan']);      
                    $("#tanggal_peminjaman_mulai").val(data['list_edit']['tanggal_peminjaman_mulai']);      
                    $("#tanggal_peminjaman_selesai").val(data['list_edit']['tanggal_peminjaman_selesai']);      
                    $("#waktu_peminjaman_mulai").val(data['list_edit']['waktu_peminjaman_mulai']);      
                    $("#waktu_peminjaman_selesai").val(data['list_edit']['waktu_peminjaman_selesai']);      
                    $("#tujuan").val(data['list_edit']['tujuan']);      
                    $("#keperluan").val(data['list_edit']['keperluan']);    

                    const status = data['list_edit']['status'];
                    $("#status").val(data['list_edit']['status']); 
                    $("#keterangan").val('');    
                   
                    $("#updating-modal").modal('show');
                }                
            }); 
        })

        $('.detail').click(function(){
            $.ajax({
                url: url + '/edit/' + $(this).data('id'),
                type:'GET',
                dataType: 'json',
                success: function(data){
                    
                    $(".id_kendaraan").text(data['list_edit']['merk'] +' - '+ data['list_edit']['tahun'] +' - '+ data['list_edit']['nomor']);
                    $(".peminjam").text(data['list_edit']['peminjam']);        
                    $(".tanggal_peminjaman_mulai").text(data['list_edit']['tanggal_peminjaman_mulai']);      
                    $(".tanggal_peminjaman_selesai").text(data['list_edit']['tanggal_peminjaman_selesai']);      
                    $(".waktu_peminjaman_mulai").text(data['list_edit']['waktu_peminjaman_mulai']);      
                    $(".waktu_peminjaman_selesai").text(data['list_edit']['waktu_peminjaman_selesai']);      
                    $(".tujuan").text(data['list_edit']['tujuan']);      
                    $(".keperluan").text(data['list_edit']['keperluan']);  
                    $(".detail-keterangan").text(data['list_edit']['keterangan'] ? data['list_edit']['keterangan'] : '-');   

                    var status = 'pengajuan'
                    
                    switch(data['list_edit']['status']) {
                      case "1":
                        status = 'pengajuan';
                        break;
                      case "2":
                        status = 'pending';
                        break;
                      case "3":
                        status = 'ditolak';
                        break;
                      case "4":
                        status = 'disetujui';
                        break;
                      default:
                        status = 'selesai';
                    }

                    $(".status").text(status);  

                    $("#detail-modal").modal('show');
                }                
            }); 
        })

        $('.delete').click(function () {
            var id = $(this).data('id') ;
            swal({
                title: 'Apakah yakin data ini ingin di hapus? ',
                showCancelButton: true,
                confirmButtonColor: '#4caf50',
                cancelButtonColor: '#f44336',
                confirmButtonText: 'Ya, Lanjutkan hapus!',
                cancelButtonText: 'Batal',
            }).then(function () {
                window.location = url + '/delete/' + id ;
            })
        });

        $('#status').on('change', function() {
            const status = this.value;
            if(status == 3 || status == 2) {
                $('.keterangan').show();
                $('#keterangan').attr('required',true);
            } else {
                $('.keterangan').hide();
                $('#keterangan').attr('required',false);
            }
        });
    </script>
</html>
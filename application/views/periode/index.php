    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <br><br>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Period List
                                    <?php if ($admin['akses'] == "Administrator") { ?>
                                        <button style="float: right;" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg"><i class="uil-plus"></i></button>
                                    <?php } ?>
                                </h4>
                                <br>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="basic-datatable-preview">
                                        <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th style="width: 6%">No</th>
                                                    <th>Tahun</th>
                                                    <th>Status</th>
                                                    <th style="width: 10%">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($periode as $p) {
                                                ?>
                                                    <tr>
                                                        <td><?= $no ?></td>
                                                        <td><?= $p['waktu'] ?></td>
                                                        <td>
                                                            <?php
                                                            if ($p['aktif'] == 'Y') {
                                                                echo "Aktif";
                                                            } else {
                                                                echo "Tidak Aktif";
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <a href="<?= base_url('periode/aktif/') . $p['id_periode'] ?>" class="btn btn-sm btn-success mb-1" onclick="return confirm('Are you sure want to update status?')">
                                                                    <i class="uil-check-circle"></i>
                                                                </a>
                                                                <a href="<?= base_url('periode/ubah/') . $p['id_periode'] ?>" class="btn btn-sm btn-primary mb-1">
                                                                    <i class="uil-edit"></i>
                                                                </a>
                                                                <a href="<?= base_url('periode/hapus/') . $p['id_periode'] ?>" class="btn btn-sm btn-danger mb-1" onclick="return confirmDelete(event, '<?php echo $p['id_periode'] ?>')">
                                                                    <i class="uil-trash"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                        </form>
                                                    </tr>
                                                <?php
                                                    $no = $no + 1;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div> <!-- end preview-->
                                </div> <!-- end tab-content-->

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div> <!-- end row-->
            </div> <!-- container -->

        </div> <!-- content -->

    </div>

    <!-- add -->

    <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Create New Period</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Tahun Aktif</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="uil-clock"></i></span>
                                        <input id="addTime" name="waktu" type="text" class="form-control" placeholder="Masukkan tahun">
                                    </div>
                                    <?= form_error('waktu', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <script>
        function confirmDelete(event, id_periode) {
            event.preventDefault(); // Mencegah tautan terbuka secara langsung

            swal({
                title: "Konfirmasi",
                text: "Apakah Anda yakin ingin menghapus data?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Batal",
                closeOnConfirm: false
            }, function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url: "<?php echo base_url('periode/hapus/') ?>" + id_periode,
                        type: "POST",
                        success: function(response) {
                            if (response.status === 'success') {
                                swal({
                                    title: "Sukses",
                                    text: "Data berhasil dihapus.",
                                    type: "success"
                                }, function() {
                                    location.reload(); // Reload halaman setelah menghapus
                                });
                            } else {
                                swal({
                                    title: "Sukses",
                                    text: "Data berhasil dihapus.",
                                    type: "success"
                                }, function() {
                                    location.reload(); // Reload halaman setelah menghapus
                                });
                            }
                        },
                        error: function() {
                            swal("Error", "Terjadi kesalahan saat menghapus data.", "error");
                        }
                    });
                }
            });

            return false; // Mencegah tautan terbuka secara langsung
        }
    </script>